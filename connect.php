<?php
    // Create connection
    $conn = new mysqli ("localhost","root","","mydatabase");
    if ($conn) {
        echo "Connection to the db test is successful";
    }
    if (!$conn){
        echo "Connection failed!";
    } 
?>
