<?php 
class instansi {
protected $nama;
protected $umur;


public function __construct($nama,$u) {
    $this->nama = $nama;
    $this->umur = $u;
}

public function getnama() {
    return $this-> nama;

}
public function getumur() {
    return $this-> umur;
}

}

$orang = new orang (nama: "daus", u:"19");
echo "nama saya : " .$orang->getnama()."<br>". "umur saya : " .$orang-> getumur();

class mahasiswa extends orang{
    protected $id;
    public function __construct($nama,$u,$nim) {
        parent::__construct (nama: $nama ,u:$u );
        $this->id=$nim;
    }
    public function getnim() {
    return $this->id;

    }
    public function getnama() {
        return "nama saya :".$this->nama."dengan nim : ".$this->id;
    }
}
//contrruct metod yang di jalankan otomatis saat objek dibuat
//buat objek untuk kelas mahasiswa
$mhs = new mahasiswa(nama: "boss", u:"20", nim:"002");
$mhs = $orang->getnama();

//contrac
?>


