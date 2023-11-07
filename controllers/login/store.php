<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $config = require('config.php');
    $db = new Database($config['database']);
    $user = $db->query('select * from user')->fetch();


    $errors = [];

    if($email !== $user['email'] || $password !== $user['password']){
        $errors['error'] = 'Wrong Credentials';
    }

    // If there are errors, handle them here
    if (!empty($errors)) {
        require 'views/login/create.view.php';
    }else{
        require 'views/admin/form.view.php';
    }
?>