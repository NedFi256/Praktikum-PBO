<?php
abstract class Toko
{
    protected $nama_admin;
    protected $nama_barang; 
    protected $jumlah_stok;
    protected $harga; 
    public function __construct($nama_admin, $nama_barang, $jumlah_stok, $harga_promo)
    {
        $this->nama_admin = $nama_admin;
        $this->nama_barang = $nama_barang;
        $this->jumlah_stok = $jumlah_stok;
        $this->harga = $harga_promo;
    }

    public function MethodHeader(){

        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr><td colspan='2' style='background-color:#f0f0f0; font-weight:bold; text-align:center;'>Data Barang $this->nama_barang</td></tr>";
    }

    abstract public function hitungtotal(): float;

    abstract public function infoBarang($lokasi, $tanggal, $jenis_kategori);
}
?>