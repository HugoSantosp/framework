<?php

return [
    'get' => [
        '/' => 'LoginController@index',
        '/dash' => 'HomeController@index'
    ],
    'post' => [
        '/login' => 'LoginController@store',
    ]
];
