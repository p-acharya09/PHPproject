<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require "controllers/login/store.php";
}else{
    require "views/login/create.view.php";
}

?>