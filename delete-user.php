<?php
    require_once "core/init.php";
    
    if( isset($_GET['id']) ) {
        if (delete_data_user($_GET['id'])) {
            if( check_role($_SESSION['user']) == '1' ) {
                header('Location: data-user.php');
            } 
            set_flash_message('success', 'Successfully deleted user');
        } else {
            set_flash_message('error', 'Failed to delete user');
        }
    }

?>