<?php
require_once 'interface.php';
require_once 'abstract.php';

class Paket_promo extends Toko implements Info, Utama {
    private $kodeunit;
    private $barang_diperoleh;
    private $jenis_barang;

    public function __construct($nama_barang, $jumlah_stok, $harga, $nama_admin, $barang_diperoleh, $jenis_barang) {
        parent::__construct($nama_barang, $jumlah_stok, $harga, $nama_admin);
        $this->barang_diperoleh = $barang_diperoleh;
        $this->jenis_barang = $jenis_barang;
    }

    public function kode_produk($kode) {
        $this->kodeunit = $kode;
    }

    public function Tampilkan_lokasi($lokasi) {
        return $lokasi;
    }

    public function Tanggal_masuk($tanggal) {
        return $tanggal;
    }

    public function abstrak($lokasi, $tanggal, $jenis_kategori) {
        $total = $this->harga * $this->jumlah_stok;
        
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr><td><b>Nama Admin</b></td><td>" . $this->nama_admin . "</td></tr>";
        echo "<tr><td><b>Paket Promo</b></td><td>" . $this->nama_barang . "</td></tr>";
        echo "<tr><td><b>Barang Yang Diperoleh</b></td><td>" . $this->barang_diperoleh . "</td></tr>";
        echo "<tr><td><b>Kategori</b></td><td>" . $jenis_kategori . "</td></tr>";
        echo "<tr><td><b>Kode Promo</b></td><td>" . $this->kodeunit . "</td></tr>";
        echo "<tr><td><b>Stok</b></td><td>" . $this->jumlah_stok . "</td></tr>";
        echo "<tr><td><b>Harga Promo</b></td><td>Rp. " . number_format($this->harga, 0, ',', ' ') . "</td></tr>";
        echo "<tr><td><b>Total Harga</b></td><td>Rp. " . number_format($total, 0, ',', ' ') . "</td></tr>";
        echo "<tr><td><b>Lokasi penyimpanan</b></td><td>" . $this->Tampilkan_lokasi($lokasi) . "</td></tr>";
        echo "<tr><td><b>Tanggal Masuk Gudang</b></td><td>" . $this->Tanggal_masuk($tanggal) . "</td></tr>";
        echo "</table><br>";
    }

    public function __destruct() {}
}
?>