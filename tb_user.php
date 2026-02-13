<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/grade4.css">
	<link rel="stylesheet" type="text/css" href="css/nav5.css">
    <link rel="stylesheet" type="text/css" href="css/body4.css">
    <link rel="stylesheet" type="text/css" href="css/tb1.css">
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
            <center><img src="img/databas.png" width="25%"></center>
        <table class = "tabel1"  align="center">
        <tbody>
            <th>id</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th colspan="3">Pilih Delete / Edit / Home </th>
        </tr></font>
    <?php
    include "koneksi.php";
    $id_user=+1;
    $ambildata=mysqli_query($koneksi, "SELECT*from user");
    while ($tampil=mysqli_fetch_array($ambildata)) {
    echo "
        <tr>
            <td>$id_user</td>
            <td>$tampil[nama_lengkap]</td>
            <td>$tampil[username]</td>
            <td>$tampil[password]</td>
            <td>$tampil[level]</td>
            <td><a href='? kode=$tampil[id_user]'><button>Delete</a></td>
            <td><a href='up_user.php?kode=$tampil[id_user]'><button>Edit </a></td>
            <td><a href='admin.php?kode=$tampil[id_user]'><button>Home </a></td>
        </tr>";
        $id_user++;
        }
        ?>
        </table>
        </tbody>

        <?php
            if(isset($_GET['kode'])){
            mysqli_query($koneksi,"Delete from user where id_user='$_GET[kode]'");
            echo "Data telah terhapus";
            echo "<meta http-equiv=refresh content=1;url='admin.php'>";
            }
        ?>
       
        </p>
        </section>

<aside>
<body>
    
    <div class="kotak_login">
        <p class="tulisan_login"><img src=""></p>
        <form action="" method="post">
             <center><img src="img/user.png"></center>
    <h2>Registrasi Petugas</h2>
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form_login" placeholder="Nama Lengkap .." required="required">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username .." required="required">
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password .." required="required">
            <label class="form_login">Level</label>
            <input type="radio" name="level" value="admin"> Admin 
            <input type="radio" name="level" value="petugas"> Petugas
            
            <p>
    <input type="submit" class="tombol_login" value="S I M P A N" name="proses" ></p>
    <a href="index.php"><input type="button" class="tombol_login" value="C A N C E L"></a>

    <?php 
     $koneksi=mysqli_connect("localhost","root","","db_perpustakaan_cece");
     if(isset($_POST['proses'])){
        mysqli_query($koneksi,"insert into user set
        nama_lengkap='$_POST[nama_lengkap]',
        username='$_POST[username]',
        password='$_POST[password]',
        level='$_POST[level]'");
        
        echo "<b> Data Petugas Baru Telah Tersimpan";
       echo "<meta http-equiv=refresh content=1;url=index.php>";
     }
    ?>
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
</body>
</aside>

    </main>
<footer class="grad-linear">
	<h2>Jl. Raya Kosambi - Karawang Desa Duren Kec. Klari Kabupaten Karawang</h2>
</footer>

</body>
</html>