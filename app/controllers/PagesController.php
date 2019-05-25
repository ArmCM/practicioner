<?php

namespace App\Controllers;

use Task;

class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $author = 'Armando Calderon Monreal';

        return view('about', ['author' => $author]);
    }

    public function aboutCulture()
    {
        return view('about-culture', []);
    }

    public function users()
    {
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
        require 'helpers/helpers.php';

        $tasks = [
            new Task('Go to the store'),
            new Task('Finish my screencast'),
            new Task('clean my room'),
        ];
        $tasks[0]->setComplete();
        $tasks[1]->setComplete();

        return view('users', [
            'greeting' => $greeting,
            'names' => $names,
            'persons' => $persons,
            'l_tasks' => $l_tasks,
            'tasks' => $tasks,
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
