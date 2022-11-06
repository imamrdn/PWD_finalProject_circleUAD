<?php 

require_once "core/init.php";

if ( !isset($_SESSION['user']) ){
    die('anda belum login');
}

?>

<h1>Halaman profil <?php echo $_SESSION['user']; ?> </h1>
<a href="logout.php">Logout</a>