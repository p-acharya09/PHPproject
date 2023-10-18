<?php
// Create a seperate validator class for handling validation
    class Validator
    {
        public static function string($value, $min = 1, $max = INF)
        {
            $value = trim($value);
    
            return strlen($value) >= $min && strlen($value) <= $max;
        }
    
        public static function email(string $value): bool
        {
            return filter_var($value, FILTER_VALIDATE_EMAIL);
        }
    
        public static function greaterThan(int $value, int $greaterThan): bool
        {
            return $value > $greaterThan;
        }
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $validator = new Validator();
    $errors = [];

    // Validate email
    if (!$validator->email($email)) {
        $errors['email'] = 'Please provide a valid email address.';
    }

    // Validate password
    if (!$validator->string($password, 8, 255)) {
        $errors['password'] = 'Please provide a valid password (at least 8 characters).';
    }


    // If there are errors, handle them here
    if (!empty($errors)) {
        require 'views/registration/create.view.php';
    }else{
        echo 'Make a New Admin Dashboard View Here When You Have Clear Idea About Backend';
    }
?>