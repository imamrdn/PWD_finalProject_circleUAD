<?php 

require_once "core/init.php";

// register validation
if (isset($_POST['submit'])) {
    $firstname  = $_POST['firstname'];
    $lastname   = $_POST['lastname'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    if (!empty(trim($firstname)) && !empty(trim($lastname))) {
        if (!empty(trim($email)) && !empty(trim($password))) {
            //check data equality
            if (register_check_email($email)){
                //insert data to database
                if (register_user($firstname, $lastname, $email, $password)){
                    echo 'berhasil';
                } else {
                    echo 'gagal daftar';
                }
            } else {
                echo 'email sudah terdaftar';
            }
        }
    } else {
        echo 'tidak boleh kosong';

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

</form>

<?php 

require_once "view/footer.php";

?>
