<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/grade4.css">
	<link rel="stylesheet" type="text/css" href="css/nav5.css">
    <link rel="stylesheet" type="text/css" href="css/body4.css">
</head>
<body>
	<header class="grad-linear">
		<h2>PERPUSTAKAAN DIGITAL SMK TEXAR Karawang</h2>
	</header>
<nav>
   <marquee>Selamat Datang Website SMK TEXAR Karawang</marquee>
</nav>
<nav class="grad-linear1">
    <div class="dropdown">
        <button class="dropbtn">Menu</button>
        <div class="dropdown-content">
            <a href="menu_nav.html">Halaman Utama</a>
            <a href="hal_admin.php">Admin</a>
            <a href="tabel.html">Tabel Data</a>  
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Profil Sekolah</button>
        <div class="dropdown-content">
            <a href="menu_nav.html">Halaman Utama</a>
            <a href="hal_admin.php">Admin</a>
            <a href="profil.php">Profil</a>  
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Pendidikan</button>
        <div class="dropdown-content">
            <a href="menu_nav.html">Halaman Utama</a>
            <a href="hal_admin.php">Admin</a>
            <a href="tabel.html">Tabel Data</a>  
        </div>
    </div>
    </div>
</nav>
<main>
<section>
    <center>
    <img src="img/Tutwuri Handayani.png" width="100px" height="100px">
    <h3>
    SELAMAT DATANG<br>
    SISWA/SISWI BARU TAHUN PELAJARAN 2025/2026<br>
    SMK TEXAR KARAWANG<br><h3></center>
    <br>
    <h4>Pada Tahun 2010 SMK TEXAR berdiri dan menampung siswa kurang lebih 600 siswa. Perjalanan Menuju Kesuksesan Sekolah Menengah Kejuruan (SMK TEXAR) banyak rintangan </h4>
</section>
<aside>
    <center><img src="img/user.png"></center>
    <div class="kotak_login">
        <p class="tulisan_login"><img src=""></p>
        <form action="cek_login.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username .." required="required">
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password .." required="required">
            <input type="submit" class="tombol_login" value="LOGIN"><p>
            <center><a href="register.php">Register</a></center>
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>
    
        </form>
    </div>
        </p>
</aside>
</main>
<footer class="grad-linear">
	<h2>Jl. Raya Kosambi - Karawang Desa Duren Kec. Klari Kabupaten Karawang</h2>
</footer>

</body>
</html>