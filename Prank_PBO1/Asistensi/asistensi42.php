<?php
class Kantor {
    public $nama;
    public $umur;

    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function getInfo() {
        echo "Nama: $this->nama<br>";
        echo "Umur: $this->umur tahun<br>";
    }
}

class Manajer extends Kantor {
    public $jamKerja;

    public function __construct($nama, $umur, $jamKerja) {
        parent::__construct($nama, $umur);
        $this->jamKerja = $jamKerja;
    }

    public function getInfo() {
        parent::getInfo();
        echo "Jam Kerja: $this->jamKerja jam/hari<br><br>";
    }
}

class OB extends Kantor {
    public $jamKerja;

    public function __construct($nama, $umur, $jamKerja) {
        parent::__construct($nama, $umur);
        $this->jamKerja = $jamKerja;
    }

    public function getInfo() {
        parent::getInfo();
        echo "Jam Kerja: $this->jamKerja jam/hari<br><br>";
    }
}

class Pegawai extends Kantor {
    public $jamKerja;

    public function __construct($nama, $umur, $jamKerja) {
        parent::__construct($nama, $umur);
        $this->jamKerja = $jamKerja;
    }

    public function getInfo() {
        parent::getInfo();
        echo "Jam Kerja: $this->jamKerja jam/hari <br><br>";
    }
}

class Tetap extends Pegawai {
    public $gaji;

    public function __construct($gaji) {
        $this->gaji = $gaji;
    }

    public function getGaji() {
        echo "Gaji: Rp" . ($this->gaji) . "<br><br>";
    }
}
class magang extends pegawai{
    public $gaji;
    public function __construct($gaji){
        $this ->gaji = $gaji;   
    }
    public function getGaji(){
        echo "Gaji; Rp" .($this->gaji)."<br><br>";
    
    }
}
$manajer = new Manajer ("daus",40,80);
$ob = new OB ("rian",35,9);
$pegawaitetap = new tetap (50000);
$pegawaimagang = new magang (1500);
$manajer ->getinfo();
$ob ->getinfo();
$pegawaitetap ->getgaji();
$pegawaimagang ->getgaji();
