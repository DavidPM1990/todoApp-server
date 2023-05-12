<?php

return [


    'stub_path' => 'default',


    'layout' => 'layouts.app',

    'model' => [
        'namespace' => 'App\Models',

        'unwantedColumns' => [
            'id',
            'password',
            'email_verified_at',
            'remember_token',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ],

    'controller' => [
        'namespace' => 'App\Http\Controllers',
    ],

];
