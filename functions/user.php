<?php 

function register_user($firstname, $lastname, $email, $password)
{
    global $link;

    //avoid sql injection
    $firstname  = mysqli_real_escape_string($link, $firstname);
    $lastname   = mysqli_real_escape_string($link, $lastname);
    $email      = mysqli_real_escape_string($link, $email); 
    $password   = mysqli_real_escape_string($link, $password);

    //password hash
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";

    if (mysqli_query($link, $query)) {
        return true;
    } else {
        return false;
    }
}

?>