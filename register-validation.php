<?php 
    require_once "core/init.php";

    // register validation
    if (isset($_POST['submit'])) {
        $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];

        if (!empty(trim($firstname)) && !empty(trim($lastname))) {
            if (!empty(trim($email)) && !empty(trim($password))) {
                //check data equality
                if (check_email($email) == 0){
                    //insert data to database
                    if (register_user($firstname, $lastname, $email, $password)) {
                        set_flash_message('success', 'Registration successful');
                        redirect($email);
                        die();
                    }
                    else set_flash_message('error','Failed to register');
                }
            } else set_flash_message('error','Your email is not registered');
        } else set_flash_message('error','Please complete your data');

        header("Location: register.php");
    } 

?>