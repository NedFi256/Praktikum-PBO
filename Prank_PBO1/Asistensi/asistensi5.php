
<?php
interface elektronik {
    public function info($merek , $harga);
    public function power();
}
interface garansi {
    public function masa_garansi($tahun);
    public function tipe_garansi($TIPEGARANSI);
//interface adalah kontrak yang harus di ikuti oleh kelas yang mengimplementasikannya
}
//kalo mau memasukkan dua impelemen itu harus dimaksukkan semua methodnya
class makanan implements elektronik,garansi{
    public $nama_toko;

    public function Nama_toko($nama_toko){
        $this->nama_toko = $nama_toko;
    }
    public function info($merek , $harga) {
        return "Merek: ".$merek.", Harga: ".$harga;
    }
    public function power() {
        return "pesan sekarang";
    }
    public function masa_garansi($tahun)
    {
        return "Garansi ".$tahun." tahun";
    } 
    public function tipe_garansi($TIPEGARANSI)
    {
    if ($TIPEGARANSI == "tinggi"){
        echo "Garansi resmi dari pabrik";
    } else if ($TIPEGARANSI == "sedang"){
        echo "Garansi toko";
    }
     else if ($TIPEGARANSI == "rendah"){
        echo "Garansi toko";
    }
    else {
        echo "tidak diketahui";
    }
    
}

// }
// class minuman implements elektronik,garansi{
//     public $nama_toko;

//     public function Nama_toko($nama_toko){
//         $this->nama_toko = $nama_toko;
//     }
//     public function info($merek , $harga) {
//         return "Merek: ".$merek.", Harga: ".$harga;
//     }
//     public function power() {
//         return "pesan sekarang";
//     }
//     public function masa_garansi($tahun)
//     {
//         return "Garansi ".$tahun." tahun";
//     } 
// }
// class kipas implements elektronik,garansi{
//     public $nama_toko;

//     public function Nama_toko($nama_toko){
//         $this->nama_toko = $nama_toko;
//     }
//     public function info($merek , $harga) {
//         return "Merek: ".$merek.", Harga: ".$harga;
//     }
//     public function power() {
//         return "pesan sekarang";
//     }
//     public function masa_garansi($tahun)
//     {
//         return "Garansi ".$tahun." tahun";
//     } 
// }
// class AC implements elektronik,garansi{
//     public $nama_toko;

//     public function Nama_toko($nama_toko){
//         $this->nama_toko = $nama_toko;
//     }
//     public function info($merek , $harga) {
//         return "Merek: ".$merek.", Harga: ".$harga;
//     }
//     public function power() {
//         return "pesan sekarang";
//     }
//     public function masa_garansi($tahun)
//     {
//         return "Garansi ".$tahun." tahun";
//     } 
}



$makanan = new makanan();
$makanan->Nama_toko("Toko Elektronik ABC");
echo "Toko: ".$makanan->nama_toko ."<br>";
echo $makanan->info("indomi",30000)."<br>";
echo $makanan->power()."<br>";
echo $makanan->masa_garansi(2)."<br><br>";
echo $makanan->tipe_garansi("TIPEGARANSI")
// $minuman = new minuman();
// $minuman->Nama_toko("Toko Elektronik ABC");
// echo "Toko: ".$minuman->nama_toko ."<br>";
// echo $minuman->info("nutrisari",15000)."<br>";
// echo $minuman->power()."<br>";
// echo $minuman->masa_garansi(1)."<br><br>";
// $kipas = new kipas();
// $kipas->Nama_toko("Toko Elektronik ABC");
// echo "Toko: ".$kipas->nama_toko ."<br>";
// echo $kipas->info("Kipas Angin",250000)."<br>";
// echo $kipas->power()."<br>";
// echo $kipas->masa_garansi(3)."<br><br>";
// $AC = new AC();
// $AC->Nama_toko("Toko Elektronik ABC");
// echo "toko: ".$AC->nama_toko ."<br>";
// echo $AC->info("AC Daikin",3500000)."<br>";
// echo $AC->power()."<br>";
// echo $AC->masa_garansi(5)."<br><br>";
?>