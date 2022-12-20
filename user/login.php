<?php
    include 'connection.php';
 
    error_reporting(0);
     
    session_start();
     
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
                <input type="text"><br>
                <label>Password : </label><br>
                <input type="password"><br>
                <button type="submit" name="submit" class="btn-input">Login</button>
                <p> Belum punya akun?
                    <a href="register.php">Register di sini</a>
                </p>
            </form>

            <?php
                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);
                 
                    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $_SESSION['username'] = $row['username'];
                        header("Location: home.php");
                    } else {
                        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
                    }
                }
            } else {
                echo "Account";
            }
        }
        ?>
    </div>
</body>

</html>