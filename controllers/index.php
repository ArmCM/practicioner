<?php

$todos = $app['database']->selectAll('task');

$users = $app['database']->selectAll('users');

require 'views/index.php';

