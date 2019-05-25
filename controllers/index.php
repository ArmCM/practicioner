<?php

$todos = App::get('database')->selectAll('task');

$users = App::get('database')->selectAll('users');

require 'views/index.php';

