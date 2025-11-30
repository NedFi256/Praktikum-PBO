<?php
class instansi {
    public $nama;
    public function __construct($nama){
        $this ->nama = $nama;
    }
    public function tampilkaninfo(){
        echo "Nama Instansi ; $this->nama<br>";  
    }
}

class SD extends instansi {}
class SMP extends instansi {}  
class SMA extends instansi {}
class Universitas extends instansi {}
class SiswaSD extends SD {
    public $nis;
    public function __construct($nama, $nis){
        parent ::__construct($nama);
        $this ->nis = $nis;
    }
    public function tampilkaninfo(){
        parent ::tampilkaninfo();
        echo "NIS : $this->nis<br>";
        echo "Status : Siswa SD<br><br>";
    }
}
class SiswaSMP extends SMP {
    public $nis;
    public function __construct($nama, $nis){
        parent ::__construct($nama);
        $this ->nis = $nis;
    }
    public function tampilkaninfo(){
        parent ::tampilkaninfo();
        echo "NIS : $this->nis<br>";
        echo "Status : Siswa SMP<br><br>";
    }
}
class SiswaSMA extends SMA {
    public $nis;
    public function __construct($nama, $nis){
        parent ::__construct($nama);
        $this ->nis = $nis;
    }
    public function tampilkaninfo(){
        parent ::tampilkaninfo();
        echo "NIS : $this->nis<br>";
        echo "Status : Siswa SMA<br><br>";
    }
}
class Mahasiswa extends Universitas {
    public $nim;
    public function __construct($nama, $nim){
        parent ::__construct($nama);
        $this ->nim = $nim;
    }
    public function tampilkaninfo(){
        parent ::tampilkaninfo();
        echo "NIM : $this->nim<br>";
        echo "Status : Mahasiswa<br><br>";
    }
}
$siswaSD = new SiswaSD("SD Negeri 1", "101");
$siswaSMP = new SiswaSMP("SMP negeri 2","102");
$siswaSMA = new SiswaSMA("SMA Negeri 3","103");
$mahasiswa = new Mahasiswa ("UIN ALAUDDIN MAKASAR","60200124002");

$siswaSD ->tampilkaninfo();
$siswaSMP ->tampilkaninfo();
$siswaSMA ->tampilkaninfo();
$mahasiswa ->tampilkaninfo();
?>