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
                    <a class="material-symbols-outlined btn btn-danger fw-bold" href="delete-user.php?id=<?= $result['id_user'] ?>">Delete</a>
                </td>

            </tr>
        <?php endwhile; ?>
    <?php else : ?>
        <tr>
            <td colspan="4" align="center">Data tidak ada!</td>
        </tr>
    <?php endif; ?>
</table>

<?php require_once 'view/footer.php' ?>