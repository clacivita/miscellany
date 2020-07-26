
<div class="row">
    <div class="col-md-12">
        <div class="form-group required">
            <label>{{ trans('crud.fields.name') }}</label>
            {!! Form::text('name', null, ['placeholder' => trans('maps/groups.placeholders.name'), 'class' => 'form-control', 'maxlength' => 191]) !!}
        </div>

        @include('cruds.fields.visibility')

        <div class="form-group">
            <label>{{ trans('maps/groups.fields.position') }}</label>
            {!! Form::number('position', null, ['placeholder' => trans('maps/groups.placeholders.position'), 'class' => 'form-control', 'maxlength' => 3]) !!}
        </div>
    </div>
</div>
