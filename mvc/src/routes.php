<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/create', 'UsersController@create');
$router->post('/create', 'UsersController@createAction');