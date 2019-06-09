<?php

spl_autoload_register();

function parseRequest() : array {
    $requestPath = $_SERVER['REQUEST_URI'];
    if (substr($requestPath, 0, strlen(APP_ROOT . '/')) !== APP_ROOT . '/') {
        die('APP_ROOT is incorrectly defined in config.php. Use "" or "/blog".');
    }
    $requestPath = substr($requestPath, strlen((APP_ROOT)));
    $requestParts = explode('/', $requestPath);

    $controller = DEFAULT_CONTROLLER;
    if (count($requestParts) >= 2 && $requestParts[1] !== '') {
        $controller = $requestParts[1];
    }

    $action = DEFAULT_ACTION;
    if (count($requestParts) >= 3 && $requestParts[2] !== '') {
        $action = $requestParts[2];
    }

    $params = array_splice($requestParts, 3);

    $requestParsed = [
        'controller' => $controller,
        'action' => $action,
        'params' => $params
    ];

    return $requestParsed;
}

function processRequest(array $requestParsed) {
    $controller = $requestParsed['controller'];
    $action = $requestParsed['action'];
    $controllerClassName = '\controllers\\' . ucfirst(strtolower($controller)) . 'Controller';

    if (class_exists($controllerClassName)) {
        $controller = new $controllerClassName($controller, $action);
    } else {
        $controllerFileName = $controllerClassName . '.php';
        die("Cannot find controller '{$controller}' in class '{$controllerFileName}'");
    }

    if (method_exists($controller, $action)) {
        $params = $requestParsed['params'];
        call_user_func_array(array($controller, $action), $params);
        $controller->renderView();
    } else {
        die("Cannot find action '{$action}' in controller '{$controllerClassName}'");
    }
}

function _autoload(string $class_name) {
    if (file_exists("controllers/{$class_name}.php")) {
        include "controllers/{$class_name}.php";
    }

    if (file_exists("models/{$class_name}.php")) {
        include "models/{$class_name}.php";
    }
}

function cutLongText(string $text, int $maxSize = 200, bool $htmlEscape = true): string {
    $append = '';
    if (strlen($text) > $maxSize) {
        $text = substr($text, 0, $maxSize);
        $append = '&hellip;';
    }

    if ($htmlEscape) {
        $text = htmlspecialchars($text);
    }
    return $text . $append;
}