<?php
// Daftar menu utama dan submenu
$menu = [
    "Beranda" => "index.php",
    "Profil" => [
        "Profil Sekolah" => "profil.php",
        "Visi & Misi" => "visi_misi.php",
        "Struktur Organisasi" => "struktur.php"
    ],
    "Data" => [
        "Data Siswa" => "siswa.php",
        "Data Guru" => "guru.php",
        "Data Kelas" => "kelas.php"
    ],
    "Kontak" => "kontak.php"
];

// Halaman aktif (untuk highlight tombol)
$halaman_aktif = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigasi dengan Dropdown</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .navbar {
            background-color: #2c3e50;
            overflow: hidden;
            border-radius: 8px;
        }
        .navbar a, .dropbtn {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            background: none;
            border: none;
            cursor: pointer;
        }
        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: #3498db;
        }
        .active {
            background-color: #1abc9c;
        }
        .dropdown {
            float: left;
            overflow: hidden;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #34495e;
            min-width: 180px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            float: none;
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover {
            background-color: #1abc9c;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>

<div class="navbar">
    <?php foreach ($menu as $nama => $item): ?>
        <?php if (is_array($item)): ?>
            <div class="dropdown">
                <button class="dropbtn"><?= $nama; ?> ▼</button>
                <div class="dropdown-content">
                    <?php foreach ($item as $subNama => $link): ?>
                        <a href="<?= $link; ?>" class="<?= ($halaman_aktif == $link) ? 'active' : ''; ?>">
                            <?= $subNama; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php else: ?>
            <a href="<?= $item; ?>" class="<?= ($halaman_aktif == $item) ? 'active' : ''; ?>">
                <?= $nama; ?>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<h2 style="padding: 20px;">Selamat Datang di Halaman 
    <u><?= ucfirst(pathinfo($halaman_aktif, PATHINFO_FILENAME)); ?></u>!
</h2>

</body>
</html>
