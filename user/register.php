<?php
    require 'connection.php';
    $Username = $_POST["Username"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    $sql = "INSERT INTO user (Username, Email, Password) VALUES ('".$Username."' , '".$Email."' , '".$Password."')";
    $conn->exec($sql);
?>