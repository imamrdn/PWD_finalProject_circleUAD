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


<form action="create-user-validation.php" method="post" class="w-75 m-auto">
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

    <div class="form-check">
        <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="admin">
        <label class="form-check-label" for="flexRadioDefault1">
            Admin
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="client" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Client
        </label>
    </div>
    <input type="submit" class="btn btn-primary mt-3" name="submit" value="Submit">

</form>

<?php require_once "view/footer.php" ?>