<?php
    $proj_root = '/';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $config = require('config.php');
    $db = new Database($config['database']);
    $user = $db->query('select * from user')->fetch();


    $errors = [];

    // Check if the entered username and password match
    if (($_POST["email"] == $user["email"]) && ($_POST["password"] == $user["password"])) {
        // Set session variables
        session_start();
        $_SESSION["authenticated"] = true;

        // Redirect to the admin forms page
        header("Location:".$proj_root."adminforms");
    } else {
        $errors['error'] = "Invalid Email or Password";
        require('views/login/create.view.php');
    }
    
?>