<?php 

require_once "core/init.php";

if ( !isset($_SESSION['user']) ){
    die('anda belum login');
}

require_once "view/header.php";

?>

<h1>Halaman profil <?php echo $_SESSION['user']; ?> </h1>


<?php 
require_once "view/footer.php"; 
?>
