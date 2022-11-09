<?php

include 'core/init.php';

// login validation
if (isset($_POST['submit'])) {
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    if (!empty(trim($email)) && !empty(trim($password))) {
        if (check_email($email) != 0){
            if(check_data($email, $password)) {
                set_flash_message('success', 'Signed in successfully');
                redirect($email);
                die();
            } else set_flash_message('error', 'Please enter the data correctly');
        } else set_flash_message('error', 'Your email is not registered');
    } else set_flash_message('error', 'Please enter email and your password');

    header("Location: login.php");
} 