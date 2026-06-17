<?php
// Sesuaikan nama database dengan nama yang kamu buat di Tahap 1
$host = 'localhost';
$dbname = 'DB_SIMULASI_PBO_KELAS_NamaLengkap'; 
$username = 'root';
$password = ''; // Kosongkan jika menggunakan XAMPP/Laragon default

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi Database Gagal: " . $e->getMessage());
}
?>