<?php 
$config = require('config.php');
$db = new Database($config['database']);
$about = $db->query('select * from about')->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artist_header= $_POST['artist_header'];
    $artist_description = $_POST['artist_description'];
    $artgallery_header = $_POST['artgallery_header'];
    $artgallery_description = $_POST ['artgallery_description'];

    $result = $db->query('UPDATE `about` SET `artist_header`=:artist_header, `artist_description`=:artist_description, `artgallery_header`=:artgallery_header, `artgallery_description`=:artgallery_description where id = 1', [
        'artist_header' => $artist_header,
        'artist_description' => $artist_description,
        'artgallery_header' => $artgallery_header,
        'artgallery_description' => $artgallery_description
    ]);
}

require "views/admin/about.view.php";
?>