
<?php 
    if (mysqli_num_rows($name) > 0) {
        while ($username = mysqli_fetch_array($name)) {
            if ($_SESSION['user'] == $username['email']) {
?>
                <h1 class="fw-bold" style="color: #3C4048;">Hi👋<?= $username['firstname'] ?>, have a great day </h1>
<?php 
            }
        }
    }

    if( check_role($_SESSION['user']) == '1' ) {
?>
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary fw-bold mx-1" href="profile.php">Message Data</a>
            <a class="btn btn-primary fw-bold mx-1" href="data-user.php">User Data</a>
            <a class="btn btn-success fw-bold mx-1" href="create-user.php">Create User</a>
        </div>
        <hr style="border: solid 1px gray">
<?php } else { ?>
        <div class="mt-5"></div>
<?php } ?>