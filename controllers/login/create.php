<?php

session_start();
$_SESSION= [];
session_destroy();

$config = require('config.php');
$db = new Database($config['database']);
$contact = $db->query('select * from settings')->fetch();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require "controllers/login/store.php";
}else{
    require "views/login/create.view.php";
}

?>