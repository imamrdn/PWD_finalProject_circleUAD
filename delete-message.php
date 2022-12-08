<?php
    require_once "core/init.php";
    
    if( isset($_GET['id']) ) {
        if (delete_message($_GET['id'])) {
            if( check_role($_SESSION['user']) == 'admin' ) {
                header('Location: profile.php');
            } 
            
            if( check_role($_SESSION['user']) == 'client' ) {
                header('Location: index.php');
            }    
            set_flash_message('success', 'Successfully deleted message');
        } else {
            set_flash_message('error', 'Failed to delete messages');
        }
        set_flash_message('success', 'Successfully deleted message');
    } else {
        set_flash_message('error', 'Failed to delete messages');
    }
