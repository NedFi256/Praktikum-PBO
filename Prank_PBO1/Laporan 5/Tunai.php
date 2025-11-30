<?php
// Tunai.php
require_once "interface.php";
require_once "abstract.php";

class Cash extends Pembayaran implements Transaksi, Struk {

    private $jumlahbayar;
    private $belanja;
    private $status = false; // untuk menentukan apakah boleh cetak struk
    private $kembalian;

    public function total($jumlah)
    {
        $this->belanja = $jumlah;
        return $jumlah;
    }

    public function bayar($jumlah)
    {
        $this->jumlahbayar = $jumlah;
    }

    public function Kembalian()
    {
        $this->kembalian = $this->jumlahbayar - $this->belanja;

        if ($this->kembalian > 0) {
            echo "Kembalian Uang Rp : " . number_format($this->kembalian, 2, ",", ".") . "<br>";
            $this->status = true;

        } elseif ($this->kembalian == 0) {
            echo "Uang pas tidak ada kembalian<br>";
            $this->status = true;

        } else {
            echo "Uang anda kurang Rp : " . number_format(abs($this->kembalian), 2, ",", ".") . "<br>";
            $this->status = false;
        }
    }

    public function verifikasi($id, $ket)
    {
        echo "Dengan kode nota : ID $id, $ket<br>";
    }

    public function nota()
    {
        if ($this->status) {
            echo "Pembayar Berhasil, Cetak Struk!!!<br>";
        }
    }

    public function sisa_uang()
    {
        if ($this->status) {
            $sisa = $this->saldo - $this->belanja;
            echo "Sisa uang " . $this->nama_pemilik . " Saat ini adalah " . 
                 number_format($sisa, 2, ",", ".") . "<br>";
        }
    }

    public function Jenis()
    {
        return "Cash (tunai)";
    }

    public function Biaya_Transaksi($biaya)
    {
        return $biaya; // cash tidak ada biaya khusus
    }
}
/*PEMBAYARAN CASH — UANG LEBIH*/
echo "<h3><u>Ahmad Firdaus Melakukan pembayaran Cash (tunai)</u></h3>";

$cash1 = new Cash(500000);
echo "Ahmad Firdaus(002) Membawa uang sebanyak " . number_format(500000, 2, ",", ".") . "<br>";
echo "Total belanja Rp : " . number_format(50000, 2, ",", ".") . "<br>";
echo "Total Bayar Rp : " . number_format(100000, 2, ",", ".") . "<br>";

$cash1->total(50000);
$cash1->bayar(100000);
$cash1->verifikasi(12345, "lunas");
$cash1->Kembalian();
$cash1->nota();
$cash1->sisa_uang();

echo "<br>";

/* ================================
   3. PEMBAYARAN CASH — UANG PAS
=================================*/
echo "<h3><u>Ahmad Firdaus Melakukan pembayaran Cash (tunai)</u></h3>";

$cash2 = new Cash(500000);
echo "Ahmad Firdaus(002) Membawa uang sebanyak " . number_format(500000, 2, ",", ".") . "<br>";
echo "Total belanja Rp : " . number_format(100000, 2, ",", ".") . "<br>";
echo "Total Bayar Rp : " . number_format(100000, 2, ",", ".") . "<br>";

$cash2->total(100000);
$cash2->bayar(100000);
$cash2->verifikasi(12345, "lunas");
$cash2->Kembalian();
$cash2->nota();
$cash2->sisa_uang();

echo "<br>";

/* ================================
   4. PEMBAYARAN CASH — UANG KURANG
=================================*/
echo "<h3><u>Ahmad Firdaus Melakukan pembayaran Cash (tunai)</u></h3>";

$cash3 = new Cash(500000);
echo "Ahmad Firdaus(002) Membawa uang sebanyak " . number_format(500000, 2, ",", ".") . "<br>";
echo "Total belanja Rp : " . number_format(150000, 2, ",", ".") . "<br>";
echo "Total Bayar Rp : " . number_format(100000, 2, ",", ".") . "<br>";

$cash3->total(150000);
$cash3->bayar(100000);
$cash3->verifikasi(12345, "lunas");
$cash3->Kembalian();
$cash3->nota();
$cash3->sisa_uang();

echo "<br>";