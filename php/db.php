<?php
    $conn;
       $conn = new PDO('mysql:host=localhost;dbname=sqli', 'root', '');
       $conn -> exec("set names utf8");

       if(!$conn){
        echo "Connection error: " . $exception->getMessage();
       }
?>
