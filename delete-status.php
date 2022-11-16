<?php
    require_once "core/init.php";
    if(isset($_GET['id'])){
        $sql = "DELETE FROM timeline WHERE id = '$_GET[id]'";
    
        mysqli_query($link, $sql);
        mysqli_close($link);
        header('Location: profile.php');
    }else{
        echo "ERRROR";
    }
?>