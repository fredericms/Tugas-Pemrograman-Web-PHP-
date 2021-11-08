<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
    
    require 'fungsi.php';

    //Mengecek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        
        //Cek apakah data berhasil ditambahkan atau tidak
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('Data berhasil dikirim');
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Data gagal dikirim');
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="author" content="Frederic M.S">
    <title> Belajar Web - Hubungi Kami</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="shortcut icon" href="2-26689_web-clipart.png">
    <script src="https://kit.fontawesome.com/a463889db1.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".form-title").mouseenter(function(){
                alert("Anda masuk menu Kontak!");
            });
        });
    </script>

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
        <form class = "form" action = "" method = "post" enctype = "multipart/form-data">
            <!--Ketika mouse diarahkan ke judul form maka akan muncul tulisan "Anda masuk menu kontak"-->
            <h1 class = "form-title">Send us a Message</h1>
            <p class = "label-input">Nama Lengkap (wajib diisi)</p>
            <input type = "text" class = "input-box" name = "nama" placeholder = "Tulis Nama Lengkap Anda" required>
            <p class = "label-input">Jenis Kelamin (wajib diisi)</p>
            <input type = "radio" class = "rad" name = "jk" value = "Laki-Laki" required>
            <label for = "laki-laki">Laki-laki</label>
            <input type = "radio" class = "rad" name = "jk" value = "Perempuan" required>
            <label for = "perempuan">Perempuan</label>
            <p class = "label-input">Umur (wajib diisi)</p>
            <input type = "number" class = "input-box" name = "umur" required>
            <p class = "label-input">Email (wajib diisi)</p>
            <input type = "text" class = "input-box" name = "email" placeholder="Tulis Email Anda" required>
            <p class = "label-input">Pesan (wajib diisi)</p>
            <textarea class = "input-box" name = "pesan" placeholder = "Pesan" required></textarea>
            <p class = "label-input">Upload Gambar (Format File yang didukung: .jpg, .jpeg, dan .png <br> dengan ukuran file maksimum 5 MB) </p>
            <input type = "file" id = "gambar" name = "gambar"><br><br>
            <button type = "submit" class = "submit" name = "submit" onmouseup="mouseup(this)">Kirim</button>
            <button type = "button" class = "submit" name = "Lihat Data"><a class = "link" href = "tampil.php">Lihat Data</a></button>
            <script>
                function mouseup(obj){
                    obj.innerHTML = "Thank You";
                }
            </script>
        </form>
    </div>
    <div class="footer">
        <h2 class = "author">Author: Frederic Morado Saragih</h2>
        <div class = "icon">
            <i class = "fab fa-wordpress-simple"><a class = "link" href = "https://fredericmsaragih.wordpress.com/" target="_blank">fredericmsaragih.wordpress.com</a></i>
            <i class = "fab fa-github"><a class = "link" href ="https://github.com/fredericms" target="_blank">fredericms</a></i>
        </div>
    </div>
</body>
</html>