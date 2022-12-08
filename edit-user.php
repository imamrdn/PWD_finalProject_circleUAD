<?php

    require_once 'core/init.php';

    if (check_role($_SESSION['user']) == 'client') {
        set_flash_message('error', 'You have not access to this page');
        header('Location: profile.php');
    }

    $name = get_name_user();
    $users = get_all_user();
    require_once 'view/header.php';
    require_once 'view/header-profile.php';
?>

<form action="" method="post" class="w-75 m-auto">
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

   
    <div class="dropdown mb-3">
        <button class="btn btn-secondary dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Role
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Admin (1)</a></li>
            <li><a class="dropdown-item" href="#">Client (0)</a></li>
        </ul>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>