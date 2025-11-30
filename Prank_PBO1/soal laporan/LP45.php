<?php
class Pegawai {
  static function __callStatic($perintah, $argumen){
    $data = $argumen[0] ?? [];
    if(in_array(null, $data, true)){
      echo "Info tidak valid!!!<br>";
      return;
    }
    echo "Nama: {$data['nama']}, 
          Jabatan: {$data['jabatan']}, 
          Gaji: {$data['gaji']}, 
          LamaKerja: {$data['lamaKerja']}, 
          Status: {$data['status']}<br>";
  }
}

Pegawai::data(['nama'=>'Ahmad','jabatan'=>'Programmer','gaji'=>5000000,'lamaKerja'=>2,'status'=>'Tetap']);
Pegawai::data(['nama'=>'Budi','jabatan'=>null,'gaji'=>3000000,'lamaKerja'=>1,'status'=>'Kontrak']);
?>
