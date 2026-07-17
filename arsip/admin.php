<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu Navigation</title>
</head>
<link rel="stylesheet" type="text/css" href="css/nav5.css">
<link rel="stylesheet" type="text/css" href="css/grade2.css">
<body>
    <?php
    session_start();
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }
    ?>
    <header class="grad-animated">
    <h2>DATA INFORMASI SISWA TAHUN PELAJARAN 2025/2026</h2>
    </header>
    <br>
	<nav>
    <div class="dropdown">
        <button class="dropbtn grad-conic">Menu</button>
        <div class="dropdown-content">
            <a href="menu_nav.html">Halaman Utama</a>
            <a href="admin.php">Admin</a>
            <a href="tb_user.php">Tabel Data</a>  
        </div>
    </div>
    <div class="dropdown">
    <button class="dropbtn grad-conic">Informasi</button>
        <div class="dropdown-content">
            <a href="latihan_table.html">Data Perusahaan</a>
            <a href="#about">Sejarah Perusahaan</a>
            <a href="#contact">Cabang Perusahaan</a>  
        </div>
    </div>
    <div class="dropdown">
    <button class="dropbtn grad-conic">Layanan</button>
        <div class="dropdown-content">
            <a href="http://localhost/latihan_web/">Home page</a>
            <a href="#about">Sejarah Perusahaan</a>
            <a href="#contact">Cabang Perusahaan</a>  
        </div>
    </div>
    <div class="dropdown">
    <button class="dropbtn grad-conic">
        <div>
        <a href="logout.php">Keluar</button></a>
    </div>
</nav>
<p>
    <section>
    <div class="card border-gradient">
        <div class="card">
            <div class="card border-gradient">
            <img src="img/resto1.jpg" class="grad-linear">
            <div class="label">Resto</div>
            </div>
            <div class="card border-gradient">
            <img src="img/resto2.jpg" class="grad-linear">
            <div class="label">Nuansa Alam</div>
            </div>
            <div class="card border-gradient">
            <img src="img/resto2.jpg" class="grad-linear">
            <div class="label">Nuansa Alam</div>
            </div>
    </div>
    </div>
    </section>
    <aside>
    </aside>
   <br>
<footer class="grad-animated">
    <h3>Jl. Raya Kosambi Desa Duren Klari Karawang</h3>
</footer>
</body>
</html>