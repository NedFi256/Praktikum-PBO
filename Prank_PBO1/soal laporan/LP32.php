<?php
// Superclass
class Animal {
    protected $name;
    protected $warna;

    // Constructor
    public function __construct($name, $warna) {
        $this->name = $name;
        $this->warna = $warna;
    }

    // Getter methods
    public function getName() {
        return $this->name;
    }

    public function getWarna() {
        return $this->warna;
    }
}

// Subclass
class Cat extends Animal {
    protected $ras;

    // Constructor
    public function __construct($name, $warna, $ras) {
        parent::__construct($name, $warna); // memanggil konstruktor dari superclass
        $this->ras = $ras;
    }

    // Method tambahan
    public function getRas() {
        return $this->ras;
    }

    public function Meow() {
        return "Meow! Aku kucing bernama {$this->name}, berwarna {$this->warna}, ras {$this->ras}.";
    }
}

// Uji coba
$cat1 = new Cat("Miko", "Putih", "Anggora");
echo $cat1->Meow();
?>
