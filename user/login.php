<?php
    require "connection.php";
    $response = '';
    $qkategori = "select * from login where username = '" . $_POST['username'] . "'";
    $stmt = $conn->query($qkategori);
    foreach($stmt->fetchAll() as $row)
    {
        $response .= "<tr>";
        $response .= "<td>" . $row['Password'] . "</td>";
        $response .= "</tr>";
    }

    echo $response;
?>