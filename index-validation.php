<?php 

    require_once "core/init.php";

    // timeline validation
    if (isset($_POST['timeline'])) {
        $message    = $_POST['timeline'];
        $id_user    = $_POST['id_user'];

        if (!empty(trim($message))) {
            if (create_post($message, $id_user)){
                set_flash_message('success', 'Post successful');
                header('Location: index.php');
                die();
            } else {
                header('Location: profile.php');
                set_flash_message('error','Failed to post');
            }
        }
    }
