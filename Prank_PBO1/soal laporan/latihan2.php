<?php
class bank {
    private $saldo;
    private $nama;

    public function setdata($jumlah, $pengguna) {
        $this->saldo = $jumlah;
        $this->nama = $pengguna;
    }
    public function getSaldo() {
        return "nama pengguna : ".$this->nama."<br>"."saldo nasabah : ".$this->saldo;
    }
    public function setSaldo($jumlah) { 
        $this->saldo += $jumlah; 
    
    }

    public function getdata() {
        return "nama pengguna : ".$this->nama."<br>" ."saldo nasabah : ".$this->saldo;
}

}
$mhs = new bank();
$mhs->setdata(175, "ashar");
$mhs->setSaldo(50);
$mhs->setSaldo(2500);
$mhs->setSaldo(100, "daus");
echo $mhs->getdata();
echo $mhs->getSaldo();
echo "<br>";



//getter adalah method untuk mengambil nilai dari properti private
//setter adalah method untuk mengatur/memasukkan nilai ke properti private
class buku {
    protected $judul;
    protected $penulis;

    

}
?>