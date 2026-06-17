<?php
require_once 'Pendaftaran.php';

class PendaftaranPrestasi extends Pendaftaran {
    protected $jenisPrestasi;
    protected $tingkatPrestasi;

    public function __construct($data) {
        parent::__construct($data);
        $this->jenisPrestasi = $data['jenis_prestasi'];
        $this->tingkatPrestasi = $data['tingkat_prestasi'];
    }

    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar - 50000;
    }

    public function tampilkanInfoJalur() {
        return "Prestasi: " . $this->jenisPrestasi . "<br>Tingkat: " . $this->tingkatPrestasi;
    }

    public static function getDaftarPrestasi($db) {
        $stmt = $db->prepare("SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Prestasi'");
        $stmt->execute();
        $results = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $results[] = new PendaftaranPrestasi($row);
        }
        return $results;
    }
}
?>