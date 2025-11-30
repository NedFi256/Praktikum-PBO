<?php
// abstract.php

abstract class Pembayaran {

    protected $nama_pemilik = "Ahmad Firdaus";
    protected $saldo;
    protected $nim = "002";  // 3 digit terakhir NIM kamu

    public function __construct($saldo_awal)
    {
        $this->saldo = $saldo_awal;
    }

    abstract public function Jenis();
    abstract public function Biaya_Transaksi($biaya);
}
