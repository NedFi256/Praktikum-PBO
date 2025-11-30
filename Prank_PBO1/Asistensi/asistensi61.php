<?php
interface interfacet {
    public function Jalan($tujuan);
    public function bbm($jumlah);
}
interface Status {
    public function kondisi();
}
abstract class Transportasi {
    protected string $merek;
    protected string $warna;
    protected int $tahun_produksi;

    public function __construct($merek, $warna, $tahun_produksi) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->tahun_produksi = $tahun_produksi;
    }
      abstract public function deskripsi();
    abstract public function info();
}
class Mobil extends Transportasi implements interfacet, Status {
    protected int $kapasitas;

    public function __construct($merek,$warna,$tahun_produksi,$kapasitas) {
        parent::__construct($merek, $warna, $tahun_produksi);
        $this->kapasitas = $kapasitas;
    }
      public function Jalan($tujuan) {
        echo "Mobil menuju ke: " . $tujuan ;
    }
     public function bbm($jumlah) {
        echo "BBM mobil: " . $jumlah . " liter" ;
    }
    public function kondisi() {
        echo "Kondisi mobil: Baik dan layak jalan." ;
    }

    public function deskripsi() {
        echo "Ini adalah mobil merek {$this->merek} berwarna {$this->warna}." ;
    }

    public function info() {
        echo "Tahun produksi: {$this->tahun_produksi}" ;
        echo "Kapasitas penumpang: {$this->kapasitas}" ;
    }

}
class Kereta extends Transportasi implements Tujuan, Status {
    protected int $jumlah_gerbong;

    public function __construct(string $merek, string $warna, int $tahun_produksi, int $jumlah_gerbong) {
        parent::__construct($merek, $warna, $tahun_produksi);
        $this->jumlah_gerbong = $jumlah_gerbong;
    }
     public function namaJalan(string $tujuan) {
        echo "Kereta menuju ke: " . $tujuan . PHP_EOL;
    }
    public function bbm(int $jumlah) {
        echo "Kereta menggunakan energi setara BBM: " . $jumlah . " liter" . PHP_EOL;
    }



