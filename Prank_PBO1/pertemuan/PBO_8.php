<?php
//komposisi adalah induk di hancurkan sub ikut eror krna induk bergantung ke subnyatau kelas lain
//agregasi induk hancur sub tetap aman


class buku {
    public $judul, $penerbit;

    public function __construct($j, $p)
    {
        $this->judul =$j;
        $this->penerbit = $p;

    } 
} 

class perpustakan {
    public $daftarbuku;
    public function tambahbuku (buku $buku){
        $this -> daftarbuku = new buku($buku->judul, $buku->penerbit);
    }
}
$buku1 = new buku(" daus ganteng "," bosss ");
$psp = new perpustakan ();
$psp->tambahbuku($buku1);
echo " judul buku : ". $psp->daftarbuku->judul . " <br> penerbit :  " .
$psp->daftarbuku->penerbit;

echo "<br><br>";


// agregasi ketika objeknya di hancurnyakan tetap jalan tapi

class novel {
    public $judul, $penerbit;
    public function __construct($j, $p)
    {
        $this->judul =$j;
        $this->penerbit = $p;
    }

}

class perpus {
    public $daftarnovel = [];

    public function tambahnovel(novel $novel){
        $this->daftarnovel []= $novel;
    }
}

$nove2 = new novel(" surat kecil untuk tuhan "," ashar ");
$nove3 = new novel(" musim yang tertingal "," daus ");
$perpus2 = new perpus();
$perpus2->tambahnovel($nove2);
$perpus2->tambahnovel($nove3);
echo "judul novel : " . $perpus2->daftarnovel[0]->judul .
     " <br> penerbit :  " . $perpus2->daftarnovel[0]->penerbit;

echo "<br><br>";

echo "judul novel : " . $perpus2->daftarnovel[1]->judul .
     " <br> penerbit :  " . $perpus2->daftarnovel[1]->penerbit;





     echo 
    "<table border='1' cellpadding='10' cellspacing='0'>
            <tr>
                <td>no.</td>
                <td>judul novel</td>
                <td>penerbit novel</td>
                
             <tr>";

foreach ($perpus2->daftarnovel as $key){
    
              <td>'.1.'</td>
                <td>'.$key->judul.'</td>
               <td>'.$key->penerbit.'</td>
            </tr>
        
            
        }
        "</table>";
?>