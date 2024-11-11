<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "daftar-siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Failed to read the database: " . mysqli_connect_error());
}

?>