<?php
    require_once "core/init.php";
    
    if( isset($_GET['id']) ) {
        if (delete_message($_GET['id'])) {
            header('Location: profile.php');
            set_flash_message('success', 'Successfully deleted message');
        } else {
            set_flash_message('error', 'Failed to delete messages');
        }
    }

?>