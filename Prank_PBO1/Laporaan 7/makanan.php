<?php
require_once 'Interface.php';
require_once 'abcstract.php';   // ✔ diperbaiki dari 'abcstract.php'

class produkMakanan extends Toko implements InterfaceUtama {

    private $kode_barang;      // ✔ diperbaiki dari $kodebarang agar cocok dengan penggunaan
    private $nama_penerima;

    public function __construct($nama_admin, $nama_penerima, $nama_produk, $jumlah_stok, $harga, $kode_barang)
    {
        parent::__construct($nama_admin, $nama_produk, $jumlah_stok, $harga);
        $this->nama_penerima = $nama_penerima;
        $this->kode_barang = $kode_barang;
    }

    public function kodeproduk($kode) { 
        echo "<tr><td>Kode Barang</td><td>: {$kode}</td></tr>"; 
    }
    
    public function kategori($jenis_kategori) { 
        echo "<tr><td>Kategori</td><td>: {$jenis_kategori}</td></tr>"; 
    }
    
    public function tampilkan_lokasi($lokasi) { 
        echo "<tr><td>Lokasi penyimpanan</td><td>: {$lokasi}</td></tr>"; 
    }
    
    public function tanggal_masuk($tanggal) { 
        echo "<tr><td>Tanggal Masuk Gudang</td><td>: {$tanggal}</td></tr>"; 
    }

    public function hitungtotal():float
    {
        return $this->jumlah_stok * $this->harga;
    }

    public function infoBarang($lokasi, $tanggal, $jenis_kategori)
    {
        $this->MethodHeader();

        echo "<table border='1'>";    // ✔ Tambahkan table agar <tr> tidak error

        echo "<tr><td>Nama Penerima</td><td>: {$this->nama_penerima}</td></tr>";
        echo "<tr><td>Nama Produk</td><td>: {$this->nama_barang}</td></tr>";
        $this->kategori($jenis_kategori);
        $this->kodeproduk($this->kode_barang);
        echo "<tr><td>Stok</td><td>: {$this->jumlah_stok}</td></tr>";
        echo "<tr><td>Harga</td><td>: Rp. " . number_format($this->harga, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>Total Harga</td><td>: Rp. " . number_format($this->hitungtotal(), 0, ',', '.') . "</td></tr>";
        $this->tampilkan_lokasi($lokasi);
        $this->tanggal_masuk($tanggal);

        echo "</table>";
    }

    public function abstrak() 

    public function __destruct()
    {
        if ($this->jumlah_stok <= 0) {
            // ✔ Menghapus tanda ** agar tidak error HTML
            echo "<p>Stok habis! Menghentikan penjualan <b>{$this->nama_barang}</b> dari sistem.</p>";
        }
    }
}
?>
