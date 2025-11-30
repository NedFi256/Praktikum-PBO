<?php
// $nama = "Ahmad Firdaus";
// $umur = "20";
// $jurusan = "Teknik informatika";
// echo "halo gays <br>" ; 
// echo " nama saya : {$nama} <br> umur saya : {$umur} tahun <br> jurusan : {$jurusan}";

// class AkunBank {
    // Properti private (tidak bisa diakses dari luar)
//     private $saldo;

//     // Method public untuk mengatur saldo
//     public function setSaldo($jumlah) {
//             $this->saldo = $jumlah;
//     }

//     // Method public untuk menampilkan saldo
//     public function getSaldo() {
//         echo "Saldo anda saat ini: Rp " . $this->saldo . "<br>";
//     }
// }

// // Membuat objek dari class AkunBank
// $akun = new AkunBank();

// // Mengatur saldo menggunakan method setSaldo()
// $akun->setSaldo(500000);

// // Menampilkan saldo menggunakan method getSaldo()
// $akun->getSaldo();

// 

class Mahasiswa {
    private $nama = "Ahmad Firdaus"; // atribut private

    public function tampilkanNama() { // method public
        return $this->nama; // akses atribut private dari dalam class
    }
}

$mhs = new Mahasiswa();
echo $mhs->tampilkanNama(); // bisa
// echo $mhs->nama; //  error karena private



?>
