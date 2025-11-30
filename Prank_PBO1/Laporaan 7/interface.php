<?php
interface InterfaceInfo
{
    public function kodeproduk($kode);
    public function kategori($jenis_kategori);
}

interface InterfaceUtama extends InterfaceInfo
{
    public function tampilkan_lokasi($lokasi);
    public function tanggal_masuk($tanggal);
}
?>