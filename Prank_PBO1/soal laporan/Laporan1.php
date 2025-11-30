<?php
class Buku {
    public $judul;
    public $penulis;
    public $tahun;

    public function getInfo() {
        return "Judul: {$this->judul}, Penulis: {$this->penulis}, diterbitkan: {$this->tahun}";
    }
}

// Membuat 3 objek dari class Buku
$buku1 = new Buku();
$buku1->judul = "Pelangi";
$buku1->penulis = "Hirata";
$buku1->tahun = 2005;

$buku2 = new Buku();
$buku2->judul = "Negeri";
$buku2->penulis = "Ahmad";
$buku2->tahun = 2009;

$buku3 = new Buku();
$buku3->judul = "Bumi";
$buku3->penulis = "Ananda";
$buku3->tahun = 1980;

// Menampilkan informasi masing-masing buku
echo $buku1->getInfo() . "<br>";
echo $buku2->getInfo() . "<br>";
echo $buku3->getInfo();
?>
