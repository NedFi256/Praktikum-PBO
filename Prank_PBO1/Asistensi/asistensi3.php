<?php
class jennisbarang{
public $namaBarang;
private $nobarang;
private $hargabarang;

public function nama(){
    $this->namaBarang;
echo "nama barang : ale ale";

}
public function setno($nobarang) {
$this->nobarang = $nobarang;

}
public function setharga($hargabarang) {
$this->hargabarang = $hargabarang ;
}

public function getharga() {
        return $this->hargabarang;
    }
    public function getno() {
        return $this->nobarang;
    }
      public function tampilkanData() {
          echo "nama :   " . $this->namaBarang." ale ale "."<br>";
        echo "nomer :   " . $this->getno()."  " ."<br>";
        echo "harga :    " . $this->getharga() ."  " ."<br>";
      }

}
$nama1 = new jennisbarang();
$nama1-> namaBarang;
$nama1->setno(4566);
$nama1->setharga(70000);
$nama1->tampilkanData();

