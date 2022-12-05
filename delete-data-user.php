<?php
session_start();

require_once "functions/db.php";
if ($link->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// sql to delete a record
$sql = "DELETE FROM users WHERE ";

if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $link->error;
}

$link->close();
