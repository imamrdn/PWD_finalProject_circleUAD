<?php 

function register_user($firstname, $lastname, $email, $password)
{
    global $link;

    //avoid sql injection
    $firstname  = escape($firstname);
    $lastname   = escape($lastname);
    $email      = escape($email); 
    $password   = escape($password);

    //password hash
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";

    if (mysqli_query($link, $query)) return true;
    else return false;
}

function check_email($email)
{
    global $link;
    $email  = escape($email); 
    $query  = "SELECT * FROM users WHERE email = '$email'";

    if ( $result = mysqli_query($link, $query) )
        return mysqli_num_rows($result);

}

function check_data($email, $password)
{
    global $link;

    //avoid sql injection
    $email      = escape($email); 
    $password   = escape($password);

    $query  = "SELECT password FROM users WHERE email = '$email'";
    $result = mysqli_query($link, $query);
    $hash = mysqli_fetch_assoc($result)['password'];

    if(password_verify($password, $hash)) return true;
    else return false;
}

// injection func
function escape($data)
{
    global $link;
    return mysqli_real_escape_string($link, $data);
}

function redirect($email)
{
    $_SESSION['user'] = $email;
    header('Location: index.php');
}

?>