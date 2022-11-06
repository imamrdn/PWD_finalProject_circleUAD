<?php 

require_once "core/init.php";

$error = '';

// user is logged in
if ( isset($_SESSION['user']) ){
    header('index.php');
}


// login validation
if (isset($_POST['submit'])) {
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    if (!empty(trim($email)) && !empty(trim($password))) {
        if (login_check_email($email)){
            if(check_data($email, $password)){
                $_SESSION['user'] = $email;
                header('Location: index.php'); 
            } else {
                $error = 'data ada yang salah';
            }
        } else {
            $error = 'email belum terdaftar';
        }
    } else {
        $error = 'tidak boleh kosong';

    }
}

require_once "view/header.php";

?>

<form action="login.php" method="post">
    <label for="">Email</label>
    <input type="email" name="email" id="email"><br>

    <label for="">Password</label>
    <input type="password" name="password" id="password"><br>

    <input type="submit" name="submit" value="Login">

    <br>

    <?php if($error != '') { ?>
        <div id="error">
            <?php echo $error; ?>
        </div>
    <?php } ?>

</form>

<?php 

require_once "view/footer.php";

?>
