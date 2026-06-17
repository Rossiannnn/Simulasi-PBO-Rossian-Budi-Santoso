<?php
require_once 'Pendaftaran.php';

class PendaftaranReguler extends Pendaftaran {
    protected $pilihanProdi;
    protected $lokasiKampus;

    public function __construct($data) {
        parent::__construct($data);
        $this->pilihanProdi = $data['pilihan_prodi'];
        $this->lokasiKampus = $data['lokasi_kampus'];
    }

    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar;
    }

    public function tampilkanInfoJalur() {
        return "Prodi: " . $this->pilihanProdi . "<br>Kampus: " . $this->lokasiKampus;
    }

    public static function getDaftarReguler($db) {
        $stmt = $db->prepare("SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Reguler'");
        $stmt->execute();
        $results = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $results[] = new PendaftaranReguler($row);
        }
        return $results;
    }
}
?>