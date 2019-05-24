<?php

$app = [];

$app['config'] = $config = require 'config.php';

//antes de usar autoload
//require 'core/Router.php';
//
//require 'core/Request.php';
//
//require 'core/database/Connection.php';
//
//require 'core/database/QueryBuilder.php';

//

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);