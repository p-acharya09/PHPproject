<?php 
$config = require('config.php');
$db = new Database($config['database']);


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $uploadDir = 'uploads/';
    $fileTmp = $_FILES['image']['tmp_name'];
    $fileName = basename($_FILES['image']['name']); 
    $fileDestination = $uploadDir . $fileName; // Destination path
    move_uploaded_file($fileTmp, $fileDestination); 
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $result = $db->query('INSERT INTO `media` (`title`, `subtitle`,`image`) VALUES (:title, :subtitle, :images)',[
        'title' => $title,
        'subtitle' => $subtitle,
        'images' => $fileDestination,
    ]);
    require "views/admin/form.view.php";
    }else{
        require "views/admin/form.view.php";
    }

?>