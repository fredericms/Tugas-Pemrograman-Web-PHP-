<?php
    session_start();
    if(isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }
    require 'fungsi.php';
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        //Cek Username
        if(mysqli_num_rows($result) === 1){
            //cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                //Set sesi
                $_SESSION["login"] = TRUE;
                header("Location: index.php");
                exit;
            }
        }
        $error = TRUE;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="author" content="Frederic M.S">
    <title> Belajar Web - Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="2-26689_web-clipart.png">
</head>
<body>
    <div class="head">
        <div class="head-judul">Belajar Web</div> 
        <div class="head-navbar">
            <ul>
                <li><a class = "link-navbar" href = "contact.php">Hubungi Kami</a></li>
                <li><a class = "link-navbar" href = "pelajaran.php"><span onclick="transitionToPage('pelajaran.php')"></span>Pelajaran</a></li>
                <li><a class = "link-navbar" href = "index.php">Beranda</a></li>
                <script src = "transisi.js"></script>
            </ul>
        </div>
    </div>
    <div class="main">
        <form action = "" method = "post" class = "form">
            <h1 class = "form-title">Login</h1>
            <?php if(isset($error)): ?>
                <p class = "error" style = "color: red; font-style: italic;">Username atau Password yang Anda masukkan salah</p>
            <?php endif; ?>
            <p class = "label-input">Username</p>
            <input type = "text" class = "input-box" name="username" placeholder="Username" required>
            <p class = "label-input">Password</p>
            <input type = "password" id = "password" name = "password" placeholder="Password" required><br>
            <input type = "submit" class = "submit" name = "login" value = "Login">
            <p class = "label-input">Belum punya akun? Daftar di <a class = "link-navbar" href = "daftar.php">sini</a></p>
        </form>
</body>
</html>