<?php 

require_once "core/init.php";

if ( !isset($_SESSION['user']) ){
    die('anda belum login');
}

?>

<h1>Halaman profil</h1>