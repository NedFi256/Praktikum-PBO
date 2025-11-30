<?php
class buku {
var $judul;
public $pengarang;
public $tahun;
public function book()
{
echo "informasi buku" ."<br>";
} }

$buku1 = new buku ();
$buku1->book();
$buku1->judul = "pelangi";
$buku1->pengarang = "daus";
$buku1->tahun = 2005;

class penerbit {
    public $alamat;
    public $penulis;
    public $nama;
public function info()
    {
echo "informasi penerbit" ."<br>";
    }
}
$pengarang = new penerbit ();
$pengarang-> info();
$pengarang->alamat = "gowa";
$pengarang->penulis = "pbo";
$pengarang->nama = "ganteng";

echo "judul" ."<br>".$buku1->judul."pengarang"."<br>" .$buku1->pengarang . "tahun" ."<br>" .$buku1->tahun;
echo "<br>";
echo "alamat".$pengarang->alamat."penulis" .$pengarang->penulis. "nama".$pengarang->nama;

?>




