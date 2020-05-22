<?php

return [
    'abilities'     => [
        'title' => 'Потомки Способности :name',
    ],
    'create'        => [
        'success'   => 'Способность \':name\' создана.',
        'title'     => 'Новая Способность',
    ],
    'destroy'       => [
        'success'   => 'Способность \':name\' удалена.',
    ],
    'edit'          => [
        'success'   => 'Способность \':name\' обновлена.',
        'title'     => 'Редактировать :name',
    ],
    'fields'        => [
        'abilities' => 'Способности',
        'ability'   => 'Способность',
        'charges'   => 'Заряды',
        'name'      => 'Название',
        'type'      => 'Тип',
    ],
    'helpers'       => [
        'descendants'   => 'Этот список содержит все родительские Способности этой Способности, а не только ближайшие.',
        'nested'        => 'При Вложенном Виде способности будут показаны вложенными. Способности без родительских способностей будут видны по умолчанию. На способности с потомками можно нажать для показа их потомков. Вы можете продолжать нажимать пока есть потомки для показа.',
    ],
    'index'         => [
        'add'           => 'Новая Способность',
        'description'   => 'Создавайте силы, заклинания, подвиги и прочее для своих объектов.',
        'header'        => 'Способности :name',
        'title'         => 'Способности',
    ],
    'placeholders'  => [
        'charges'   => 'Число зарядов. Ссылайтесь на атрибуты с помощью {Level}*{CHA}',
        'name'      => 'Файрбол, Сигнал тревоги, Ловкий удар',
        'type'      => 'Заклинание, Подвиг, Атака',
    ],
    'show'          => [
        'tabs'  => [
            'abilities' => 'Способности',
        ],
        'title' => 'Способность :name',
    ],
];