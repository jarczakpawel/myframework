<?php
require '../core/bootstrap.php';

$router = new Router;

require '../routes.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

require $router->direct($uri, $_SERVER['REQUEST_METHOD']);
