<?php

// Interface Tujuan: nama jalan (tujuan) dan bbm (jumlah)
interface Tujuan {
    public function namaJalan(string $tujuan);
    public function bbm(int $jumlah);
}

// Interface Status: dengan method kondisi()
interface Status {
    public function kondisi();
}

// Abstract class Transportasi: merek, warna, tahun_produksi
abstract class Transportasi {
    protected string $merek;
    protected string $warna;
    protected int $tahun_produksi;

    public function __construct(string $merek, string $warna, int $tahun_produksi) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->tahun_produksi = $tahun_produksi;
    }

    // Method abstrak
    abstract public function deskripsi();
    abstract public function info();
}

// Subclass Mobil: implement Tujuan & Status
class Mobil extends Transportasi implements Tujuan, Status {
    protected int $kapasitas;

    public function __construct(string $merek, string $warna, int $tahun_produksi, int $kapasitas) {
        parent::__construct($merek, $warna, $tahun_produksi);
        $this->kapasitas = $kapasitas;
    }

    // Implementasi interface Tujuan
    public function namaJalan(string $tujuan) {
        echo "Mobil menuju ke: " . $tujuan ;
    }

    public function bbm(int $jumlah) {
        echo "BBM mobil: " . $jumlah . " liter" . PHP_EOL;
    }

    // Implementasi interface Status
    public function kondisi() {
        echo "Kondisi mobil: Baik dan layak jalan." . PHP_EOL;
    }

    // Implementasi abstract method
    public function deskripsi() {
        echo "Ini adalah mobil merek {$this->merek} berwarna {$this->warna}." . PHP_EOL;
    }

    public function info() {
        echo "Tahun produksi: {$this->tahun_produksi}" . PHP_EOL;
        echo "Kapasitas penumpang: {$this->kapasitas}" . PHP_EOL;
    }
}

// Subclass Kereta: implement Tujuan & Status
class Kereta extends Transportasi implements Tujuan, Status {
    protected int $jumlah_gerbong;

    public function __construct(string $merek, string $warna, int $tahun_produksi, int $jumlah_gerbong) {
        parent::__construct($merek, $warna, $tahun_produksi);
        $this->jumlah_gerbong = $jumlah_gerbong;
    }

    // Implementasi interface Tujuan
    public function namaJalan(string $tujuan) {
        echo "Kereta menuju ke: " . $tujuan . PHP_EOL;
    }

    public function bbm(int $jumlah) {
        echo "Kereta menggunakan energi setara BBM: " . $jumlah . " liter" . PHP_EOL;
    }

    // Implementasi interface Status
    public function kondisi() {
        echo "Kondisi kereta: Sangat baik dan siap beroperasi." . PHP_EOL;
    }

    // Implementasi abstract method
    public function deskripsi() {
        echo "Kereta merek {$this->merek} berwarna {$this->warna}." . PHP_EOL;
    }

    public function info() {
        echo "Tahun produksi: {$this->tahun_produksi}" . PHP_EOL;
        echo "Jumlah gerbong: {$this->jumlah_gerbong}" . PHP_EOL;
    }
}


// Contoh penggunaan
$mobil = new Mobil("Toyota", "Hitam", 2020, 5);
$mobil->deskripsi();
$mobil->info();
$mobil->namaJalan("Jalan Sudirman");
$mobil->bbm(20);
$mobil->kondisi();

echo PHP_EOL;

$kereta = new Kereta("KAI", "Biru", 2015, 8);
$kereta->deskripsi();
$kereta->info();
$kereta->namaJalan("Stasiun Gambir");
$kereta->bbm(300);
$kereta->kondisi();
