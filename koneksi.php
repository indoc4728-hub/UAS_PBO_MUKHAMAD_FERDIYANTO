<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "db_uas_pbo_trpl1a_mukhamad_ferdiyanto";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>