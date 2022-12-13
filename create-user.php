<?php

require_once 'core/init.php';

if (check_role($_SESSION['user']) == '0') {
    set_flash_message('error', 'You have not access to this page');
    header('Location: profile.php');
}

$name = get_name_user();
$users = get_all_user();
require_once 'view/header.php';
require_once 'view/header-profile.php';
?>

<form action="" method="post">
    <div class="row mb-3">
        <div class="col">
            <label for="First Name">First Name</label>
            <input type="text" class="form-control" placeholder="First name" name="firstname">
        </div>
        <div class="col">
            <label for="Last Name">Last Name</label>
            <input type="text" class="form-control" placeholder="Last name" name="lastname">
        </div>
    </div>

    <div class="col mb-3">
        <label for="Email">Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email">
    </div>
    <div class="col mb-3">
        <label for="Password">Password</label>
        <input type="password" class="form-control" placeholder="Password" name="password">
    </div>

    <div class="col mb-3">
        <input type="radio" name="role" value="admin">Admin
        <input type="radio" name="role" value="user">User
    </div>

    <div class="col mb-3">
        <button type="button" name="submit" class="btn btn-success">Create User</button>
        <button type="button" class="btn btn-danger">Reset Data</button>
    </div>


</form>
<?php

//cek data udah disubmit/belum
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    //masukin ke table database
    $result = mysqli_query($link, "INSERT INTO users (firstname, lastname, email, password, role) VALUES ('$firstname', '$lastname', '$email', '$password', '$role')");

    header("location: data-user.php");

    if ($result) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "program gagal";
    }
}

?>