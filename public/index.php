<?php
require_once '../vendor/autoload.php';

$router = new \Core\Router;

require '../routes.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

try {
    $router->direct($uri, $_SERVER['REQUEST_METHOD']);
} catch (Exception $e) {
    // Obsługa błędów
}
