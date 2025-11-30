<?php
class Resource {
    public function __construct($name) {
        echo "Membuat objek: $name\n"; // Konstruktor (Inisialisasi)
    }
    public function __destruct() {
        echo "Menutup resource.\n"; // Destruktor (Pembersihan)
    }
}
echo "--- Mulai --- <br>";
$r1 = new Resource("Koneksi DB <br>"); // Output: Membuat objek: Koneksi DB
unset($r1);                         // Output: Menutup resource.
echo "<br> --- Selesai ---\n";
?>