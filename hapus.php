<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
    require 'fungsi.php';
    $id = $_GET["id"];
    if(hapus($id) > 0){
        echo "
            <script>
                alert('Data berhasil dihapus');
                document.location.href = 'tampil.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Data gagal dihapus');
                document.location.href = 'tampil.php';
            </script>
        ";
    }
?>