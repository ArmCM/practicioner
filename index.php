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
$tasks = [
    'title' => 'homework',
    'due' => 'today',
    'assigned' => 'Armando',
    'completed' => true,
];

//functions
require 'functions.php';

// class
class Task {

    protected $results;

    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    /**
     * Define las tareas completas
     *
     * @return bool
     */
    public function setComplete()
    {
        return $this->completed = true;
    }

    /**
     * Obtiene las tareas completas
     *
     * @return bool
     */
    public function getCompleted()
    {
        return $this->completed;
    }
}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('clean my room'),
];
$tasks[0]->setComplete();
$tasks[1]->setComplete();

require 'index.view.php';
