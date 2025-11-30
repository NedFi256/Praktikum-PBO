<?php
// Mobile.php
require_once "interface.php";
require_once "abstract.php";

class Ewallet extends Pembayaran implements Transaksi, Struk {

    private $belanja;
    private $app;

    public function __construct($saldo_awal, $app)
    {
        parent::__construct($saldo_awal);
        $this->app = $app;
    }

    public function total($jumlah)
    {
        $this->belanja = $jumlah;
    }

    public function Jenis()
    {
        return "E-Wallet: " . $this->app;
    }

    public function Biaya_Transaksi($biaya)
    {
        return $biaya + 500; // biaya admin tetap
    }

    public function verifikasi($id, $ket)
    {
        echo "Dengan Id Pembayaran $id, $ket<br>";
        echo "Verifikasi Wajah Berhasil, Transaksi Sukses<br>";
    }

    public function nota()
    {
        // tidak ada struk tambahan (sesuai contoh)
    }
}

/* ================================
   5. PEMBAYARAN E-WALLET DANA
=================================*/
echo "<h3><u>Ahmad Firdaus Melakukan pembayaran E-Wallet: Dana</u></h3>";

$ewallet = new Ewallet(200000, "Dana");
echo "Ahmad Firdaus(002) Mempunyai saldo sebanyak " . number_format(200000, 2, ",", ".") . "<br>";
echo "Total belanja Rp : " . number_format(50500, 2, ",", ".") . "<br>";
echo "Total Bayar Rp : " . number_format(100000, 2, ",", ".") . "<br>";

$ewallet->total(50500);
$ewallet->verifikasi(12345, "Terbayar lunas");