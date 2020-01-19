<?php

use App\Core\App;

/**
 * asi asociamos lo que retorna config al container con el metodo bind
 *
 */
App::bind('config', require 'config.php');


/**
 *  App::get('config') asi obtenemos las propiedades asignadas en la key config del contenedor
 *
 */
App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));

function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.php";
}

function redirect($path)
{
   return header("Location: /{$path}");
}
