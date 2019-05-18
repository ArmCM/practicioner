<?php

//$greeting = 'Hello, world';

//array
//$names = [
//    'armando',
//    'carolina',
//    'cesar',
//    'magali',
//    'julio',
//];

// associative array
//$persons = [
//    1 => 'one',
//    'age' => 29,
//    'hair' => 'black',
//    'career' => 'web developer',
//];

// Booleans
//$l_tasks = [
//    'title' => 'homework',
//    'due' => 'today',
//    'assigned' => 'Armando',
//    'completed' => true,
//];

//helpers
//require '../helpers/functions.php';

// class
//require 'Task.php';

//$tasks = [
//    new Task('Go to the store'),
//    new Task('Finish my screencast'),
//    new Task('clean my room'),
//];
//$tasks[0]->setComplete();
//$tasks[1]->setComplete();

// PDO

$todos = $app['database']->selectAll('task');

require 'views/index.view.php';

