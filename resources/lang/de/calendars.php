<?php

return [
    'actions'       => [
        'add_epoch'         => 'Epoche hinzufügen',
        'add_intercalary'   => 'Schalttage hinzufügen',
        'add_month'         => 'Monat hinzufügen',
        'add_moon'          => 'Mond hinzufügen',
        'add_season'        => 'Jahreszeit hinzufügen',
        'add_week'          => 'Wochennamen hinzufügen',
        'add_weekday'       => 'Wochentag hinzufügen',
        'add_year'          => 'Jahr hinzufügen',
        'set_today'         => 'Als aktuellen Tag festlegen.',
        'today'             => 'Heute',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'Wiederholt sich jedes Jahr',
    ],
    'create'        => [
        'description'   => 'Einen neuen Kalender erstellen',
        'success'       => 'Kalender \':name\' erstellt.',
        'title'         => 'Neuer Kalender',
    ],
    'destroy'       => [
        'success'   => 'Kalender \':name\' gelöscht',
    ],
    'edit'          => [
        'description'   => 'Kalender aktualisieren',
        'success'       => 'Kalender \':name\' aktualisiert',
        'title'         => 'Kalender :name bearbeiten',
        'today'         => 'Kalenderdatum aktualisiert.',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'Bestehendes Objekt',
            'new'       => 'Neues Ereignis',
            'switch'    => 'Auswahl ändern',
        ],
        'create'    => [
            'description'   => 'Erstelle ein Kalender Ereignis',
            'success'       => 'Kalender Ereignis wurde erstellt',
            'title'         => 'Kalender Ereignis zu :name hinzufügen',
        ],
        'destroy'   => 'Ereignis aus Kalender :name entfernt',
        'edit'      => [
            'description'   => 'Aktualisiere ein Kalender Ereignis',
            'success'       => 'Kalender Ereignis wurde aktualisiert',
            'title'         => 'Aktualisiere das Kalender Ereignis in :name',
        ],
        'helpers'   => [
            'add'               => 'Füge ein bestehendes Ereignis aus der Liste hinzu.',
            'new'               => 'Oder gebe einfach einen Namen für ein neues Ereignis ein.',
            'other_calendar'    => 'Sie bearbeiten eine Erinnerung, die sich im :calender befindet.',
        ],
        'modal'     => [
            'title' => 'Füge ein Event zum Kalender hinzu',
        ],
        'success'   => 'Event \':event\' zum Kalender hinzugefügt.',
    ],
    'events'        => [
        'description'   => 'Events in diesem Kalender.',
        'title'         => 'Kalender :name Events',
    ],
    'fields'        => [
        'calendar'              => 'Übergeordneter Kalender',
        'calendars'             => 'Kalender',
        'colour'                => 'Farbe',
        'comment'               => 'Kommentar',
        'current_day'           => 'Aktueller Tag',
        'current_month'         => 'Aktueller Monat',
        'current_year'          => 'Aktuelles Jahr',
        'date'                  => 'Aktuelles Datum',
        'has_leap_year'         => 'Hat Schaltjahre',
        'intercalary'           => 'Schalttage',
        'is_incrementing'       => 'Vorausdatierung',
        'is_recurring'          => 'Wiederkehrend',
        'leap_year_amount'      => 'Tage hinzufügen',
        'leap_year_month'       => 'Monat',
        'leap_year_offset'      => 'Jedes',
        'leap_year_start'       => 'Schaltjahr',
        'length'                => 'Länge des Ereignisses',
        'length_days'           => ':count Tag|:count Tage',
        'months'                => 'Monate',
        'moons'                 => 'Monde',
        'name'                  => 'Name',
        'parameters'            => 'Parameter',
        'recurring_periodicity' => 'Wiederkehrende Periodizität',
        'recurring_until'       => 'Wiederholt sich bis zum Jahr',
        'reset'                 => 'Wöchentliches zurücksetzen',
        'seasons'               => 'Jahreszeiten',
        'start_offset'          => 'Startdatum',
        'suffix'                => 'Suffix',
        'type'                  => 'Typ',
        'week_names'            => 'Wochennamen',
        'weekdays'              => 'Wochentage',
    ],
    'helpers'       => [
        'month_type'    => 'Schaltmonate benutzen keine Wochentage, aber beeinflussen trotzdem Monde und Jahreszeiten.',
        'nested'        => 'Anzeigen von Kalendern ohne übergeordneten Kalender. Klicken Sie auf einen Kalender, um dessen Unterkalender anzuzeigen.',
        'start_offset'  => 'Standardmäßig startet der Kalender am ersten Wochentag des Jahres 0. Das Ändern dieses Felds beeinflusst, wo der erste Tag des Kalenders platziert wird.',
    ],
    'hints'         => [
        'intercalary'       => 'Tage die außerhalb der Standard Monate und Wochen liegen. Sie beeinflussen keine Wochentage aber beeinflussen Mondzyklen.',
        'is_incrementing'   => 'Wenn aktiviert, wird das aktuelle Datum des Kalenders automatisch um 00:00 UTC erhöht',
        'is_recurring'      => 'Ein Event kann wiederkehrend sein. Es wird dann jedes Jahr am gleichen Tag erscheinen.',
        'months'            => 'Dein Kalender sollte mindestens 2 Monate haben.',
        'moons'             => 'Hinzugefügte Monde werden bei jedem Vollmond im Kalender angezeigt.',
        'parent_calendar'   => 'Wenn Sie dem Kalender einen übergeordneten Kalender geben, werden die Erinnerungen und Wettereffekte des übergeordneten Kalenders angezeigt.',
        'reset'             => 'Beginnen Sie den Anfang des Monats oder Jahres immer am ersten Wochentag.',
        'seasons'           => 'Erstelle Jahreszeiten in dem du den jeweiligen Start festlegst. Kanka übernimmt den Rest.',
        'weekdays'          => 'Lege die Namen deiner Wochentage fest. Es werden mindestens 2 Wochentage benötigt.',
        'weeks'             => 'Definieren Sie einige Namen für die wichtigeren Wochen Ihres Kalenders.',
        'years'             => 'Manche Jahre sind so wichtig, dass sie ihren eigenen Namen haben.',
    ],
    'index'         => [
        'add'           => 'Neuer Kalender',
        'description'   => 'Verwalte die Kalender von :name',
        'header'        => 'Kalender von :name',
        'title'         => 'Kalender',
    ],
    'layouts'       => [
        'month' => 'Monat',
        'year'  => 'Jahr',
    ],
    'modals'        => [
        'switcher'  => [
            'title' => 'Jahreswechsel',
        ],
    ],
    'month_types'   => [
        'intercalary'   => 'Schaltmonat',
        'standard'      => 'Standard',
    ],
    'options'       => [
        'events'    => [
            'recurring_periodicity' => [
                'month' => 'Monatlich',
                'year'  => 'Jährlich',
            ],
        ],
        'resets'    => [
            ''      => 'Keiner',
            'month' => 'Monatlich',
            'year'  => 'Jährlich',
        ],
    ],
    'panels'        => [
        'intercalary'   => 'Schalttage',
        'leap_year'     => 'Schaltjahr',
        'months'        => 'Monatlich',
        'weeks'         => 'Wöchentlich',
        'years'         => 'Benamte Jahre',
    ],
    'parameters'    => [
        'intercalary'   => [
            'length'    => 'Dauer in Tagen',
            'month'     => 'Am Ende welchen Monats',
            'name'      => 'Name des Schaltmonats',
        ],
        'month'         => [
            'alias' => 'Monat Alias',
            'length'=> 'Anzahl der Tage',
            'name'  => 'Monatsname',
            'type'  => 'Typ',
        ],
        'moon'          => [
            'fullmoon'  => 'Vollmond alle (Tage)',
            'name'      => 'Mond Name',
            'offset'    => 'Tag des ersten Vollmonds',
        ],
        'seasons'       => [
            'day'   => 'Starttag',
            'month' => 'Startmonat',
            'name'  => 'Jahreszeitname',
        ],
        'weeks'         => [
            'name'      => 'Wochenname',
            'number'    => 'Nummer',
        ],
        'year'          => [
            'name'      => 'Name',
            'number'    => 'Jahr',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'Farbe',
        'comment'           => 'Geburtstag, Volksfest, Sonnenwende',
        'date'              => 'Das aktuelle Datum',
        'leap_year_amount'  => 'Anzahl der Tage, die bei einem Schaltjahr hinzugefügt werden',
        'leap_year_month'   => 'Monat, in dem die Tage hinzugefügt werden',
        'leap_year_offset'  => 'Alle wieviele Jahre ist Schaltjahr',
        'leap_year_start'   => 'Erstes Jahr, das ein Schaltjahr ist',
        'length'            => 'Ereignislänge in Tagen',
        'months'            => 'Anzahl der Monate in einem Jahr',
        'name'              => 'Name des Kalenders',
        'recurring_until'   => 'Letztes Jahr der Wiederholung (leer lassen für immer wiederholend)',
        'seasons'           => 'Anzahl der Jahrezeiten',
        'suffix'            => 'Aktueller Suffix der Ära (v. Chr., n. Chr.)',
        'type'              => 'Art des Kalenders',
        'weekdays'          => 'Anzahl der Tage in einer Woche',
    ],
    'show'          => [
        'description'       => 'Eine Detailansicht eines Kalenders',
        'missing_details'   => 'Dieser Kalender konnte nicht angezeigt werden. Kalender brauchen mindestens 2 Monate und 2 Wochentage um korrekt generiert zu werden.',
        'moon_full_moon'    => ':moon Vollmond',
        'moon_new_moon'     => ':moon Neumond',
        'moon_waning_moon'  => ':moon abnehmender Mond',
        'moon_waxing_moon'  => ':moon zunehmender Mond',
        'tabs'              => [
            'events'        => 'Kalender Events',
            'information'   => 'Information',
            'weather'       => 'Wetter',
        ],
        'title'             => 'Kalender :name',
    ],
];
