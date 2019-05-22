<?php

//routes

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about-culture', 'controllers/about-culture.php');
$router->get('contact', 'controllers/contact.php');
$router->get('users', 'controllers/users.php');
$router->post('names', 'controllers/list.php');