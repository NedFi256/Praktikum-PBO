
<?php
interface kuat {
    public function dayaTahan();
}
interface hewan {
    public function suara();
    public function makan($makanan);
//interface adalah kontrak yang harus di ikuti oleh kelas yang mengimplementasikannya
}
//kalo mau memasukkan dua impelemen itu harus dimaksukkan semua methodnya
class kucing implements hewan,kuat{
    public function suara() {
        return "Meong Meong";
    }
    public function makan($makanan) {
        return "Kucing makan ".$makanan;
    }
    public function dayaTahan()
    {
        return "kuatt";
    } 
}
//untuk memanggil interface harus di implementasikan pada kelas yang akan menggunakannya
class anjing implements hewan{
    public function suara() {
        return "Guk Guk";
    }
    public function makan($makanan) {
        return "Anjing makan ".$makanan;
    }
}
$kucing1 = new kucing();
$anjing1 = new anjing();
echo $kucing1->suara()."<br>";
echo $kucing1->makan("Ikan")."<br>"; // untuk melakukan pemanggilan parameter kita perlu mengisinya di (disini)
echo $anjing1->suara()."<br>";
echo $anjing1->makan("Daging")."<br>";