<?php
session_start();
require "Connection.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form>
            <label>Email : </label><br>
            <input type="text" id="Email" name="Email"><br>
            <label>Password : </label><br>
            <input type="password" id="Password" name="Password"><br>
            <button type="submit" name="submit" class="btn-input">Login</button>
            <p> Belum punya akun?
                <a href="register.php">Register di sini</a>
            </p>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];

            $query = mysqli_query($con, "SELECT * FROM user WHERE Email='$Email'");
            $count = mysqli_num_rows($query);

            if ($count > 0) {
                $data = mysqli_fetch_array($query);
                if (password_verify($Password, $data['Password'])) {
                    $_SESSION['logged_in'] = true;
                    $_SESSION['Email'] = $data['Email'];

                    header("location: home.php");
                } else {
                    echo "Wrong email or password, Please Try Again";
                }
            } else {
                echo "Account";
            }
        }
        ?>
    </div>
</body>

</html>