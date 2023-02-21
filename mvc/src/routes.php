<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/create', 'UsersController@create');
$router->post('/create', 'UsersController@createAction');

$router->get('/user/{id}/update', 'UsersController@update');
$router->post('/user/{id}/update', 'UsersController@updateAction');

$router->get('/user/{id}/delete', 'UsersController@delete');