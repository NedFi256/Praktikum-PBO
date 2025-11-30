<?php
// class mahasiswa {
//     private $nama;
//     private $nilai;

//     public function setnilai($namamhs, $nilaimhs){
//         $this->nama = $namamhs;

//         if ($nilaimhs >= 0 && $nilaimhs<= 100){
//             $this->nilai = $nilaimhs;    
//         } else {
//             echo "nilai tidak terbaca!";
//             $this-> nilai = null;
//         }    
//     }
// public function getketerangan(){
//     if ($this->nilai === null) {
//         echo "{$this->nama} dinyatakan lulus <br>";
//     } else if ($this->nama >=75) {
//         echo "{$this->nama} dinyatakan lulus {$this->nilai}<br>";
//     } else {
//         echo "{$this->nama} dinyatakan tidak lulus dengan nilai {$this->nilai}<br>";
//     }
// }
// }
// $mhs1 = new mahasiswa();
// $mhs1 ->setnilai(" andi", 90);
// $mhs1 ->getketerangan();


// $mhs2 = new mahasiswa();
// $mhs2 ->setnilai(" siti", 50);
// $mhs2 ->getketerangan();

// $mhs3 = new mahasiswa();
// $mhs3 ->setnilai(" munawaroh", 150);
// $mhs3 ->getketerangan();

class Mahasiswa {
    private $Nama;
    private $Nilai;

    // Method untuk mengatur nilai mahasiswa
    public function setNilai($namaMhs, $nilaimhs) {
        $this->Nama = $namaMhs;

        // Validasi nilai 0-100
        if ($nilaimhs >= 0 && $nilaimhs <= 100) {
            $this->Nilai = $nilaimhs;
        } else {
            echo "Nilai Tidak Terbaca! ";
            $this->Nilai = null; // nilai tidak valid
        }
    }

    // Method untuk menampilkan keterangan kelulusan
    public function getKeterangan() {
        if ($this->Nilai == null) {
            echo "{$this->Nama} dinyatakan Tidak Lulus<br>";
        } elseif ($this->Nilai >= 75) {
            echo "{$this->Nama} dinyatakan Lulus dengan Nilai {$this->Nilai}<br>";
        } else {
            echo "{$this->Nama} dinyatakan Tidak Lulus dengan Nilai {$this->Nilai}<br>";
        }
    }
}

// Membuat objek dan menampilkan hasil
$mhs1 = new Mahasiswa();
$mhs1->setNilai("Andi", 90);
$mhs1->getKeterangan();

$mhs2 = new Mahasiswa();
$mhs2->setNilai("Siti", 50);
$mhs2->getKeterangan();

$mhs3 = new Mahasiswa();
$mhs3->setNilai("Munawaroh", 150);
$mhs3->getKeterangan();


?>