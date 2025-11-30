<?php
// File index.php - Menampilkan output Komposisi dan Aggregasi

// Import file komposisi dan aggregasi
require_once 'komposisi.php';
require_once 'aggregasi.php';

// ============== KOMPOSISI ==============
$pengelola = new Pengelola();

// Data 9 Fakultas + Gedung Pasca di UIN
$pengelola->setPengelola(new Gedung(
    "Sains & Teknologi",
    "Ahmad Firdaus",
    "Gresik, jawa timur",
    "082252530925"
));

$pengelola->setPengelola(new Gedung(
    "Ushuluddin & Filsafat",
    "Sultan",
    "Samata Gowa",
    "081354722315"
));

$pengelola->setPengelola(new Gedung(
    "Ekonomi & Bisnis Islam",
    "Marwa",
    "Bulu kumbah",
    "082347031374"
));

$pengelola->setPengelola(new Gedung(
    "Syariah & Hukum",
    "Arsad",
    "Bulu Kumbah",
    "081914998619"
));

$pengelola->setPengelola(new Gedung(
    "Tarbiyah & Keguruan",
    "Agus",
    "Makasar",
    "085796587794"
));

$pengelola->setPengelola(new Gedung(
    "Adab & Humaniora",
    "Adel",
    "Maros",
    "082331576268"
));

$pengelola->setPengelola(new Gedung(
    "Dakwah & Komunikasi",
    "Sharul",
    "Samata",
    "085696360039"
));

$pengelola->setPengelola(new Gedung(
    "Kedokteran & Ilmu Kesehatan",
    "Nurul",
    "Pinderang",
    "087562490234"
));

$pengelola->setPengelola(new Gedung(
    "Gedung Pascasarjana",
    "Ahmad",
    "samata",
    "087892564609"
));

// ============== AGGREGASI ==============
$jenisRuang = new JenisRuang();

// Data 11 ruangan
$jenisRuang->tambahDetail(new DetailRuang(
    "Maksimal 20",
    "Total 5",
    "Total 20",
    "Ruang Seminar",
    "40 Meter",
    "4"
));

$jenisRuang->tambahDetail(new DetailRuang(
    "Maksimal 30",
    "Total 8",
    "Total 15",
    "Ruang Jurusan",
    "50 Meter",
    "4"
));

$jenisRuang->tambahDetail(new DetailRuang(
    "Maksimal 45",
    "Total 12",
    "Total 45",
    "Ruang 401 - TI/SI",
    "75 Meter",
    "4"
));

$jenisRuang->tambahDetail(new DetailRuang(
    "Maksimal 40",
    "Total 10",
    "Total 40",
    "Ruang 402 - TI/SI",
    "70 Meter",
    "4"
));

$jenisRuang->tambahDetail(new DetailRuang(
    "Maksimal 45",
    "Total 12",
    "Total 45",
    "Ruang 403 - TI/SI",
    "75 Meter",
    "4"
));

$jenisRuang->tambahDetail(new DetailRuang(
    "Maksimal 45",
    "Total 12",
    "Total 45",
    "Ruang 404 - TI/SI",
    "75 Meter",
    "4"
));

$jenisRuang->tambahDetail(new DetailRuang(
    "Maksimal 45",
    "Total 12",
    "Total 45",
    "Ruang 405 - TI/SI",
    "75 Meter",
    "4"
));

$jenisRuang->tambahDetail(new DetailRuang(
   "Maksimal 45",
    "Total 12",
    "Total 45",
    "Ruang 406 - TI/SI",
    "75 Meter",
    "4"
));


?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komposisi dan Aggregasi - Laporan 7</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 30px;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        .title-box {
            background: linear-gradient(135deg, #ffeaa7 0%, #fdcb6e 100%);
            padding: 15px 30px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .title-box h2 {
            font-style: italic;
            color: #2d3436;
            font-size: 24px;
        }
        
        .info-header {
            background: linear-gradient(135deg, #a29bfe 0%, #6c5ce7 100%);
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            border-radius: 8px 8px 0 0;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        table thead {
            background: linear-gradient(135deg, #b2bec3 0%, #636e72 100%);
            color: white;
        }
        
        table th {
            padding: 15px;
            text-align: center;
            font-weight: bold;
            border: 1px solid #ddd;
        }
        
        table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        
        table td:first-child {
            text-align: center;
            font-weight: bold;
            background: #f8f9fa;
        }
        
        table tbody tr:nth-child(even) {
            background: #f8f9fa;
        }
        
        table tbody tr:hover {
            background: #e8f4f8;
            transition: all 0.3s ease;
        }
        
        .nomor-terkait {
            text-align: center !important;
        }
        
        @media print {
            body {
                background: white;
                padding: 0;
            }
            
            .card {
                box-shadow: none;
                page-break-inside: avoid;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- KOMPOSISI -->
        <div class="card">
            <div class="title-box">
                <h2>Ini Adalah Komposisi</h2>
            </div>
            
            <div class="info-header">Pusat Informasi</div>
            
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Gedung</th>
                        <th>Nama Pengelola</th>
                        <th>Alamat</th>
                        <th>Nomor Terkait</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach ($pengelola->getPengelola() as $gedung) : 
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $gedung->getNamaGedung() ?></td>
                        <td><?= $gedung->getNamaPengelola() ?></td>
                        <td><?= $gedung->getAlamat() ?></td>
                        <td class="nomor-terkait"><?= $gedung->getNomerHp() ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <!-- AGGREGASI -->
        <div class="card">
            <div class="title-box">
                <h2>Ini Adalah Aggregasi</h2>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kapasitas</th>
                        <th>Jumlah Meja</th>
                        <th>Jumlah Kursi</th>
                        <th>Ruangan</th>
                        <th>Luas Ruangan</th>
                        <th>Lantai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach ($jenisRuang->getRuangan() as $ruang) : 
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $ruang->getKapasitas() ?></td>
                        <td><?= $ruang->getJumlahMeja() ?></td>
                        <td><?= $ruang->getJumlahKursi() ?></td>
                        <td><?= $ruang->getNamaRuangan() ?></td>
                        <td><?= $ruang->getLuasRuangan() ?></td>
                        <td><?= $ruang->getNomerLantai() ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>