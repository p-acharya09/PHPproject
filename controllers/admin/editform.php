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
$list = $db->query('SELECT * FROM media WHERE id =' . $id)->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    
    if ($_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) {
        $uploadDir = 'uploads/';
        $fileTmp = $_FILES['image']['tmp_name'];
        $fileName = basename($_FILES['image']['name']); 
        $fileDestination = $uploadDir . $fileName; // Destination path
        
        if (move_uploaded_file($fileTmp, $fileDestination)) {
            $result = $db->query('UPDATE `media` SET `title`=:title, `subtitle`=:subtitle, `images`=:images WHERE `id`=:id', [
                'title' => $title,
                'subtitle' => $subtitle,
                'images' => $fileDestination,
                'id' => $id,
            ]);
        } else {
            echo "File upload failed.";
        }
        $list = $db->query('SELECT * FROM media WHERE id =' . $id)->fetch();
        require "views/admin/editform.view.php";

    } else {
        $result = $db->query('UPDATE `media` SET `title`=:title, `subtitle`=:subtitle, `images`=:images WHERE `id`=:id', [
            'title' => $title,
            'subtitle' => $subtitle,
            'images' => $_POST['images'],
            'id' => $id,
        ]);
        $list = $db->query('SELECT * FROM media WHERE id =' . $id)->fetch();
        require "views/admin/editform.view.php";
    }
} else {
    require "views/admin/editform.view.php";
}
?>