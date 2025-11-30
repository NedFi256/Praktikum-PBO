<?php

require_once 'makanan.php';
require_once 'produk.php';


$admin = 'Dzulhijjah Ikbal005'; 
$lokasi = 'Gudang E - Rak 19'; 
$tanggal = '14 Januari 2025'; 
$kode = 'Jan-14'; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Barang - PBO</title>
    
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #807e80ff; 
            padding: 20px; 
            max-width: 450px; 
            margin: auto;
        }
       
        .card { 
            background-color: #81c4ebff; 
            border: 1px solid #c9c9c9; 
            border-radius: 5px; 
            margin-bottom: 20px; 
            box-shadow: 0 1px 3px rgba(0,0,0,0.05); 
            padding: 1px;
        }
        
        table { 
            width: 100%; 
            border-collapse: collapse; 
            color: #333;
        }
       
        table tr:first-child td {
            background-color: #ae81c4ff !important;
            font-weight: bold; 
            text-align: center;
            border-bottom: 1px solid #c9c9c9 !important;
        }
        td { 
            padding: 8px 15px; 
            border: none; 
            font-size: 14px;
        }
        tr td:first-child { 
            width: 45%; 
        }
        
        p { 
            margin: 10px 0 20px 0; 
            padding: 5px 15px;
            border-left: 4px solid red;
            background-color: #c2ef9bff;
            color: #0b0b0bff;
            font-weight: bold;
        }
        hr {
             border: none;
             border-top: 1px solid #6acdbdff;
             margin: 25px 0;
        }
    </style>
</head>
<body>
    
    <div class="card">
        <?php
        $paket_individu = new PaketPromo($admin, 'Paket Individu', 'Baju, Celana, dan Sepatu', 0, 299900, $kode);
        $paket_individu->infoBarang($lokasi, $tanggal, 'Formal');
        ?>
    </div>
    <?php 
   
    unset($paket_individu); 
    ?>
    
    <div class="card">
        <?php
        $paket_keluarga = new PaketPromo($admin, 'Paket Keluarga', 'Baju Ayah, Baju Ibu, Baju Anak (1 Pria, 1 Wanita)', 10, 349900, $kode);
        $paket_keluarga->infoBarang($lokasi, $tanggal, 'Daily');
        ?>
    </div>
    <?php 
    unset($paket_keluarga); 
    ?>

    <hr>
    
    <div class="card">
        <?php
        $indomie = new ProdukMakanan($admin, $admin, 'Indomie', 20, 50000, $kode);
        $indomie->infoBarang($lokasi, $tanggal, 'Makanan Berat');
        ?>
    </div>
    <?php 
    unset($indomie); 
    ?>

    <div class="card">
        <?php
        $minyak_goreng = new ProdukMakanan($admin, $admin, 'Minyak Goreng', 0, 39600, $kode);
        $minyak_goreng->infoBarang($lokasi, $tanggal, 'Kebutuhan Rumah Tangga');
        ?>
    </div>
    <?php 
    
    unset($minyak_goreng); 
    ?>

</body>
</html>