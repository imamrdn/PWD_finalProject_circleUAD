<?php 

    require_once "core/init.php";

    // timeline validation
    if (isset($_POST['submit'])) {
        $message    = $_POST['message'];
        $date       = $_POST['created_at'];
        $id_user    = $_POST['user_id'];

        if (!empty(trim($message))) {
            if (create_post($message, $created_at, $id_user)){
                set_flash_message('success', 'Post successful');
                
            } else set_flash_message('error','Failed to post');
        }
       
        header("Location: index.php");
    } 

?>