<?php
    $conn = new mysqli("localhost","root","matrix","dbphp7");
    if ($conn->connect_error){
        echo "Error:".$conn->connect_error;
    }
?>