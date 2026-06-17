<?php
// Memanggil semua file yang dibutuhkan
require_once 'database.php';
require_once 'PendaftaranReguler.php';
require_once 'PendaftaranPrestasi.php';
require_once 'PendaftaranKedinasan.php';

// Menarik data dari database
$dataReguler = PendaftaranReguler::getDaftarReguler($db);
$dataPrestasi = PendaftaranPrestasi::getDaftarPrestasi($db);
$dataKedinasan = PendaftaranKedinasan::getDaftarKedinasan($db);

function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Manajemen PMB - Latihan PBO</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f7f6; }
        h1, h2 { color: #333; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 30px; background: #fff; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #0056b3; color: white; }
        .reguler th { background-color: #28a745; }
        .prestasi th { background-color: #17a2b8; }
        .kedinasan th { background-color: #dc3545; }
    </style>
</head>
<body>

    <h1>Sistem Manajemen Pendaftaran Mahasiswa Baru</h1>

    <h2>Data Pendaftaran - Jalur Reguler</h2>
    <table class="reguler">
        <tr>
            <th>Nama Calon</th>
            <th>Asal Sekolah</th>
            <th>Nilai Ujian</th>
            <th>Informasi Jalur (Polimorfik)</th>
            <th>Total Biaya (Polimorfik)</th>
        </tr>
        <?php foreach($dataReguler as $mhs): ?>
        <tr>
            <td><?= $mhs->getNama(); ?></td>
            <td><?= $mhs->getSekolah(); ?></td>
            <td><?= $mhs->getNilai(); ?></td>
            <td><?= $mhs->tampilkanInfoJalur(); ?></td>
            <td><strong><?= formatRupiah($mhs->hitungTotalBiaya()); ?></strong></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Data Pendaftaran - Jalur Prestasi</h2>
    <table class="prestasi">
        <tr>
            <th>Nama Calon</th>
            <th>Asal Sekolah</th>
            <th>Nilai Ujian</th>
            <th>Informasi Jalur (Polimorfik)</th>
            <th>Total Biaya (Polimorfik)</th>
        </tr>
        <?php foreach($dataPrestasi as $mhs): ?>
        <tr>
            <td><?= $mhs->getNama(); ?></td>
            <td><?= $mhs->getSekolah(); ?></td>
            <td><?= $mhs->getNilai(); ?></td>
            <td><?= $mhs->tampilkanInfoJalur(); ?></td>
            <td><strong><?= formatRupiah($mhs->hitungTotalBiaya()); ?></strong></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Data Pendaftaran - Jalur Kedinasan</h2>
    <table class="kedinasan">
        <tr>
            <th>Nama Calon</th>
            <th>Asal Sekolah</th>
            <th>Nilai Ujian</th>
            <th>Informasi Jalur (Polimorfik)</th>
            <th>Total Biaya (Polimorfik)</th>
        </tr>
        <?php foreach($dataKedinasan as $mhs): ?>
        <tr>
            <td><?= $mhs->getNama(); ?></td>
            <td><?= $mhs->getSekolah(); ?></td>
            <td><?= $mhs->getNilai(); ?></td>
            <td><?= $mhs->tampilkanInfoJalur(); ?></td>
            <td><strong><?= formatRupiah($mhs->hitungTotalBiaya()); ?></strong></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>