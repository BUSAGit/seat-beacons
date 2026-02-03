<?php
return [
    'seat-beacons' => [
        'name'          => 'seat-beacons',
        'label'         => 'Yump Beacons',
        'icon'          => 'fas fa-lightbulb',
        'route_segment' => 'beacons',
        'permission'    => 'seat-beacons.access',
        'route'         => 'seat-beacons::index',
        'entries'       => [],
    ],
];