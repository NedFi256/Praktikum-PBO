<?php
class hewaninfo {
    //statis adalah 
    public static function __callStatic($jenis, $hewan)
    // makek callstatict bukan constrak
    {
        //ini berguna untuk pemanggilan dimana saat objek di buat ketika tidak memasukkan apa2 di objek
       $nama =$hewan [0] ?? "tidak diketahui"; // operator ?? jika tidak ada yang di maksukkan maka akan dijalankan isinya
       $umur = $hewan [1] ?? "tidak diketahui";
       
      // ini kondisi untuk pemangilan di objek
       if ($jenis=="kucing"){
        echo "$nama adalah hewan yang suka dengan mengeong dengan umur $umur <br>";
       }
       else if ($jenis =="anjing"){
        echo "$nama adalah hewan yang suka menggonggong dengan umur $umur <br>";
       }
       else {
        echo "tidak ditemukan $jenis";
       }

    }
}
/*
harus memasukkan semuanya nama dan umur di parameternya jika tidak
maka ajakn di jalankan di bagian  
$nama =$hewan [0] ?? "tidak diketahui";
$umur = $hewan [1] ?? "tidak diketahui";
 */
hewaninfo ::kucing ("kucing",89);
hewaninfo ::anjing ("anjing",90);
hewaninfo ::ular();