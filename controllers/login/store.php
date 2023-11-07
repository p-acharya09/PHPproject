<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = [];

    if($email !== 'admin@admin.com' || $password !== 'admin@admin'){
        $errors['error'] = 'Wrong Credentials';
    }

    // If there are errors, handle them here
    if (!empty($errors)) {
        require 'views/login/create.view.php';
    }else{
        require 'views/admin/form.view.php';
    }
?>