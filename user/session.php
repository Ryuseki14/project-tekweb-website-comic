<?php
session_start();

if ($_SESSION['logged_in'] == false) {
    header('location: login.php');
} else {
    header('location: home.php');
}
?>