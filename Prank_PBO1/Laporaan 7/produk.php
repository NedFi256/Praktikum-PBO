j<?php
require_once 'interface.php';
require_once 'abcstract.php';

class paketPromo extends Toko implements InterfaceUtama
{
    private $kode_diskon;
    private $jenis_barang_diperoleh;
    private $harga_promo;

    public function __construct($nama_admin, $paket_promo, $jenis_barang, $jumlah_stok, $harga_promo, $kode_diskon)
    {
       
        parent ::  __construct($nama_admin, $paket_promo, $jumlah_stok, $harga_promo);
        $this->kode_diskon = $kode_diskon;
        $this->jenis_barang_diperoleh = $jenis_barang;
        $this->harga_promo = $harga_promo;
    }


    public function kodeproduk($kode) { 
        echo "<tr><td>Kode Promo</td><td>: {$kode}</td></tr>"; }
    public function kategori($jenis_kategori) { 
        echo "<tr><td>Kategori</td><td>: {$jenis_kategori}</td></tr>"; }
    public function tampilkan_lokasi($lokasi) { 
        echo "<tr><td>Lokasi penyimpanan</td><td>: {$lokasi}</td></tr>"; }
    public function tanggal_masuk($tanggal) { 
        echo "<tr><td>Tanggal Masuk Gudang</td><td>: {$tanggal}</td></tr>"; }

    
    public function hitungtotal(): float
    {
        return $this->harga_promo * $this->jumlah_stok;
    }

    public function infoBarang($lokasi, $Tanggal, $jenis_kategori)
    {
        $this->MethodHeader();
        
        echo "<tr><td>Nama Admin</td><td>: {$this->nama_admin}</td></tr>";
        echo "<tr><td>Paket Promo</td><td>: {$this->nama_barang}</td></tr>";
        echo "<tr><td>Barang Yang Diperoleh</td><td>: {$this->jenis_barang_diperoleh}</td></tr>";
        $this->kategori($jenis_kategori);
        $this->kodeproduk($this->kode_diskon);
        echo "<tr><td>Stok</td><td>: {$this->jumlah_stok}</td></tr>";
        echo "<tr><td>Harga Promo</td><td>: Rp. " . number_format($this->harga_promo, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>Total Harga</td><td>: Rp. " . number_format($this->hitungtotal(), 0, ',', '.') . "</td></tr>";
        $this->tampilkan_lokasi($lokasi);
        $this->tanggal_masuk($Tanggal);
        echo "</table>";
    }

    public function __destruct()
    {
        if ($this->jumlah_stok <= 0) {
            echo "<p>Stok promo {$this->nama_barang} habis. Promo dihentikan.</p>";
        }
    }
}
?>