<?php
namespace Core;

class Router {
    protected $routes = [];

    public function get($path, $controller) {
        $this->routes['GET'][$path] = $controller;
    }

    public function post($path, $controller) {
        $this->routes['POST'][$path] = $controller;
    }

    public function direct($uri, $requestType) {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new Exception('No route defined for this URI.');
    }

    protected function callAction($controller, $action) {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        return $controller->$action();
    }
}
