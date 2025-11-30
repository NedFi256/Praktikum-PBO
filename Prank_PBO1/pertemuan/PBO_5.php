<?php
class anjing {
    public function suara() {
        return "Guk Guk";
    }
}
class kucing {
    public function suara() {
        return "Meong Meong";
    }
}
//selama objeknya punya method suara, maka bisa dipanggil
function suarahewan ($hewan) {
    return $hewan->suara();
}
$hewan1 = new anjing();
$hewan2 = new kucing();

echo suarahewan($hewan1)."<br>";
echo suarahewan($hewan2)."<br>";


 echo 
    "<table border='1' cellpadding='10' cellspacing='0'>
            <tr>
                <td>no.</td>
                <td>1</td>
            </tr>
            <tr>
                <td>judul novel</td>
                <td>{$perpus2->daftarnovel[0]->judul}</td>
            </tr>
            <tr>
                <td>penerbit novel</td>
                <td>{$perpus2->daftarnovel[0]->penerbit}</td>
            </tr>
        </table>";