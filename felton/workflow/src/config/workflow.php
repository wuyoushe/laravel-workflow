<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2021/7/9
 * Time: 14:26
 */

return [
    'straight'   => [
        'type'          => 'state_machine',
        'marking_store' => [
            'type' => 'single_state',
        ],
        'supports'      => ['stdClass'],
        'places'        => ['a', 'b', 'c'],
        'transitions'   => [
            't1' => [
                'from' => 'a',
                'to'   => 'b',
            ],
            't2' => [
                'from' => 'b',
                'to'   => 'c',
            ]
        ],
    ]
];