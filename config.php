<?php 

$server = "localhost";
$username = "root";
$password = "subbu123";
$database = "creation";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>