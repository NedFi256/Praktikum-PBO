<?php
interface Kendaraan{
  function mesin(); 
  function jalan($v,$j); 
  function bahan_bakar($jenis,$jumlah,$harga);
}

class Motor implements Kendaraan{
  function mesin()
  {echo "Motor siap\n";}
  function jalan($v,$j)
  {echo "Motor $v km/h, $j km\n";}
  function bahan_bakar($jenis,$jumlah,$harga)
  {echo "BBM $jenis total Rp".$jumlah*$harga."\n";}
}

function uji(Kendaraan $k)
{$k->mesin();$k->jalan(60,10);$k->bahan_bakar('Pertalite',5,12000);}
uji(new Motor());
?>
