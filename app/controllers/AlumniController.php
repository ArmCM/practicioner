<?php

namespace App\Controllers;

use App\Core\App;

class AlumniController
{
    public function index()
    {

        $alumni = App::get('database')->selectAll('users');

        return view('alumni', compact('alumni'));
    }

    public function store()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);

        return redirect('alumni');
    }
}