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

function register_check_email($email)
{
    global $link;
    $email  = mysqli_real_escape_string($link, $email); 
    $query  = "SELECT * FROM users WHERE email = '$email'";

    if ( $result = mysqli_query($link, $query) ){
        if (mysqli_num_rows($result) == 0) return true;
        else return false;
    }
}

function login_check_email($email)
{
    global $link;
    $email  = mysqli_real_escape_string($link, $email); 
    $query  = "SELECT * FROM users WHERE email = '$email'";

    if ( $result = mysqli_query($link, $query) ){
        if (mysqli_num_rows($result) != 0) return true;
        else return false;
    }
}

function check_data($email, $password)
{
    global $link;

    //avoid sql injection
    $email      = mysqli_real_escape_string($link, $email); 
    $password   = mysqli_real_escape_string($link, $password);

    $query  = "SELECT password FROM users WHERE email = '$email'";
    $result = mysqli_query($link, $query);
    $hash = mysqli_fetch_assoc($result)['password'];

    if(password_verify($password, $hash)){
        
    }
}

?>