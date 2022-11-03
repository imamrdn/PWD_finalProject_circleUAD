<?php 

function register_user($firstname, $lastname, $email, $password)
{
    global $link;

    $query = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";

    if (mysqli_query($link, $query)) {
        return true;
    } else {
        return false;
    }
}

?>