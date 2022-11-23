<?php
require_once 'core/init.php';

if (check_role($_SESSION['user']) == '0') {
    set_flash_message('error', 'You have not access to this page');
    header('Location: profile.php');
}

$users = get_all_user();
require_once 'view/header.php';
?>

<h1 class="fw-bold">Hi👋 <?php echo $_SESSION['user']; ?> </h1>

<form action="post">
    <div class="row mb-3">
        <div class="col">
            <label for="First Name">First Name</label>
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
            <label for="Last Name">Last Name</label>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
    </div>

    <div class="col mb-3">
        <label for="Email">Email</label>
        <input type="email" class="form-control" placeholder="Email" aria-label="Email">
    </div>
    <div class="col mb-3">
        <label for="Password">Password</label>
        <input type="password" class="form-control" placeholder="Password" aria-label="Password">
    </div>
    <div class="col mb-3">
        <label for="Password">Konfirmasi Password</label>
        <input type="password" class="form-control" placeholder="Konfirmasi Password" aria-label="Password">
    </div>

    <div class="col">
        <button type="button" class="btn btn-success">Create User</button>
        <button type="button" class="btn btn-danger">Reset Data</button>
    </div>


</form>