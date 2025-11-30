<?php
abstract class Toko {
    protected $nama_barang;
    protected $jumlah_stok;
    protected $harga;
    protected $nama_admin;

    public function __construct($nama_barang, $jumlah_stok, $harga, $nama_admin) {
        $this->nama_barang = $nama_barang;
        $this->jumlah_stok = $jumlah_stok;
        $this->harga = $harga;
        $this->nama_admin = $nama_admin;
    }

    public function Header() {
        echo "<h3>Data Barang " . $this->nama_barang . "</h3>";
    }

    abstract public function abstrak($lokasi, $tanggal, $jenis_kategori);
}
?>