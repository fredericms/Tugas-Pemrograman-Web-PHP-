<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="author" content="Frederic M.S">
    <title> Belajar Web - Beranda</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="2-26689_web-clipart.png">
    <script src="https://kit.fontawesome.com/a463889db1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="head">
        <div class="head-judul">Belajar Web</div> 
        <div class="head-navbar">
            <ul>
                <li><a class = "link-login" href = "logout.php">Log Out</a></li>
                <li><a class = "link-navbar" href = "contact.php">Hubungi Kami</a></li>
                <li><a class = "link-navbar" href = "pelajaran.php"><span onclick="transitionToPage('pelajaran.php')"></span>Pelajaran</a></li>
                <li><a class = "link-navbar" href = "index.php">Beranda</a></li>
                <script src = "transisi.js"></script>
            </ul>
        </div>
    </div>
    <div class="main">
        <h1>Hello World<span>!</span></h1>
        <h4>Mari Belajar Pemrograman Web</h4>
        <p class = "Quote">"The original idea of the web was that it should be a collaborative space where you can communicate through sharing information."</p>
        <p class = "Name">Tim Berners Lee</p>
        <div class="btn-wrapper">
            <div class = btn-email>
                <i class="far fa-envelope"><a href = "daftar.html">Daftar dengan Email</a></i>
            </div>
            <h4 class = "atau">atau</h4>
            <div class = btn-google>
                <i class="fab fa-google"><a href ="https://accounts.google.com/AccountChooser/signinchooser?flowName=GlifWebSignIn&flowEntry=AccountChooser" target="_blank">Daftar dengan Google</a></i>
            </div>
            <div class = btn-facebook>
                <i class="fab fa-facebook"><a href ="https://id-id.facebook.com/" target="_blank">Daftar dengan Facebook</a></i>
            </div>
        </div>
    </div>
    <div class="deskripsi">
        <p>Belajar Web merupakan situs yang dibuat untuk belajar pemrograman web yang terdiri dari HTML, CSS, Javascript, dan PHP</p>
        <p class = "paragraf1">Apakah Anda siap untuk menjadi programmer yang handal?</p>
        <p class = "paragraf2">Ayo belajar koding, ayo belajar untuk menjadi lebih kreatif!</p>
        <div class="btn-wrapper">
            <div class = btn-study>
                <i class="fas fa-university"><a href = "pelajaran.html">Mulai Belajar</a></i>
            </div>
        </div>
    </div>
    <div class="footer">
        <h2 class = "Belajar-web">Belajar Web</h2>
        <h4 class = "slogan">Belajar koding, Belajar untuk menjadi kreatif</h4>
    </div>
</body>
</html>