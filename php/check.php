<?php

require('mysql_connection.php');

$result = mysqli_query($connect, "SELECT * FROM person WHERE username1='".$_POST['naming']."' AND password1='".$_POST['passwording']."'");

if (mysqli_num_rows($result) == 0){
    echo "Wrong Username or Password";
    echo "<br />";
    echo "<br />";
}

else {
	header('Location:../pages/syllabus/syllabus1.html');
}

?>
