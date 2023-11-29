<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$proj_root = '/';
// incase of subfolders $proj_root = '/folder_name/'

$routes = [
    $proj_root.'/' => 'controllers/index.php',
    $proj_root.'about' => 'controllers/about.php',
    $proj_root.'contact' => 'controllers/contact.php',
    $proj_root.'media' => 'controllers/media.php',
    $proj_root.'artdetail' => 'controllers/artdetail.php',
    $proj_root.'login' => 'controllers/login/create.php',
    $proj_root.'adminforms' => 'controllers/admin/form.php',
    $proj_root.'admintables' => 'controllers/admin/list.php',
    $proj_root.'adminabout' => 'controllers/admin/about.php',
    $proj_root.'adminsettings' => 'controllers/admin/settings.php'
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

    // require "views/{$code}.php";
    echo ("Failed. 404 error");

    die();
}

routeToController($uri, $routes);