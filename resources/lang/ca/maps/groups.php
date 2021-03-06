<?php

return [
    'actions'       => [
        'add'   => 'Afegeix un grup nou',
    ],
    'create'        => [
        'success'   => 'S\'ha creat el grup «:name».',
        'title'     => 'Nou grup',
    ],
    'delete'        => [
        'success'   => 'S\'ha eliminat el grup «:name».',
    ],
    'edit'          => [
        'success'   => 'S\'ha actualitzat el grup «:name».',
        'title'     => 'Edita el grup :name',
    ],
    'fields'        => [
        'position'  => 'Posició',
    ],
    'helper'        => [
        'amount'            => 'Incloure un marcador a un grup permet mostrar o amagar-los tots alhora (per exemple, mostrar o amagar totes les botigues d\'una ciutat). Un mapa pot tenir fins a :amount grups.',
        'boosted_campaign'  => 'Les :boosted poden tenir fins a :amount grups.',
    ],
    'placeholders'  => [
        'name'      => 'Botigues, tresors, PNJs...',
        'position'  => 'Camp opcional per a indicar l\'ordre en el qual apareixen els grups.',
    ],
];
