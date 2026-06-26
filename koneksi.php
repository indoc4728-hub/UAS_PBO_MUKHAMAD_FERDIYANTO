<?php

class Koneksi
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "db_uas_pbo_trpl1a_mukhamad_ferdiyanto";

    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->database
        );

        if ($this->conn->connect_error) {
            die("Koneksi Gagal : " . $this->conn->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

$koneksi = new Koneksi();
$conn = $koneksi->getConnection();

?>