<?php

//cek data udah disubmit/belum
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    //koneksi
    require_once '../circle_uad/functions/db.php';

    //masukin ke table database
    $result = mysqli_query($link, "INSERT INTO users (firstname, lastname, email, password, role) VALUES ('$firstname', '$lastname', '$email', '$password', '$role')");

    header("location: data-user.php");
}
