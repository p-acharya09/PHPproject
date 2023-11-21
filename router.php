<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/media' => 'controllers/media.php',
    '/artdetail' => 'controllers/artdetail.php',
    '/login' =>'controllers/login/create.php',
    '/adminforms' => 'controllers/admin/form.php',
    '/admintables' => 'controllers/admin/list.php',
    '/adminabout' => 'controllers/admin/about.php',
    '/adminsettings' => 'controllers/admin/settings.php'
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);