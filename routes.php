<?php

//routes

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('users', 'PagesController@users');
$router->get('contact', 'PagesController@contact');
$router->get('about-culture', 'PagesController@aboutCulture');
$router->get('alumni', 'AlumniController@index');
$router->post('alumni', 'AlumniController@store');
