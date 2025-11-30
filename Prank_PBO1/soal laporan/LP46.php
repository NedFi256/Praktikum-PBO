<?php
class Profesi {
  static function deskripsi() {
    echo "Profesi umum di masyarakat<br>";
  }
  static function gaji() {
    echo "Gaji berbeda tiap profesi<br>";
  }
  static function jam_kerja() {
    echo "Rata-rata 8 jam kerja per hari<br>";
  }
}

class Polisi extends Profesi {
  static $nama = "Ahmad";
  static $pangkat = "Bripka";

  static function deskripsi() {
    echo self::$nama . " adalah Polisi berpangkat " . self::$pangkat . "<br>";
  }
  static function gaji() {
    echo "Gaji Rp4.500.000/bulan<br>";
  }
  static function jam_kerja() {
    echo "Kerja sistem shift<br><br>";
  }
}

class Dokter extends Profesi {
  static $nama = "Budi";
  static $spesialis = "Umum";

  static function deskripsi() {
    echo self::$nama . " adalah Dokter " . self::$spesialis . "<br>";
  }
  static function gaji() {
    echo "Gaji Rp10.000.000/bulan<br>";
  }
  static function jam_kerja() {
    echo "Kerja sesuai jadwal jaga<br><br>";
  }
}

class Guru extends Profesi {
  static $nama = "Citra";
  static $mapel = "Matematika";

  static function deskripsi() {
    echo self::$nama . " adalah Guru " . self::$mapel . "<br>";
  }
  static function gaji() {
    echo "Gaji Rp3.500.000/bulan<br>";
  }
  static function jam_kerja() {
    echo "Kerja 07.00–14.00<br>";
  }
}

// Pemanggilan
Polisi::deskripsi();
Polisi::gaji();
Polisi::jam_kerja();
Dokter::deskripsi();
Dokter::gaji();
Dokter::jam_kerja();
Guru::deskripsi();
Guru::gaji();
Guru::jam_kerja();
?>
