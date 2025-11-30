<?php
// File komposisi.php - Mendemonstrasikan Komposisi

class Gedung {
    private $namagedung;
    private $namapengelola;
    private $alamat;
    private $nomerhp;
    
    public function __construct($namagedung, $namapengelola, $alamat, $nomerhp) {
        $this->namagedung = $namagedung;
        $this->namapengelola = $namapengelola;
        $this->alamat = $alamat;
        $this->nomerhp = $nomerhp;
    }
    
    public function getNamaGedung() {
        return $this->namagedung;
    }
    
    public function getNamaPengelola() {
        return $this->namapengelola;
    }
    
    public function getAlamat() {
        return $this->alamat;
    }
    
    public function getNomerHp() {
        return $this->nomerhp;
    }
}

class Pengelola {
    private $pengelola = [];
    
    public function setPengelola(Gedung $gelola) {
        $this->pengelola[] = $gelola;
    }
    
    public function getPengelola() {
        return $this->pengelola;
    }
}
?>