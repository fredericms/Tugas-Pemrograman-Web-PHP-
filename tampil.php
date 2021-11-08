<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
    require 'fungsi.php';
    //Ambil data dari tabel pesan
    $mes = query("SELECT * FROM pesan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="author" content="Frederic M.S">
    <title> Belajar Web - Tampil Data</title>
    <link rel="stylesheet" href="tampil.css">
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
        <h1 class = "form-title">Tampilan Data Pesan</h1>
            <table class = "tabel">
                <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Gambar</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach($mes as $pesan): ?>
                <tr>
                    <td><?= $i ?> </td>
                    <td>
                        <a class = "link" href = "edit.php?id=<?= $pesan["id"]; ?>">Ubah</a> |
                        <a class = "link" href = "hapus.php?id=<?= $pesan["id"]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?');">Hapus</a>
                    </td>
                    <td><?= $pesan["nama"]; ?></td>
                    <td><?= $pesan["jk"]; ?></td>
                    <td><?= $pesan["umur"]; ?></td>
                    <td><?= $pesan["email"]; ?></td>
                    <td><?= $pesan["pesan"]; ?></td>
                    <td><?= $pesan["gambar"]; ?></td>
                </tr>
                <?php $i++;?>
                <?php endforeach; ?>
            </table>
        </div>    
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