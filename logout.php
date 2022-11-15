<?php 

require_once "core/init.php";
unset($_SESSION['user']);

set_flash_message('success', 'Signed out successfully');
header('Location: login.php');

?>