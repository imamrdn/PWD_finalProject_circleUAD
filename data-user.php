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
<div class="d-flex justify-content-end">
    <a class="btn btn-success fw-bold mx-1" href="create-user.php">Create User</a>
</div>
<hr style="border: solid 1px gray">
<table class="table table-striped table-hover my-3 mx-auto" style="border-radius: 10px; width:100%;">
    <caption>List of users</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <?php if (mysqli_num_rows($users) > 0) : ?>
        <?php $no = 1; ?>
        <?php while ($result = mysqli_fetch_array($users)) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $result['firstname'] . " " . $result['lastname'] ?></td>
                <td><?= $result['email'] ?></td>
                <td>
                    <span href="#" class="material-symbols-outlined btn btn-warning fw-bold">Edit</span>
                    <span href="#" class="material-symbols-outlined btn btn-danger fw-bold">Delete</span>
                </td>

            </tr>
        <?php endwhile; ?>
    <?php else : ?>
        <tr>
            <td colspan="4" align="center">Data tidak ada!</td>
        </tr>
    <?php endif; ?>

    <tbody>

    </tbody>
</table>

<?php require_once 'view/footer.php' ?>