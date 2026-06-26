<?php

abstract class Mahasiswa
{
    // Properti protected sesuai kolom pada tabel_mahasiswa
    protected $id_mahasiswa;
    protected $nama_mahasiswa;
    protected $nim;
    protected $semester;
    protected $tarif_ukt_nominal;

    // Constructor
    public function __construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal)
    {
        $this->id_mahasiswa = $id_mahasiswa;
        $this->nama_mahasiswa = $nama_mahasiswa;
        $this->nim = $nim;
        $this->semester = $semester;
        $this->tarif_ukt_nominal = $tarif_ukt_nominal;
    }

    // Abstract method tanpa body
    abstract public function hitungTagihanSemester();

    abstract public function tampilkanSpesifikasiAkademik();
}
?>