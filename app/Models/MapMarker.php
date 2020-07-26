<?php


namespace App\Models;


use App\Facades\Mentions;
use App\Traits\VisibilityTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class MapMarker
 * @package App\Models
 *
 * @property Map $map
 * @property Entity $entity
 * @property int $id
 * @property int $map_id
 * @property int $entity_id
 * @property string $name
 * @property string $entry
 * @property int $longitude
 * @property int $latitude
 * @property string $colour
 * @property int $shape_id
 * @property int $size_id
 * @property int $icon
 * @property string $custom_icon
 * @property string $custom_shape
 * @property bool $is_draggable
 * @property float $opacity
 * @property string $visibility
 * @property int $group_id
 * @property MapGroup $group
 */
class MapMarker extends Model
{
    use VisibilityTrait;

    const SHAPE_MARKER = 1;
    const SHAPE_LABEL = 2;
    const SHAPE_CIRCLE = 3;
    const SHAPE_POLY = 5;

    /** Fillable fields */
    protected $fillable = [
        'map_id',
        'name',
        'entry',
        'visibility',
        'entity_id',
        'type_id',
        'size_id',
        'shape_id',
        'icon',
        'custom_icon',
        'custom_shape',
        'is_draggable',
        'colour',
        'longitude',
        'latitude',
        'opacity',
        'group_id',
    ];

    /** @var bool Editing the map */
    protected $editing = false;

