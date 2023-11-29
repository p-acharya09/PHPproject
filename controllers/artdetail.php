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

$contact = $db->query('select * from settings')->fetch();
$list = $db->query('select * from media where id='.$id)->fetch();
$listall = $db->query('select * from media')->fetchAll();
$listall = array_slice($listall, 0, 8);

require "views/artdetail.view.php";
?>