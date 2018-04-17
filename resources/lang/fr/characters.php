<?php

return [
    'create'        => [
        'description'   => 'Créer une nouvelle personne',
        'success'       => 'Personne \':name\' créée.',
        'title'         => 'Créer une nouvelle personne',
    ],
    'destroy'       => [
        'success'   => 'Personne \':name\' supprimée.',
    ],
    'edit'          => [
        'description'   => 'Modifier une personne',
        'success'       => 'Personne \':name\' modifiée.',
        'title'         => 'Modifier Personne :name',
    ],
    'fields'        => [
        'age'                       => 'Age',
        'eye'                       => 'Couleur des yeux',
        'family'                    => 'Famille',
        'fears'                     => 'Craine',
        'free'                      => 'Texte libre',
        'goals'                     => 'Objectifs',
        'hair'                      => 'Cheveux',
        'height'                    => 'Taille',
        'history'                   => 'Histoire',
        'image'                     => 'Image',
        'is_personality_visible'    => 'Personnalité visible',
        'languages'                 => 'Langues',
        'location'                  => 'Lieu',
        'mannerisms'                => 'Maniérismes',
        'name'                      => 'Nom',
        'physical'                  => 'Physique',
        'race'                      => 'Race',
        'relation'                  => 'Relation',
        'sex'                       => 'Sexe',
        'skin'                      => 'Peau',
        'title'                     => 'Titre',
        'traits'                    => 'Traits',
        'type'                      => 'Type',
        'weight'                    => 'Poid',
    ],
    'hints'         => [
        'is_personality_visible'    => 'Tu peux cacher toute la personnalité des membres de type non Admin.',
    ],
    'index'         => [
        'actions'       => [
            'random'    => 'Nouvelle Personne Aléatoire',
        ],
        'add'           => 'Nouvelle Personne',
        'description'   => 'Gérer les personnes de :name.',
        'header'        => 'Personnes de :name',
        'title'         => 'Personnes',
    ],
    'organisations' => [
        'actions'       => [
            'add'   => 'Nouvelle organisation',
        ],
        'create'        => [
            'description'   => 'Associater une organisation à une personne',
            'success'       => 'Personne ajoutée à l\'organisation.',
            'title'         => 'Nouvelle Organisation pour :name',
        ],
        'destroy'       => [
            'success'   => 'Organisation de personne supprimée.',
        ],
        'edit'          => [
            'description'   => 'Modifier l\'organisation d\'une personne',
            'success'       => 'Organisation de personne modifiée.',
            'title'         => 'Modifier l\'Organisation pour :name',
        ],
        'fields'        => [
            'organisation'  => 'Organisation',
            'role'          => 'Rôle',
        ],
        'placeholders'  => [
            'organisation'  => 'Choix d\'une organisation...',
        ],
    ],
    'placeholders'  => [
        'age'       => 'Age',
        'eye'       => 'Couleur des yeux',
        'family'    => 'Choix d\'une famille',
        'fears'     => 'Craintes',
        'free'      => 'Texte libre',
        'goals'     => 'Objectifs',
        'hair'      => 'Cheveux',
        'height'    => 'Taille',
        'history'   => 'Histoire',
        'image'     => 'Image',
        'languages' => 'Langues',
        'location'  => 'Choix du lieu',
        'mannerisms'=> 'Maniérismes',
        'name'      => 'Nom',
        'physical'  => 'Physique',
        'race'      => 'Race',
        'sex'       => 'Sexe',
        'skin'      => 'Peau',
        'title'     => 'Titre',
        'traits'    => 'Traits',
        'type'      => 'PNG, Joueurs, Autre',
        'weight'    => 'Poid',
    ],
    'sections'      => [
        'appearance'    => 'Physique',
        'general'       => 'Inpourmation générale',
        'history'       => 'Histoire',
        'personality'   => 'Personnalité',
    ],
    'show'          => [
        'description'   => 'Détail d\'une personne',
        'tabs'          => [
            'attributes'    => 'Attributs',
            'free'          => 'Texte libre',
            'history'       => 'Histoire',
            'items'         => 'Objets',
            'organisations' => 'Organisations',
            'personality'   => 'Personnalité',
            'relations'     => 'Relations',
        ],
        'title'         => 'Personne :name',
    ],
];
