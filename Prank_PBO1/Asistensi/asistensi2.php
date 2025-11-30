
 <?php
class Buku {
    private $judul;
    private $tahunTerbit;
    private $harga;

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function setTahunTerbit($tahunTerbit) {
        $this->tahunTerbit = $tahunTerbit;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

 
    public function getJudul() {
        return $this->judul;
    }

    public function getTahunTerbit() {
        return $this->tahunTerbit;
    }

    public function getHarga() {
        return $this->harga;
    }

    
    public function tergolong() {
        if ($this->harga >= 500000) {
            return "Mahal";
        } elseif ($this->harga >= 200000) {
            return "sedang";
        } elseif ($this->harga <= 50000) {
            return "Murah";
        } 
    }

   
    public function tampilkanData() {
        echo "Judul :   " . $this->getJudul()."  " ;
        echo "Terbit Tahun :    " . $this->getTahunTerbit() ."  " ;
        echo "Harga : Rp   " . $this->getHarga() ."  " ;
        echo "Tergolong :   " . $this->tergolong()."  " ;
    }
}

$buku1 = new Buku();
$buku1->setJudul("kancil");
$buku1->setTahunTerbit(2023);
$buku1->setHarga(250000);

$buku1->tampilkanData();


?>
