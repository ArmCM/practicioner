<?php

/**
 * asi asociamos lo que retorna config al container con el metodo bind
 *
 */
App::bind('config', require 'config.php');


/**
 *  App::get('config') asi obtenemos las propiedades asignadas en la key config del contenedor
 *
 */
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));