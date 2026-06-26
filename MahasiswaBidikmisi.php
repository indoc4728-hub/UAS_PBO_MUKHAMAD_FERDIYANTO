<?php

require_once 'Mahasiswa.php';

class MahasiswaBidikmisi extends Mahasiswa
{
    protected $nomor_kip_kuliah;
    protected $dana_saku_subsidi;

    public function __construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal, $nomor_kip_kuliah, $dana_saku_subsidi)
    {
        parent::__construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal);

        $this->nomor_kip_kuliah = $nomor_kip_kuliah;
        $this->dana_saku_subsidi = $dana_saku_subsidi;
    }

    public function hitungTagihanSemester()
    {

    }

    public function tampilkanSpesifikasiAkademik()
    {

    }
}

?>