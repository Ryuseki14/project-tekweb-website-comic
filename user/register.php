<?php
    require 'connection.php';

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
            <a href="login.php">
                <button type="submit" name="submit" class="btn-input">Register</button>
            </a>
            <p> Sudah punya akun?
                <a href="login.php">Login di sini</a>
            </p>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $Username = $_POST['Username'];
                $email = $_POST['Email'];
                $password = $_POST['Password'];
                $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);

                $query = mysqli_query($con, "SELECT email FROM user WHere email='$email'");
                $count = mysqli_num_rows($query);

                if($count > 0){
                    echo "Cannot register. Already Existed";
                }
                else{
                    $queryInsert = mysqli_query($con, "INSERT INTO user (Username, email, password) VALUES ('$Username','$email', '$password')");
                }
            }
        ?>
    </div>
</body>

</html>