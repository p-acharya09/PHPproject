<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require "controllers/registration/store.php";
}else{
    require "views/registration/create.view.php";
}

?>