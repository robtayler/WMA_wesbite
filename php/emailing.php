<?php

 $to = "belsam.attallah@weston.ac.uk";
 $subject = "Message from: ".$_POST[first]." ".$_POST[sur];
 $body = $_POST[feedback];

 if (mail($to, $subject, $body)) 
 {
    echo "Message successfully sent!";
 } 
 else 
 {
    echo "Message delivery failed...";
 }

?>
