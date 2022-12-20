<?php
    require 'connection.php';
    error_reporting(0);
    
    session_start();
    
    

?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        <form method="POST" ;>
            <label>Username : </label>
            <br>
            <input type="varchar" name="Username" id="username" placeholder="Username">
            <br>
            <label>Email : </label>
            <br>
            <input type="varchar" name="Email" id="email" placeholder="Email">
            <br>
            <label>Password : </label>
            <br>
            <input type="password" name="Password" id="password" placeholder="Password">
            <br>
            <input type="cpassword" name="CPassword" id="cpassword" placeholder="Confirm Password">
            <br>
            <a href="login.php">
                <button type="submit" name="submit" class="btn-input">Register</button>
            </a>
            <p> Sudah punya akun?
                <a href="login.php">Login di sini</a>
            </p>
        </form>
        <?php
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = md5($_POST['password']);
                $cpassword = md5($_POST['cpassword']);
             
                if ($password == $cpassword) {
                    $sql = "SELECT * FROM users WHERE email='$email'";
                    $result = mysqli_query($conn, $sql);
                    if (!$result->num_rows > 0) {
                        $sql = "INSERT INTO users (username, email, password)
                                VALUES ('$username', '$email', '$password')";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                            $username = "";
                            $email = "";
                            $_POST['password'] = "";
                            $_POST['cpassword'] = "";
                        } else {
                            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
                        }
                    } else {
                        echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
                    }
                     
                } else {
                    echo "<script>alert('Password Tidak Sesuai')</script>";
                }
                header("location: user/login.php");
            }
        ?>
    </div>
</body>

</html>