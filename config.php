<?php

return [
    'database' => [
        'name' => 'phpbeginners',
        'username' => 'root',
        'password' => 'a0b0c0d0',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ],
    ]
];