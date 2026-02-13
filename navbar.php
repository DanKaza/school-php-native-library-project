<?php
// Simpan data menu di array agar mudah diubah
$menu = [
    "Beranda" => "index.php",
    "Profil" => "profil.php",
    "Galeri" => "galeri.php",
    "Kontak" => "kontak.php"
];

// Mendapatkan halaman aktif dari URL
$halaman_aktif = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigasi PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #2c3e50;
            overflow: hidden;
            border-radius: 10px;
        }
        .navbar a {
            float: left;
            display: block;
            color: #ecf0f1;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            transition: 0.3s;
        }
        .navbar a:hover {
            background-color: #3498db;
            color: white;
        }
        .navbar a.active {
            background-color: #1abc9c;
            color: white;
        }
    </style>
</head>
<body>

<div class="navbar">
    <?php foreach ($menu as $nama => $link): ?>
        <a href="<?= $link; ?>" class="<?= ($halaman_aktif == $link) ? 'active' : ''; ?>">
            <?= $nama; ?>
        </a>
    <?php endforeach; ?>
</div>

<h2>Selamat Datang di Halaman <?= ucfirst(pathinfo($halaman_aktif, PATHINFO_FILENAME)); ?>!</h2>

</body>
</html>
