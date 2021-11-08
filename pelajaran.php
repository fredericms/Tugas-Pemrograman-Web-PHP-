<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="author" content="Frederic M.S">
    <title> Belajar Web - Pelajaran</title>
    <link rel = "stylesheet" href="pelajaran.css">
    <link rel = "stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" href="2-26689_web-clipart.png">
    <script src="https://kit.fontawesome.com/a463889db1.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".flip").click(function(){
                $(".belajar").slideToggle("slow");
            });
        });
    </script>
</head>
<body>
    <div class="head">
        <div class="head-judul">Belajar Web</div> 
        <div class="head-navbar">
            <ul>
                <li class = "judul"><a class = "link-login" href = "logout.php">Log Out</a></li>
                <li class = "judul"><a class = "link-navbar" href = "contact.php">Hubungi Kami</a></li>
                <li class = "judul"><a class = "link-navbar" href = "pelajaran.php"><span onclick="transitionToPage('pelajaran.php')"></span>Pelajaran</a></li>
                <li class = "judul"><a class = "link-navbar" href = "index.php">Beranda</a></li>
                <script src = "transisi.js"></script>
            </ul>
        </div>
    </div>
    <div class="main">
        <h1 class = "judul-utama">Materi Pembelajaran</h1>
        <div class = "flip">Klik untuk menampilkan dan menyembunyikan materi pembelajaran</div>
        <div class = "belajar">
            <div class = "html">
                <div class = "gambar-html">
                    <i class="fab fa-html5 fa-8x"></i>
                </div>
                <h2 class = "judul-html">HTML <br> (Hypertext Markup Language)</h2>
                <p>HTML merupakan bahasa markup yang digunakan untuk membuat struktur halaman website yang terdiri dari kombinasi teks dan simbol.</p>
                <ol class = "materi">
                    <li>Pengenalan HTML</li>
                    <li>Dasar HTML</li>
                    <li>Fitur Baru HTML 5</li>
                    <li>Tabel HTML</li>
                    <li>Form HTML</li>
                    <li>Memasukkan Media ke HTML</li>
                    <li>Grafis Vektor HTML</li>
                </ol>
            </div>
            <div class = "css">
                <div class = "gambar-css">
                    <i class="fab fa-css3-alt fa-8x"></i>
                </div>
                <h2 class = "judul-css">CSS (Cascading Style Sheets)</h2>
                <p>CSS biasanya digunakan untuk mengatur tampilan elemen yang tertulis dalam bahasa markup, seperti HTML.</p>
                <ol class = "materi">
                    <li>Pengenalan CSS</li>
                    <li>Dasar <i>Styling</i></li>
                    <li>Properti Tampilan dan Posisi</li>
                    <li><i>Box Model</i> dan Bayangan</li>
                    <li>Kombinator, Elemen, dan <i>Pseudo Classes</i></li>
                    <li><i>Background</i> dan Gradien</li>
                    <li>Desain Responsif</li>
                    <li><i>Flex Layout</i></li>
                    <li>Efek dan Animasi</li>
                    <li>Tata Letak Grid</li>
                </ol>
            </div>
            <div class = "js">
                <div class = "gambar-js">
                    <i class="fab fa-js fa-8x"></i>
                </div>
                <h2 class = "judul-js">JS (JavaScript)</h2>
                <p>JavaScript merupakan bahasa pemrograman yang digunakan dalam pengembangan website agar lebih dinamis dan interaktif.</p>
                <ol class = "materi">
                    <li>Dasar JavaScript</li>
                    <li>Tipe Data</li>
                    <li><i>Conditional Statements</i></li>
                    <li>Opeator</li>
                    <li><i>Type Coercion</i></li>
                    <li>Objek dan Array</li>
                    <li>Perulangan</li>
                    <li>Fungsi dan <i>Hoisting</i></li>
                    <li>DOM (<i>Document Object Model</i>)</li>
                </ol>
            </div>
            <div class = "php">
                <div class = "gambar-php">
                    <i class="fab fa-php fa-8x"></i>
                </div>
                <h2 class = "judul-php">PHP <br> (Hypertext Preprocessing)</h2>
                <p>PHP merupakan bahasa skrip <i>open source</i> yang dapat disematkan ke dalam HTML dan cocok untuk pengembangan web.</p>
                <ol class = "materi">
                    <li>Instalasi XAMPP</li>
                    <li>Sintaks Dasar PHP</li>
                    <li>Tipe Data</li>
                    <li>Operator</li>
                    <li><i>Statements</i></li>
                    <li>Perulangan</li>
                    <li>Array</li>
                    <li>Fungsi</li>
                    <li>Waktu dan Tanggal</li>
                </ol>
            </div>
        </div>
    </div>
    <div class = "persentase">
        <h1 class = "web-percentage">Website ini menggunakan:</h1>
        <h2 class = "judul-web">HTML</h2>
        <div class="w3-light-grey w3-round">
            <div class= "w3-orange w3-round w3-center" style = "width:44.7%">44,7%</div>
        </div>
        <h2 class = "judul-web">CSS</h2>
        <div class="w3-light-grey w3-round">
            <div class= "w3-indigo w3-round w3-center" style = "width:44.9%">44,9%</div>
        </div>
        <h2 class = "judul-web">JavaScript</h2>
        <div class="w3-light-grey w3-round">
            <div class= "w3-yellow w3-round w3-center" style = "width:10.4%">10,4%</div>
        </div>
    </div>
    <div class = "footer">
        <h2 class = "Belajar-web">Belajar Web</h2>
        <h4 class = "slogan">Belajar koding, Belajar untuk menjadi kreatif</h4>
    </div>
</body>
</html>
