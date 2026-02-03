<?php

return [
    'beacons' => [
        'name'          => 'seat-beacons::index',
        'label'         => 'Yump Beacons',
        'icon'          => 'fas fa-lightbulb',
        'route_segment' => 'beacons',
        'permission'    => 'seat-beacons.access',
        'route'         => 'seat-beacons::index',
    ],
];
