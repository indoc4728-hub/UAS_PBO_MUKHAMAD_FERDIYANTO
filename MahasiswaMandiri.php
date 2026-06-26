<?php

require_once 'Mahasiswa.php';

class MahasiswaMandiri extends Mahasiswa
{
    protected $golongan_ukt;
    protected $nama_wali;

    public function __construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal, $golongan_ukt, $nama_wali)
    {
        parent::__construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal);

        $this->golongan_ukt = $golongan_ukt;
        $this->nama_wali = $nama_wali;
    }

    public function hitungTagihanSemester()
{
    return $this->tarif_ukt_nominal + 100000;
}

    public function tampilkanSpesifikasiAkademik()
    {

    }
}

?>