<?php
    require 'fungsi.php';
    if(isset($_POST["daftar"])){
        if(registrasi($_POST) > 0){
            echo "<script>
                    alert('User Baru Berhasil Ditambahkan!');
                </script>";
        }
        else{
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="author" content="Frederic M.S">
    <title> Belajar Web - Daftar</title>
    <link rel="stylesheet" href="daftar.css">
    <link rel="shortcut icon" href="2-26689_web-clipart.png">
</head>
<body>
    <div class="head">
        <div class="head-judul">Belajar Web</div> 
        <script src = "transisi.js"></script>
    </div>
    <div class="main">
        <form action = "" method = "post" class = "form">
            <h1 class = "form-title">Form Pendaftaran</h1>
            <p class = "label-input">Nama Depan</p>
            <input type = "text" class = "input-box" name="first-name" placeholder="Ketik Nama Depan Anda" required>
            <p class = "label-input">Nama Belakang</p>
            <input type = "text" class = "input-box" name="surname" placeholder="Ketik Nama Belakang Anda" required>
            <p class = "label-input">Username</p>
            <input type = "text" class = "input-box" name="username" placeholder="Buat Username Anda" required>
            <p class = "label-input">Buat Password</p>
            <input type = "password" id = "password" name = "password" placeholder="Buat Kata Sandi Akun Anda" pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title = "Harus mengandung minimal satu angka, satu huruf besar, satu huruf kecil, dan paling sedikit 8 karakter atau lebih" required>
            <p class = "label-input">Konfirmasi Password</p>
            <input type = "password" id = "password" name = "password2" placeholder="Konfirmasi Kata Sandi Akun Anda" pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title = "Harus mengandung minimal satu angka, satu huruf besar, satu huruf kecil, dan paling sedikit 8 karakter atau lebih" required><br>
            <input type = "submit" class = "submit" name = "daftar" value = "Daftar" onclick="myFunction()">
            <p class = "label-login">Sudah punya akun? Silahkan login di <a class = "link-navbar" href = "login.php">sini</a></p>
        </form>
        <div id="message">
            <h3>Password harus terdapat:</h3>
            <p id="letter" class="invalid">Satu <b>huruf</b> kecil</p>
            <p id="capital" class="invalid">Satu <b>huruf kapital (uppercase)</p>
            <p id="number" class="invalid">Satu <b>angka</b></p>
            <p id="length" class="invalid">Minimum <b>8 karakter</b></p>
        </div>
        <script src ="password.js"></script>
    </div>
</body>
</html>
