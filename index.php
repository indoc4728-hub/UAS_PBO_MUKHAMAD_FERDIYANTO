<?php
require_once 'koneksi.php';
require_once 'MahasiswaMandiri.php';
require_once 'MahasiswaBidikmisi.php';
require_once 'MahasiswaPrestasi.php';

$query = "SELECT * FROM tabel_mahasiswa ORDER BY jenis_pembiayaan, id_mahasiswa";
$result = mysqli_query($conn, $query);

$mandiri = [];
$bidikmisi = [];
$prestasi = [];

while ($row = mysqli_fetch_assoc($result)) {

    if ($row['jenis_pembiayaan'] == 'Mandiri') {

        $obj = new MahasiswaMandiri(
            $row['id_mahasiswa'],
            $row['nama_mahasiswa'],
            $row['nim'],
            $row['semester'],
            $row['tarif_ukt_nominal'],
            $row['golongan_ukt'],
            $row['nama_wali']
        );

        $mandiri[] = [
            'obj' => $obj,
            'spesifikasi' => $obj->tampilkanSpesifikasiAkademik()
        ];

    } elseif ($row['jenis_pembiayaan'] == 'Bidikmisi') {

        $obj = new MahasiswaBidikmisi(
            $row['id_mahasiswa'],
            $row['nama_mahasiswa'],
            $row['nim'],
            $row['semester'],
            $row['tarif_ukt_nominal'],
            $row['nomor_kip_kuliah'],
            $row['dana_saku_subsidi']
        );

        $bidikmisi[] = [
            'obj' => $obj,
            'spesifikasi' => $obj->tampilkanSpesifikasiAkademik()
        ];

    } elseif ($row['jenis_pembiayaan'] == 'Prestasi') {

        $obj = new MahasiswaPrestasi(
            $row['id_mahasiswa'],
            $row['nama_mahasiswa'],
            $row['nim'],
            $row['semester'],
            $row['tarif_ukt_nominal'],
            $row['nama_instansi_beasiswa'],
            $row['minimal_ipk_syarat']
        );

        $prestasi[] = [
            'obj' => $obj,
            'spesifikasi' => $obj->tampilkanSpesifikasiAkademik()
        ];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Pembayaran Kuliah</title>
    <style>
        body{
            font-family:Arial;
            margin:20px;
        }

        table{
            border-collapse:collapse;
            width:100%;
            margin-bottom:40px;
        }

        th,td{
            border:1px solid black;
            padding:8px;
        }

        th{
            background:#ddd;
        }

        h2{
            background:#f2f2f2;
            padding:10px;
        }
    </style>
</head>

<body>

<h1>Registrasi Pembayaran Kuliah Mahasiswa</h1>

<h2>Mahasiswa Mandiri</h2>

<table>
<tr>
<th>ID</th>
<th>Nama</th>
<th>NIM</th>
<th>Semester</th>
<th>Tarif UKT</th>
<th>Total Tagihan</th>
<th>Spesifikasi</th>
</tr>

<?php foreach($mandiri as $m){ ?>

<tr>
<td><?= $m['obj']->getIdMahasiswa(); ?></td>
<td><?= $m['obj']->getNamaMahasiswa(); ?></td>
<td><?= $m['obj']->getNim(); ?></td>
<td><?= $m['obj']->getSemester(); ?></td>
<td>Rp <?= number_format($m['obj']->getTarifUktNominal(),0,',','.'); ?></td>
<td>Rp <?= number_format($m['obj']->hitungTagihanSemester(),0,',','.'); ?></td>
<td><?= $m['spesifikasi']; ?></td>
</tr>

<?php } ?>

</table>


<h2>Mahasiswa Bidikmisi</h2>

<table>
<tr>
<th>ID</th>
<th>Nama</th>
<th>NIM</th>
<th>Semester</th>
<th>Tarif UKT</th>
<th>Total Tagihan</th>
<th>Spesifikasi</th>
</tr>

<?php foreach($bidikmisi as $m){ ?>

<tr>
<td><?= $m['obj']->getIdMahasiswa(); ?></td>
<td><?= $m['obj']->getNamaMahasiswa(); ?></td>
<td><?= $m['obj']->getNim(); ?></td>
<td><?= $m['obj']->getSemester(); ?></td>
<td>Rp <?= number_format($m['obj']->getTarifUktNominal(),0,',','.'); ?></td>
<td>Rp <?= number_format($m['obj']->hitungTagihanSemester(),0,',','.'); ?></td>
<td><?= $m['spesifikasi']; ?></td>
</tr>

<?php } ?>

</table>


<h2>Mahasiswa Prestasi</h2>

<table>
<tr>
<th>ID</th>
<th>Nama</th>
<th>NIM</th>
<th>Semester</th>
<th>Tarif UKT</th>
<th>Total Tagihan</th>
<th>Spesifikasi</th>
</tr>

<?php foreach($prestasi as $m){ ?>

<tr>
<td><?= $m['obj']->getIdMahasiswa(); ?></td>
<td><?= $m['obj']->getNamaMahasiswa(); ?></td>
<td><?= $m['obj']->getNim(); ?></td>
<td><?= $m['obj']->getSemester(); ?></td>
<td>Rp <?= number_format($m['obj']->getTarifUktNominal(),0,',','.'); ?></td>
<td>Rp <?= number_format($m['obj']->hitungTagihanSemester(),0,',','.'); ?></td>
<td><?= $m['spesifikasi']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>