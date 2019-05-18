<?php

////variables
$greeting = 'Hello, world';

////array
$names = [
    'armando',
    'carolina',
    'cesar',
    'magali',
    'julio',
];

//// associative array
$persons = [
    1 => 'one',
    'age' => 29,
    'hair' => 'black',
    'career' => 'web developer',
];

//// Booleans
$l_tasks = [
    'title' => 'homework',
    'due' => 'today',
    'assigned' => 'Armando',
    'completed' => true,
];

//// class
require 'Task.php';
require 'helpers/helpers.php';

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('clean my room'),
];
$tasks[0]->setComplete();
$tasks[1]->setComplete();

require 'views/users.php';