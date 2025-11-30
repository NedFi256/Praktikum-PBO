<?php
class AkunBank {
    // PUBLIC: dapat diakses dari mana saja
    public $namaPemilik;

    // PROTECTED: hanya bisa diakses dari kelas ini dan turunannya
    protected $tipeAkun;

    // PRIVATE: hanya bisa diakses dari dalam kelas ini
    private $saldo;

    // __construct adalah constructor, yaitu fungsi khusus dalam PHP yang otomatis dijalankan ketika objek dibuat dari sebuah kelas.
    public function __construct($namaPemilik, $tipeAkun, $saldoAwal) {
        $this->namaPemilik = $namaPemilik;
        $this->tipeAkun = $tipeAkun;
        $this->saldo = $saldoAwal;
    }
// //Penjelasan langkah demi langkah:
// __construct($namaPemilik, $tipeAkun, $saldoAwal)
// → ini artinya constructor menerima tiga data ketika objek dibuat.

// $this->namaPemilik = $namaPemilik;
// → bagian kanan ($namaPemilik) adalah parameter dari luar,
// sedangkan bagian kiri ($this->namaPemilik) adalah properti milik objek.Saat membuat objek:

    // PUBLIC: method yang dapat diakses dari luar untuk menambah saldo
    public function deposit($jumlah) {
        $this->saldo += $jumlah;
        echo "Berhasil menambah saldo sebesar Rp{$jumlah}.<br>";
    }

    // PUBLIC: method untuk melihat saldo (karena saldo private)
    public function lihatSaldo() {
        return "Saldo Anda saat ini: Rp{$this->saldo}<br>";
    }

    // PROTECTED: method hanya bisa diakses dari kelas ini atau turunannya
    protected function ubahTipeAkun($tipeBaru) {
        $this->tipeAkun = $tipeBaru;
        echo "Tipe akun diubah menjadi {$this->tipeAkun}.<br>";
    }

    // PRIVATE: method hanya bisa dipanggil di dalam kelas ini saja
    private function auditSaldo() {
        echo "Audit internal saldo berjalan...<br>";
    }

    // Method publik untuk memanggil auditSaldo() secara tidak langsung
    public function jalankanAudit() {
        $this->auditSaldo();
    }
}

// Kelas turunan
class AkunPremium extends AkunBank {
    public function upgradeAkun($tipeBaru) {
        // Bisa mengakses method protected dari kelas induk
        $this->ubahTipeAkun($tipeBaru);
    }
}

// Objek utama
$akun1 = new AkunPremium("Budi", "Reguler", 1000000);

echo $akun1->namaPemilik . "<br>";    // OK (public)
$akun1->deposit(500000);              // OK (public)
echo $akun1->lihatSaldo();            // OK (public)

// $akun1->tipeAkun = "Bisnis";       // Error! (protected)
// $akun1->saldo = 2000000;            // Error! (private)

$akun1->upgradeAkun("Premium");       // OK, karena diakses lewat method turunan
$akun1->jalankanAudit();              // OK, tapi hanya lewat method public
?>
