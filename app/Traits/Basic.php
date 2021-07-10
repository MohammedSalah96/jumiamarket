<?php

namespace App\Traits;

trait Basic {

    protected $countryCodes = [
        '237' => [
            'country' => 'Cameroon',
            'regex' => '#\(237\)\ ?[2368]\d{7,8}$#'
        ],
        '251' => [
            'country' => 'Ethiopia',
            'regex' => '#\(251\)\ ?[1-59]\d{8}$#'
        ],
        '212' => [
            'country' => 'Morocco',
            'regex' => '#\(212\)\ ?[5-9]\d{8}$#'
        ],
        '258' => [
            'country' => 'Mozambique',
            'regex' => '#\(258\)\ ?[28]\d{7,8}$#'
        ],
        '256' => [
            'country' => 'Uganda',
            'regex' => '#\(256\)\ ?\d{9}$#'
        ]
    ];
}
