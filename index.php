<?php

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
$l_tasks = [
    'title' => 'homework',
    'due' => 'today',
    'assigned' => 'Armando',
    'completed' => true,
];

//functions
require 'functions.php';

// class
require 'Task.php';

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('clean my room'),
];
$tasks[0]->setComplete();
$tasks[1]->setComplete();

// PDO
require 'Todo.php';

$pdo = connectToDb();

$todos = fetchAllTodos($pdo);

require 'index.view.php';
