<?php
class AkunBank {
    // Properti private (tidak bisa diakses dari luar)
    private $saldo;

    // Konstruktor untuk menginisialisasi saldo
    public function __construct() {
        $this->saldo = 0;
    }

    // Method public untuk mengatur saldo
    public function setSaldo($jumlah) {
        if ($jumlah >= 0) {
            $this->saldo = $jumlah;
        } else {
            echo ("Saldo tidak boleh negatif!");
        }
    }

    // Method public untuk menampilkan saldo
    public function getSaldo() {
        return "Saldo anda saat ini: Rp " . $this->saldo . "<br>";
    }
}

// Membuat objek dari class AkunBank
$akun = new AkunBank();

// Mengatur saldo menggunakan method setSaldo()
$akun->setSaldo(500000);

// Menampilkan saldo menggunakan method getSaldo()
echo $akun->getSaldo();
?>
