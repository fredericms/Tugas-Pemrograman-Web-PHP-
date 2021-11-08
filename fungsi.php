<?php
    //Koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "", "belajar_web");

    function query($query){
        global $conn;   
        $result = mysqli_query($conn, $query);
        $baris = [];
        while($row = mysqli_fetch_assoc($result)){
            $baris[] = $row;
        }
        return $baris;
    }

    function tambah($data){
        global $conn; 
        $nama = htmlspecialchars($data["nama"]);
        $jk = htmlspecialchars($data["jk"]);
        $umur = htmlspecialchars($data["umur"]);
        $email = htmlspecialchars($data["email"]);
        $pesan = htmlspecialchars($data["pesan"]);
        
        //Upload Gambar
        $gambar = upload();
        if (!$gambar){
            return FALSE;
        }

        //Query Insert Data
        $query = "INSERT INTO pesan VALUES ('', '$nama', '$jk', '$umur', '$email', '$pesan', '$gambar')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function upload(){
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        //Mengecek apakah tidak ada gambar yang diupload
        if($error === 4){
            echo "
                <script>
                    alert('Silahkan Pilih Gambar Terlebih Dahulu');
                </script>
            ";
            return FALSE;
        }

        //Mengecek apakah file yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "
                <script>
                    alert('Maaf, file yang Anda upload memiliki ekstensi tidak sesuai');
                </script>
            ";
            return FALSE;
        }

        //Mengecek apakah ukuran file terlalu besar
        if($ukuranFile > 5000000){
            echo "
                <script>
                    alert('Maaf, file yang Anda upload memiliki ukuran lebih dari 5 MB');
                </script>
            ";
            return FALSE;
        }

        //Lolos pengecekan, gambar siap di-upload
        //Generate nama baru
        $namaFilebaru = uniqid();
        $namaFilebaru .= '.';
        $namaFilebaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/' . $namaFilebaru);
        return $namaFilebaru;
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM pesan WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn; 
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $jk = htmlspecialchars($data["jk"]);
        $umur = htmlspecialchars($data["umur"]);
        $email = htmlspecialchars($data["email"]);
        $pesan = htmlspecialchars($data["pesan"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);

        //Cek apakah user memilih gambar baru atau tidak
        if ($_FILES['gambar']['error'] === 4){
            $gambar = $gambarLama;
        }
        else{
            $gambar = upload();
        }
        //Query Update Data
        $query = "UPDATE pesan SET
                  nama = '$nama',
                  jk = '$jk',
                  umur = $umur,
                  email = '$email',
                  pesan = '$pesan',
                  gambar = '$gambar'
                  WHERE id = $id
                ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function registrasi($data){
        global $conn;
        $namadepan = $data["first-name"];
        $namabelakang = $data["surname"];
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        //Mengecek duplikasi username
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('Username yang Anda masukkan sudah ada dalam basis data.');
                </script>
            ";
            return FALSE;
        }

        //Mengecek Konfirmasi Password
        if($password !== $password2){
            echo "
                <script>
                    alert('Password dan Konfirmasi Password tidak sama');
                </script>
            ";
            return FALSE;
        }
        //Enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //Tambahkan user baru ke dalam database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$namadepan', '$namabelakang', '$username', '$password')");
        return mysqli_affected_rows($conn);
    }
?>