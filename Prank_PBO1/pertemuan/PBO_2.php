<?php
class moto {
    var $nama;
   public $jenis;
   public $harga;
   public function moto() 
    {
        
    }
   }

$motor1 = new moto();
$motor1->moto();
$motor1->nama = " honda ";
$motor1->jenis = " matic ";
$motor1->harga = 20000000;

echo "<br>" ;
echo  "motor ku ". $motor1->nama . " dan jenis " . $motor1->jenis ;
echo "<br>" ;
echo " harga motor $motor1->nama ku adalah $motor1->harga ";
echo " motorku $motor1->nama dari $motor1->jenis ";

 echo "<br> <br> <br> <br>" ;   

class mobil {
    var $nama;
   public $harga;
   public $jenis;
    public function mobil() 
     {
          echo " <h4> Jenis mobil : </h4> " . $this->jenis . "<br>" . $this->nama . "<br>";
          echo '<img src="foto/toyota.png" alt="" width="100">'; 
}
}
$mobil1 = new mobil();
$mobil1->mobil();
$mobil1->nama = " toyota ";
$mobil1->jenis = " avanza ";
$mobil1->harga = 200000;

echo "<br>" ;
echo "mobilku $mobil1->nama dari $mobil1->jenis ";
echo "<br>" ;
echo "harga mobil $mobil1->nama ku adalah $mobil1->harga ";

?>


    
