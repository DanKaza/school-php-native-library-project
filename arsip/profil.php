<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/grade4.css">
	<link rel="stylesheet" type="text/css" href="css/nav4.css">
    <link rel="stylesheet" type="text/css" href="css/body3.css">
</head>
<body>
	<header class="grad-linear">
		<h2>DATA PUSAT STATISTIK KAB. KARAWANG</h2>
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
    <img src="img/Tutwuri Handayani.png" width="100px" height="100px" class="img1">
    <br>
    <div class="card border-radius">
        <div class="card border-radius">
            <div class="card border-radius">
            <img src="img/IMG_1.jpg" class="card ">
            <div class="label">Resto</div>
            </div>

    </div>
</div>
    
</section>
<aside>
    <h3>LOGIN</h3>
    <div class="kotak_login">
        <p class="tulisan_login"><img src=""></p>
        <form action="cek_login.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username .." required="required">
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password .." required="required">
            <input type="submit" class="tombol_login" value="LOGIN"><p>
            <a href="register.php">Register</a>
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