<?php 
$config = require('config.php');
$db = new Database($config['database']);


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $result = $db->query('INSERT INTO `media` (`title`, `subtitle`) VALUES (:title, :subtitle)',[
        'title' => $title,
        'subtitle' => $subtitle
    ]);
    require "views/admin/form.view.php";
    }else{
        require "views/admin/form.view.php";
    }

?>