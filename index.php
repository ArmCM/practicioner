<?php

require 'functions.php';

$greeting = 'Hello, world';

//array
$names = [
    'armando',
    'carolina',
    'cesar',
    'magali',
    'julio',
];

// associative array
$persons = [
    1 => 'one',
    'age' => 29,
    'hair' => 'black',
    'career' => 'web developer',
];

// Booleans
$tasks = [
    'title' => 'homework',
    'due' => 'today',
    'assigned' => 'Armando',
    'completed' => true,
];

//functions
permission(12);

require 'index.view.php';
