<?php

return [
    'get' => [
        '/' => 'LoginController@index',
        '/dash' => 'HomeController@index',
        '/logout'=> 'LoginController@logout',
    ],
    'post' => [
        '/login' => 'LoginController@store',
    ]
];
