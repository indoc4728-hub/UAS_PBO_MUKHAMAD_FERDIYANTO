<?php

require_once 'Mahasiswa.php';

class MahasiswaPrestasi extends Mahasiswa
{
    protected $nama_instansi_beasiswa;
    protected $minimal_ipk_syarat;

    public function __construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal, $nama_instansi_beasiswa, $minimal_ipk_syarat)
    {
        parent::__construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal);

        $this->nama_instansi_beasiswa = $nama_instansi_beasiswa;
        $this->minimal_ipk_syarat = $minimal_ipk_syarat;
    }

    public function hitungTagihanSemester()
    {
        return $this->tarif_ukt_nominal * 0.25;
    }

    public function tampilkanSpesifikasiAkademik()
    {
        return "Instansi Beasiswa : " . $this->nama_instansi_beasiswa .
               "<br>Minimal IPK Syarat : " . $this->minimal_ipk_syarat;
    }
}

?>