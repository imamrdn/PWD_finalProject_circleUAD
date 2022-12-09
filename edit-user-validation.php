<?php 
    require_once "core/init.php";

    // register validation
    if (isset($_POST['submit'])) {
        $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        $id         = $_POST['id_user'];

        if (!empty(trim($firstname)) && !empty(trim($lastname))) {
            if (!empty(trim($email)) && !empty(trim($password))) {

                    //insert data to database
                    if (update_user($firstname, $lastname, $email, $password, $id)) {
                        set_flash_message('success', 'Update was successful');
                        header("Location: data-user.php");
                        die();
                    }
                    else set_flash_message('error','Failed to update user');
                
            } 
        } else set_flash_message('error','Please complete your data');

        header("Location: data-user.php");
      
    }

?>
