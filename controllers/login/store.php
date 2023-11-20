<?php
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
        header("Location: /adminforms");
    } else {
        echo "You are here";
    }
    
?>