<?php
$router = new \Core\Router;

$router->get('', 'HomeController@index');
$router->get('products', 'ProductController@index');
$router->get('products/:id', 'ProductController@show');
