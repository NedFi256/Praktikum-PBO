<?php
// Kartu.php
require_once "interface.php";
require_once "abstract.php";

class Debit extends Pembayaran implements Transaksi, Struk {

    protected $bank;
    private $belanja;

    public function __construct($saldo_awal, $bank)
    {
        parent::__construct($saldo_awal);
        $this->bank = $bank;
    }

    public function total($jumlah)
    {
        $this->belanja = $jumlah;
        return $jumlah;
    }

    public function Jenis()
    {
        return "Kartu Debit " . $this->bank;
    }

    public function Biaya_Transaksi($biaya)
    {
        return $biaya + ($biaya * 0.02); // pajak 2%
    }

    public function verifikasi($id, $ket)
    {
        echo "Dengan kode transaksi : ID $id, $ket<br>";
        echo "Pin Yang Dimasukkan Benar, Pembayar Sukses<br>";
    }

    public function nota()
    {
        // biasanya debit tidak mencetak struk khusus
    }

    public function Sisa_saldo()
    {
        $total = $this->Biaya_Transaksi($this->belanja);
        $sisa = $this->saldo - $total;

        echo "Sisa saldo " . $this->nama_pemilik . " Saat ini adalah " .
             number_format($sisa, 2, ",", ".") . "<br>";
    }
}

echo "<h3><u>Ahmad Firdaus Melakukan pembayaran Kartu Debit BNI</u></h3>";
$debit = new Debit(200000, "BNI");
echo "Ahmad Firdaus(002) Mempunyai saldo sebanyak " . number_format(200000, 2, ",", ".") . "<br>";
echo "Total belanja Rp : " . number_format(51000, 2, ",", ".") . "<br>";
echo "Total Bayar Rp : " . number_format(100000, 2, ",", ".") . "<br>";
$debit->total(51000);
$debit->verifikasi(12345, "lunas");
$debit->Sisa_saldo(); 