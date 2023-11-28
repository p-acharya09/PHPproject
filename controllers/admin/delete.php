<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$uri_segments = explode('/', rtrim($uri, '/'));
$id = end($uri_segments);

if (!ctype_digit($id)) {
    require "views/404.php";
    die();
}

$config = require('config.php');
$db = new Database($config['database']);

$list = $db->query('DELETE FROM media WHERE id ='. $id);
$list = $db->query('select * from media')->fetchAll();
require "views/admin/list.view.php";





