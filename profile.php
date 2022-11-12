<?php 
    require_once "core/init.php";

    if ( !isset($_SESSION['user']) ) {  
        header('Location: login.php');
        set_flash_message('error', 'You are not logged in');  
    }

    require_once "view/header.php";
?>  

<h1>Halaman profil <?php echo $_SESSION['user']; ?> </h1>
<a href="logout.php">Logout</a>

<?php if( check_role($_SESSION['user']) == '1' ) { ?>
    <a href="data-user.php"><br>Lihat Data User</a>
    <div>Halo admin</div>
<?php } ?>

<?php 
    require_once "view/footer.php";
?>


