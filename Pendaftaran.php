<?php
abstract class Pendaftaran {
    protected $id_pendaftaran;
    protected $nama_calon;
    protected $asal_sekolah;
    protected $nilai_ujian;
    protected $biayaPendaftaranDasar;

    public function __construct($data) {
        $this->id_pendaftaran = $data['id_pendaftaran'];
        $this->nama_calon = $data['nama_calon'];
        $this->asal_sekolah = $data['asal_sekolah'];
        $this->nilai_ujian = $data['nilai_ujian'];
        $this->biayaPendaftaranDasar = $data['biaya_pendaftaran_dasar'];
    }

    abstract public function hitungTotalBiaya();
    abstract public function tampilkanInfoJalur();

    public function getNama() { return $this->nama_calon; }
    public function getSekolah() { return $this->asal_sekolah; }
    public function getNilai() { return $this->nilai_ujian; }
}
?>