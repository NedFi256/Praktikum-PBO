<?php
// Superclass
class Vehicle {
    protected $brand;
    protected $year;

    public function __construct($brand, $year) {
        $this->brand = $brand;
        $this->year = $year;
    }

    public function getInfo() {
        return "Kendaraan merk {$this->brand}, tahun {$this->year}.";
    }
}

// Subclass Motorcycle
class Motorcycle extends Vehicle {
    protected $type; // contoh: Sport, Moped

    public function __construct($brand, $year, $type) {
        parent::__construct($brand, $year);
        $this->type = $type;
    }

    // Override method dari Vehicle
    public function getInfo() {
        return "Motor {$this->brand} tipe {$this->type}, tahun {$this->year}.";
    }
}

// Subclass Car
class Car extends Vehicle {
    protected $doors;

    public function __construct($brand, $year, $doors) {
        parent::__construct($brand, $year);
        $this->doors = $doors;
    }

    // Override method dari Vehicle
    public function getInfo() {
        return "Mobil {$this->brand}, tahun {$this->year}, memiliki {$this->doors} pintu.";
    }
}

// =====================
// Membuat dua objek
// =====================
$car = new Car("Toyota", 2022, 4);
$motorcycle = new Motorcycle("Yamaha", 2023, "Sport");

// =====================
// Menampilkan informasi kedua objek
// =====================
echo $car->getInfo() . "<br>";
echo $motorcycle->getInfo();
?>
