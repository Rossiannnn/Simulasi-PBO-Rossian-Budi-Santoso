<?php
require_once 'Pendaftaran.php';

class PendaftaranKedinasan extends Pendaftaran {
    protected $skIkatanDinas;
    protected $instansiSponsor;

    public function __construct($data) {
        parent::__construct($data);
        $this->skIkatanDinas = $data['sk_ikatan_dinas'];
        $this->instansiSponsor = $data['instansi_sponsor'];
    }

    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar * 1.25;
    }

    public function tampilkanInfoJalur() {
        return "SK Dinas: " . $this->skIkatanDinas . "<br>Sponsor: " . $this->instansiSponsor;
    }

    public static function getDaftarKedinasan($db) {
        $stmt = $db->prepare("SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Kedinasan'");
        $stmt->execute();
        $results = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $results[] = new PendaftaranKedinasan($row);
        }
        return $results;
    }
}
?>