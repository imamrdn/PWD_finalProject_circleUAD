<?php 
    require_once "core/init.php";

    // register validation
    if (isset($_POST['submit'])) {
        $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        $role       = $_POST['role'];

        if (!empty(trim($firstname)) && !empty(trim($lastname))) {
            if (!empty(trim($email)) && !empty(trim($password))) {
                //check data equality
                if (check_email($email) == 0){
                    //insert data to database
                    if (create_user($firstname, $lastname, $email, $password, $role)) {
                        set_flash_message('success', 'Create user successful');
                        redirect($email);
                        die();
                    }
                    else set_flash_message('error','Failed to create');
                }
            } else set_flash_message('error','Your email is not created');
        } else set_flash_message('error','Please complete your data');

        header("Location: data-user.php");
    }
