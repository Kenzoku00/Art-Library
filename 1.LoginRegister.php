<?php

session_start();

include "0.koneksi1.php";

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['register_submit'])) {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($email) || empty($username) || empty($password)) {
            $error_message = "Harap isi semua kolom pada form registrasi!";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_message = "Alamat email tidak valid!";
        } else {
            $tipe_akun = "user";

            $query = "INSERT INTO akun (email, username, password, tipe_akun) VALUES ('$email', '$username', '$password', '$tipe_akun')";

            if ($conn->query($query) === TRUE) {
                $_SESSION['username'] = $username;
                header("Location: 2.Home.php");
                exit;
            } else {
                $error_message = "Error: " . $query . "<br>" . $conn->error;
            }
        }
    } elseif (isset($_POST['login_submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM akun WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {    
            $row = $result->fetch_assoc();
            $tipe_akun = $row['tipe_akun'];

            if ($tipe_akun === 'user') {
                $_SESSION['username'] = $username;
                header("Location: 2.Home.php");
            } elseif ($tipe_akun === 'admin') {
                $_SESSION['username'] = $username;  
                header("Location: 9.AdminDashboard.php");
            }
            exit;
        } else {
            $error_message = "Data login tidak valid. Harap coba lagi.";
            $_SESSION['error_message'] = "";
        }

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['username'] = $row['username'];
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Library</title>
    <link rel="stylesheet" href="1.LoginRegister.css">
</head>
<body>
    <section>   
        <div class="box">
            <div class="login-form">
                <form action="" method="post">
                    <h2>Login</h2>
                    <div class="input-box">
                        <input type="text" name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <p style="color: red;"><?php echo $error_message; ?></p>
                    <div class="login-register">
                        <p>Tidak punya akun? <a href="#" class="register-link">Daftar sekarang</a></p>
                    </div>
                    <button type="submit" class="btn" id="login-button" name="login_submit">Login</button>
                </form>
            </div>
            <div class="register-form">
                <form action="" method="post">
                    <h2>Register</h2>
                    <div class="input-box">
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="register-login">
                        <p>Sudah punya akun? <a href="#" class="login-link">Login sekarang</a></p>
                    </div>
                    <button type="submit" class="btn" id="register-button" name="register_submit">Register</button>
                </form>
            </div>
        </div>
    </section>
    <script>

        const box = document.querySelector('.box');
        const loginLink = document.querySelector('.login-link');
        const registerLink = document.querySelector('.register-link');

        registerLink.addEventListener('click', ()=> {
            box.classList.add('active');
        });

        loginLink.addEventListener('click', ()=> {
            box.classList.remove('active');
        });

    </script>

</body>
</html>
