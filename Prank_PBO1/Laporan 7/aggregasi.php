<?php
// File aggregasi.php - Mendemonstrasikan Aggregasi

class DetailRuang {
    private $kapasitas;
    private $jumlahmeja;
    private $jumlahkursi;
    private $namaruangan;
    private $luasruangan;
    private $nomerlantai;
    
    public function __construct($kapasitas, $jumlahmeja, $jumlahkursi, $namaruangan, $luasruangan, $nomerlantai) {
        $this->kapasitas = $kapasitas;
        $this->jumlahmeja = $jumlahmeja;
        $this->jumlahkursi = $jumlahkursi;
        $this->namaruangan = $namaruangan;
        $this->luasruangan = $luasruangan;
        $this->nomerlantai = $nomerlantai;
    }
    
    public function getKapasitas() {
        return $this->kapasitas;
    }
    
    public function getJumlahMeja() {
        return $this->jumlahmeja;
    }
    
    public function getJumlahKursi() {
        return $this->jumlahkursi;
    }
    
    public function getNamaRuangan() {
        return $this->namaruangan;
    }
    
    public function getLuasRuangan() {
        return $this->luasruangan;
    }
    
    public function getNomerLantai() {
        return $this->nomerlantai;
    }
}

class JenisRuang {
    private $ruangan = [];
    
    public function tambahDetail(DetailRuang $detail) {
        $this->ruangan[] = $detail;
    }
    
    public function getRuangan() {
        return $this->ruangan;
    }
}
?>