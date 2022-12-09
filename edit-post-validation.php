<?php 
require_once "core/init.php";


// timeline validation
if (isset($_POST['id_timeline'])) {
    $message    = $_POST['post'];
    $id_timeline    = $_POST['id_timeline'];
    
    if (!empty(trim($message))) {
        if (update_post($message, $id_timeline)){
            set_flash_message('success', 'Edit post successful');
                header('Location: index.php');
                die();
            } else {
                header('Location: profile.php');
                set_flash_message('error','Failed to edit post');
            }
        }
    }