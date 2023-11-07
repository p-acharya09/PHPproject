<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/media' => 'controllers/media.php',
    '/artdetail' => 'controllers/artdetail.php',
    '/register' =>'controllers/registration/create.php',
    '/adminforms' => 'views/admin/form.view.php',
    '/admintables' => 'views/admin/list.view.php',
    '/adminabout' => 'views/admin/about.view.php',
    '/adminsettings' => 'views/admin/settings.view.php'
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