    /** @var bool Exploring the map */
    protected $exploring = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function map()
    {
        return $this->belongsTo(Map::class, 'map_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entity()
    {
        return $this->belongsTo(Entity::class, 'entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo(MapGroup::class, 'group_id');
    }

    /**
     * @return string
     */
    public function icon(): string
    {
        if (!empty($this->custom_icon)) {
            return '<i class="' . $this->custom_icon . '"></i>';
        }
        if ($this->icon == 4 && !empty($this->entity)) {
            return '<div class="entity-image" style="background-image: url(' . $this->entity->child->getImageUrl(40) . '); width: 100%; height: 100%"></div>';
        }

        switch ($this->icon) {
            case 2:
                return '<i class="fa fa-question"></i>';
            case 3:
                return '<i class="fa fa-exclamation"></i>';
            default:
                return '<i class="fa fa-marker"></i>';
        }
    }

    /**
     * @return int
     */
    public function size(): int
    {
        return ($this->size_id * 20) + 20;
    }

    public function marker(): string
    {
        if ($this->shape_id == MapMarker::SHAPE_CIRCLE) {
            return 'L.circle([' . $this->latitude . ', ' . $this->longitude . '], {
                radius: ' . $this->size_id * 20 . ',
                fillColor: \'' . e($this->colour) . '\',
                title: \'' . $this->makerTitle() . '\',
                stroke: false,
                fillOpacity: ' . $this->opacity() . ',
                className: \'marker marker-circle marker-' . $this->id . ' size-' . $this->size_id . '\','
                . ($this->isDraggable() ? 'draggable: true' : null) . '
            })' . $this->popup();

        }
        elseif ($this->shape_id == MapMarker::SHAPE_LABEL) {
            return 'L.marker([' . ($this->latitude ). ', ' . $this->longitude . '], {
                opacity: 0,'
                . ($this->editing ? 'draggable: true' : null) . '
            }).bindTooltip(`' . $this->name . '`, {
                direction: \'center\',
                permanent: true,
                offset: [0,0]
            })' . $this->popup();
        } elseif ($this->shape_id == MapMarker::SHAPE_POLY) {
            $coords = [];
            $segments = explode(' ', $this->custom_shape);
            foreach ($segments as $segment) {
                $coord = explode(',', $segment);
                if (!empty($coord) && !empty($coord[0]) && !empty($coord[1])) {
                    $coords[] = '[' . $coord[0] . ', ' . $coord[1] . ']';
                }
            }
            // ' . implode(', ', $coords) . '
            return 'L.polygon([[500,500],[500,600],[600,600],[600,500]], {
                color: \'' . e($this->colour) . '\',
                weight: 1,
                opacity: ' . $this->opacity() . ',
                smoothFactor: 1,
                linecap: \'round\',
                linejoin: \'round\',
            })' . $this->popup();
        }

        return 'L.marker([' . ($this->latitude ). ', ' . $this->longitude . '], {
            title: \'' . $this->makerTitle() . '\',
            opacity: ' . $this->opacity() . ','
            . ($this->isDraggable() ? 'draggable: true,' : null) . '
            ' . $this->markerIcon() . '
        })' . $this->popup() . $this->draggable();
    }

    /**
     * @return string
     */
    protected function popup(): string
    {
        if ($this->editing) {
            return '';
        }
        if ($this->exploring) {
            return '
            .bindPopup(`
            <div class="marker-popup-content">
                <h4 class="marker-header">' . e($this->name) . '</h4>
                <p class="marker-text">' . Mentions::mapAny($this) . '</p>
            </div>
            ' . (!empty($this->entity) ? '
            <p><a href="' . $this->entity->url() . '">' . e($this->entity->name) . '</a>' : null) . '`)
            .on(`mouseover`, function (ev) {
                this.openPopup();
            })
            .on(`click`, function (ev) {
                window.markerDetails(`' . route('maps.markers.details', [$this->map_id, $this->id]) . '`)
            })';
        }

        return '.bindPopup(`
            <div class="marker-popup-content">
                <h4 class="marker-header">' . e($this->name) . '</h4>
                <p class="marker-text">' . Mentions::mapAny($this) . '</p>
            </div>
            ' . (!empty($this->entity) ? '
            <p><a href="' . $this->entity->url() . '">' . e($this->entity->name) . '</a>' : null) . '
            <div class="marker-popup-actions">
                <a href="' . route('maps.map_markers.edit', [$this->map_id, $this->id]). '" class="btn btn-xs btn-primary">' . __('crud.edit') . '</a>

                <a href="#" class="btn btn-xs btn-danger delete-confirm" data-toggle="modal" data-name="'. e($this->name) .'"
                        data-target="#delete-confirm" data-delete-target="delete-form-marker-' . $this->id . '"
                        title="' . __('crud.remove') . '">
                    ' . __('crud.remove') . '
                </a>
            </div>`
        )';
    }

    /**
     * Determin if a marker is draggable
     * @return bool
     */
    protected function isDraggable(): bool
    {
        return $this->editing || ($this->exploring && $this->is_draggable);
    }

    /**
     * @return string
     */
    protected function draggable(): string
    {
        if (!$this->isDraggable()) {
            return '';
        }

        // Exploring and moving? Update through ajax
        if ($this->exploring && $this->is_draggable) {
            return '.on(`dragstart`, function() {
                this.closePopup();
            })

            .on(\'dragend\', function() {
                var coordinates = marker' . $this->id . '.getLatLng();
                console.log(`dragend`, coordinates);
                $.ajax({
                    url: `' . route('maps.markers.move', [$this->map_id, $this->id]) . '`,
                    type: `post`,
                    data: {latitude: coordinates.lat.toFixed(3), longitude: coordinates.lng.toFixed(3)}
                }).done(function (data) {
                    console.log(`moved marker`);
                });
            })';
        }

        return '.on(\'dragend\', function() {
            var coordinates = marker' . $this->id . '.getLatLng();
//            console.log(\'coords\', coordinates);
//            console.log(\'new coords\', coordinates.lat, coordinates.lng);

            var shapeId = $(\'input[name="shape_id"]\').val();
            var polyCoords = $(\'textarea[name="custom_shape"]\');
            if (shapeId == "5") {
//                console.log(\'poly\', polyCoords.val());
                polyCoords.val(polyCoords.val() + \' \' + coordinates.lat.toFixed(3) + \',\' + coordinates.lng.toFixed(3));
            } else {
                $(\'#marker-latitude\').val(coordinates.lat.toFixed(3));
                $(\'#marker-longitude\').val(coordinates.lng.toFixed(3));
            }
        })';
    }

    protected function markerIcon(): string
    {
        if ($this->icon == 5) {
            return '';
        }

        $icon = '`<i class="fa fa-pin-marker"></i>`';
        if (!empty($this->custom_icon)) {
            if (Str::startsWith($this->custom_icon, '<i')) {
                $icon = '`' . $this->custom_icon . '`';
            } elseif(Str::startsWith($this->custom_icon, '<?xml')) {
                $icon = 'L.Util.template(`<div class="custom-icon">' . $this->resizedCustomIcon() . '</div>`)';
            }
        }
        elseif ($this->icon == 2) {
            $icon = '`<i class="fa fa-question"></i>`';
        } elseif ($this->icon == 3) {
            $icon = '`<i class="fa fa-exclamation"></i`';
        }

        return 'icon: L.divIcon({
                html: ' . $icon . ',
                iconSize: [40, 40],
                className: \'marker marker-' . $this->id . '\'
        })';

    }

    /**
     * @return string
     */
    protected function makerTitle(): string
    {
        if (empty($this->name) && !empty($this->entity)) {
            return e($this->entity->name);
        }
        return e($this->name);
    }

    /**
     * @return $this
     */
    public function editing(): self
    {
        $this->editing = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function exploring(): self
    {
        $this->exploring = true;
        return $this;
    }

    /**
     * Get the opacity of a point. Users input a %, convert it to a float for leaflet
     * @return float
     */
    protected function opacity(): float
    {
        if (empty($this->opacity) || $this->opacity > 100) {
            return 1.0;
        }

        return round($this->opacity / 100, 1);
    }

    /**
     * Resize any custom svg icon to be limited in height and width to the pin
     * @return string
     */
    protected function resizedCustomIcon(): string
    {
        $resized = preg_replace('`(width|height)=\".*?\"`sui', '$1="32"', $this->custom_icon);
        $resized = str_replace('height="32"', 'height="32" style="margin-top: 4px;"', $resized);
        return $resized;
    }
}
