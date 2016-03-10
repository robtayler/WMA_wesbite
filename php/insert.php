<?php

$user1 = $_POST['naming'];
$pass1 = $_POST['passwording'];

require('mysql_connection.php');
$query = "INSERT INTO person (username1,password1) VALUES ('".$user1."','".$pass1."') ";

mysqli_query($connect,$query);

header('Location: ../pages/syllabus/syllabus.html');

?>