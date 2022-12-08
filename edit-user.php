<?php

    require_once 'core/init.php';

    if (check_role($_SESSION['user']) == 'client') {
        set_flash_message('error', 'You have not access to this page');
        header('Location: profile.php');
    }

    $name = get_name_user();
    $users = get_all_user();

    // Mengambil id dari url
    $id = $_GET['id'];
    $userById = get_user_by_id($id);

    require_once 'view/header.php';
    require_once 'view/header-profile.php';

    while ($result = mysqli_fetch_array($userById)) {
        $firstname = $result['firstname'];
        $lastname  = $result['lastname'];
        $email     = $result['email'];
        $password  = $result['password'];
        $role      = $result['role'];
    }

?>

<form action="edit-user-validation.php" method="post" class="w-75 m-auto">
    <div class="row mb-3">
        <div class="col">
            <label for="First Name" class="mb-3">First Name</label>
            <input type="text" class="form-control" placeholder="First name" name="firstname" value="<?php echo $firstname; ?>" > 
        </div>
        <div class="col">
            <label for="Last Name" class="mb-3">Last Name</label>
            <input type="text" class="form-control" placeholder="Last name" name="lastname" value="<?php echo $lastname; ?>">
        </div>
    </div>

    <div class="col mb-3">
        <label for="Email" class="mb-3">Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="col mb-3">
        <label for="Password" class="mb-3">New Password</label>
        <input type="password" class="form-control" placeholder="Password" name="password">
    </div>

    <input type="hidden" name="id_user" value=<?php echo $id ?>>
    <input type="submit" class="btn btn-primary mt-2 px-4 py-2 fw-bold" name="submit" value="Submit">

</form>

<?php require_once "view/footer.php" ?>