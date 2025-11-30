<?php
// class Laptop 
// { 
// function ON() {echo "Laptop ON\n";} 
// function OFF(){echo "Laptop OFF\n";} 
// }
// class Komputer 
// { 
// function ON() {echo "Komputer ON\n";} 
// function OFF(){echo "Komputer OFF\n";} 
// }
// class Handphone 
// { 
// function ON() {echo "HP ON\n";} 
// function OFF(){echo "HP OFF\n";} 
// }

// function Device($obj, $aksi){
//     if($aksi=="ON") $obj->ON(); 
//     else $obj->OFF();
// }

// Device(new Laptop(), "ON");
// Device(new Komputer(), "OFF");
// Device(new Handphone(), "ON");

class Laptop {
  function ON(){ echo "Laptop ON <br>"; }
  function OFF(){ echo "Laptop OFF<br>"; }
  
}
class Komputer {
  function ON(){ echo "Komputer ON <br>"; }
  function OFF(){ echo "Komputer OFF<br>"; }
}
class Handphone {
  function ON(){ echo "Handphone ON<br>"; }
  function OFF(){ echo "Handphone OFF<br>"; }
}

// Fungsi Device di luar class
function Device($power){
  $devices = [new Laptop(), new Komputer(), new Handphone()];
  foreach($devices as $d){
    if($power == "ON") $d->ON();
    else $d->OFF();
  }
}

// Pemanggilan
Device("ON");
Device("OFF");
?>