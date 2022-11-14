<?php
    require_once 'core/init.php';

    if ( check_role($_SESSION['user']) == '0' ) {
        set_flash_message('error', 'You have not access to this page');
        header('Location: profile.php');
    }

    $users = get_all_user();
    require_once 'view/header.php';
?>
    <h2>User</h2>

    <table border="1" width="80%" style="margin:0 auto; margin-top: 1em; ">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th></th> <!--  Action -->
            </tr>
        </thead>
        <?php if (mysqli_num_rows($users) > 0) : ?>
            <?php $no = 1; ?>
            <?php while ($r = mysqli_fetch_array($users)) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $r['firstname']." ".$r['lastname'] ?></td>
                    <td><?= $r['email'] ?></td>
                    <td>
                        action (delete/edit)
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