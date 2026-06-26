<?php

require_once 'Mahasiswa.php';

class MahasiswaPrestasi extends Mahasiswa
{
    protected $instansi_beasiswa;
    protected $minimal_ipk_syarat;

    public function __construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal, $instansi_beasiswa, $minimal_ipk_syarat)
    {
        parent::__construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal);

        $this->instansi_beasiswa = $instansi_beasiswa;
        $this->minimal_ipk_syarat = $minimal_ipk_syarat;
    }

    public function hitungTagihanSemester()
    {

    }

    public function tampilkanSpesifikasiAkademik()
    {

    }
}

?>