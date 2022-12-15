<?php
    require 'connection.php';
    $Username = $_POST["Username"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    $query_sql = "INSERT INTO user(Username, Email, Password)
                VALUES ('Username', 'Email', 'Password')"

    if (mysqli_query($conn, $query_sql)){
        header("Location: index.html");
    }
    else {
        echo "Register Failed : ". mysqli_error($conn)
    }
?>