<?php

$server = "localhost";
$username = "ws71426rob";
$password = "Cobble@65";
$database ="ws71426login";

$connect = mysqli_connect($server,$username,$password,$database);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 

?>