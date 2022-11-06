<?php 

require_once "core/init.php";

$error = '';

// user is logged in
if ( isset($_SESSION['user']) ){
    header('index.php');
}

// register validation
if (isset($_POST['submit'])) {
    $firstname  = $_POST['firstname'];
    $lastname   = $_POST['lastname'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    if (!empty(trim($firstname)) && !empty(trim($lastname))) {
        if (!empty(trim($email)) && !empty(trim($password))) {
            //check data equality
            if (check_email($email) == 0){
                //insert data to database
                if (register_user($firstname, $lastname, $email, $password)){
                    redirect($email);
                } else {
                    $error = 'gagal daftar';
                }
            } else {
                $error = 'email sudah terdaftar';
            }
        }
    } else {
        $error = 'tidak boleh kosong';

    }
}

require_once "view/header.php";

?>

<form action="register.php" method="post">
    <label for="">Firstname</label>
    <input type="text" name="firstname" id="firstname"><br>

    <label for="">Lastname</label>
    <input type="text" name="lastname" id="lastname"><br>

    <label for="">Email</label>
    <input type="email" name="email" id="email"><br>

    <label for="">Password</label>
    <input type="password" name="password" id="password"><br>

    <input type="submit" name="submit" value="Register">

    <?php if($error != '') { ?>
        <div id="error">
            <?php echo $error; ?>
        </div>
    <?php } ?>

</form>

<?php 

require_once "view/footer.php";

?>
