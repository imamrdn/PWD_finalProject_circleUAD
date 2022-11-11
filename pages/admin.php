<?php
include "init.php";
$sql = "SELECT * FROM users ORDER BY email";
$tampil = mysqli_query($link, $sql);


if ( check_role($_SESSION['user']=='0')) {
    echo "AKSES DI TOLAK!";
    echo "<br><a href='../login.php'>LOGIN</a>";
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>

<body>
    <h2>User</h2>
    <a href="../logout.php">Logout</a>

    <table border="1" width="80%" style="margin:0 auto; margin-top: 1em; ">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>role</th>
            </tr>
        </thead>
        <?php if (mysqli_num_rows($tampil) > 0) : ?>
            <?php $no = 1; ?>
            <?php while ($r = mysqli_fetch_array($tampil)) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $r['firstname']." ".$r['lastname'] ?></td>
                    <td><?= $r['email'] ?></td>
                    <td><?= $r['role'] ?></td>
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
</body>

</html>