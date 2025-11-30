<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Toko</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 20px;
            margin: 0;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            border-bottom: 3px solid #5a67d8;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-bottom: 25px;
            overflow: hidden;
        }
        .card-header {
            background: #5a67d8;
            color: white;
            padding: 12px 20px;
            font-weight: bold;
            font-size: 1.1em;
        }
        .card-body {
            padding: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table td {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        table td:first-child {
            font-weight: bold;
            color: #555;
            width: 35%;
        }
        .alert {
            background: #fee;
            border: 2px solid #e33;
            padding: 12px;
            margin: 15px 0;
            border-radius: 5px;
            color: #c00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistem Manajemen Toko</h1>

        <?php
        require_once 'makanan.php';
        require_once 'produk.php';

        // Data sesuai ketentuan
        $nama_admin = "AhmadFirdaus002";
        $kode = "Jan-25";
        $lokasi = "Gudang E - Rak 20";
        $tanggal = "25 Januari 2025";

        // Fungsi untuk membuat card wrapper
        function startCard($title) {
            echo '<div class="card">';
            echo '<div class="card-header">' . $title . '</div>';
            echo '<div class="card-body">';
        }

        function endCard() {
            echo '</div></div>';
        }

        // Fungsi untuk cek stok dan tampilkan alert
        function checkStock($obj, $nama, $type = "promo") {
            // Gunakan reflection untuk akses protected property
            $reflection = new ReflectionClass($obj);
            $property = $reflection->getProperty('jumlah_stok');
            $property->setAccessible(true);
            $stok = $property->getValue($obj);
            
            if ($stok <= 0) {
                if ($type == "promo") {
                    echo '<div class="alert"><b>Stok promo ' . $nama . ' habis. Promo dihentikan</b></div>';
                } else {
                    echo '<div class="alert"><b>Stok habis! Menghentikan penjualan ' . $nama . ' dari sistem</b></div>';
                }
            }
        }

        // 1. Paket Individu (stok habis)
        startCard("Paket Individu");
        $paket1 = new Paket_promo("Paket Individu", 0, 299900, $nama_admin, "Baju, Celana, dan Sepatu", "Formal");
        $paket1->kode_produk($kode);
        $paket1->abstrak($lokasi, $tanggal, "Formal");
        checkStock($paket1, "Paket Individu", "promo");
        endCard();

        // 2. Paket Keluarga
        startCard("Paket Keluarga");
        $paket2 = new Paket_promo("Paket Keluarga", 10, 340900, $nama_admin, "Baju Ayah, Baju Ibu, Baju Anak (1 Pria, 1 Wanita)", "Daily");
        $paket2->kode_produk($kode);
        $paket2->abstrak($lokasi, $tanggal, "Daily");
        checkStock($paket2, "Paket Keluarga", "promo");
        endCard();

        // 3. Indomie
        startCard("Indomie");
        $makanan1 = new Makanan("Indomie", 20, 50000, $nama_admin);
        $makanan1->kode_produk($kode);
        $makanan1->abstrak($lokasi, $tanggal, "Makanan Berat");
        checkStock($makanan1, "Indomie", "makanan");
        unset($makanan1);
        endCard();

        // 4. Minyak Goreng (stok habis)
        startCard("Minyak Goreng");
        $makanan2 = new Makanan("Minyak Goreng", 0, 39600, $nama_admin);
        $makanan2->kode_produk($kode);
        $makanan2->abstrak($lokasi, $tanggal, "Kebutuhan Rumah Tangga");
        checkStock($makanan2, "Minyak Goreng", "makanan");
        unset($makanan2);
        endCard();
        ?>
    </div>
</body>
</html>