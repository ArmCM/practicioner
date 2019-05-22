<?php

$todos = $app['database']->selectAll('task');

require 'views/index.php';

