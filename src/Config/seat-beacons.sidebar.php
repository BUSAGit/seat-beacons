<?php
return 
[
     'tools' => 
        [
            'name'       => 'seat-beacons::index',
            'label'      => 'Yump Beacons',
            'icon'       => 'fas fa-lightbulb',
            'permission' => 'seat-beacons.access',
            'route'      => 'seat-beacons::index',
        ],
];





return 
[
        'awox.settings' => 
        [
            'name' => 'Awox Finder',
            'icon' => 'fas fa-skull',
            'route_segment' => 'configuration',
            'permission' => 'awox.read',
            'route' => 'awox.settings',
        ],
];