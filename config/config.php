<?php

return [
    'database' => [
        'host' => 'localhost',
        'dbname' => 'animals_alexsablan.info',
        'username' => 'alex',
        'password' => 'Q_funk2424!',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ],
    ],
];
