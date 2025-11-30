<?php 
//class abstrak adalah kelas yang tidak bisa di instansiasi langsung 
//kelas abstrak biasanya digunakan sebagai kelas induk

interface kerja{
    public function tugas();
}
abstract class pekerjaan {
    protected $nama, $gaji;
    public function __construct($n, $g) {
        $this->nama = $n;
        $this->gaji = $g;
    }
    public function getnama(){
        echo "<br>Nama : ";
        return $this->nama;
        
    }
    //number_format adalah fungsi untuk memformat angka dengan menambahkan pemisah ribuan dan desimal
    public function getgaji(){
        return number_format($this->gaji, 2, ',', '.');
    }
    //jika membuat abstrak method tidak perlu di buatkan isi methodnya
    abstract public function desk();

}

class dokter extends pekerjaan implements kerja{
    public function desk() //method abstrak harus di panggil di kelas turunan jika tidak maka akan error
    {
        return "merawat pasien";
    
    }
//method dari interface itu WAJIB DI IMPELENTASIKAN
    public function tugas(){
        return "Menyembuhkan Pasien";
    }
}

$kerja = new dokter("Dokter Mas", 5000000);
echo $kerja->getnama()."<br> mempunyai gaji Rp. : "
    .$kerja->getgaji()." <br> tugasnya : "
    .$kerja->desk(). " dan " . $kerja->tugas();


class guru extends pekerjaan implements kerja{
    private $jam_kerja;
    public function __construct($n, $g, $jam) //konstruktor pada kelas turunan
    {
        parent :: __construct($n, $g); //memanggil konstruktor dari kelas induk
        $this->jam_kerja = $jam; //inisialisasi properti jam_kerja
        
    }
    public function desk() //method abstrak harus di panggil di kelas turunan jika tidak maka akan error
    {
        return " pembimbing siswa ";
    
    }
    public function tugas(){
        return " Membimbing siswa ";
    }
    public function getjamkerja(){
        return $this->jam_kerja;
    }


}

$pbo = new guru ("hijjah", 6000000, "07.00-17.00");
echo $pbo->getnama(). "<br>gaji : Rp."
    .$pbo->getgaji(). "<br>tugas : "
    .$pbo->desk(). " dan "
    .$pbo->tugas()."<br>jam kerja : "
    .$pbo->getjamkerja();



?>.