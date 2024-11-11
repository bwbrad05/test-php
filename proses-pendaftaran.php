<?php

include("config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $sekolah = $_POST['sekolah_asal'];
    $email = $_POST['email'];

    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, sekolah_asal, email) VALUE ('$nama', '$alamat', '$jk', '$sekolah', '$email')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }


} else {
    die("Access Denied");
}

?>