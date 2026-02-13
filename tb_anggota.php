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
		<h2>PERPUSTAKAAN DIGITAL</h2>
	</header>
<nav>
   <marquee>Welcome</marquee>
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
            <th>id Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>No Telp</th>
            
            <th>Tanggal Lahir</th>
            <th></th>
            <th colspan="3">Pilih Delete / Edit / Home </th>
        </tr></font>
    <?php
    include "koneksi.php";
    $id_anggota=+1;
    $ambildata=mysqli_query($koneksi, "SELECT*from anggota");
    while ($tampil=mysqli_fetch_array($ambildata)) {
    echo "
        <tr>
            <td>$id_anggota</td>
            <td>$tampil[nama]</td>
            <td>$tampil[alamat]</td>
            <td>$tampil[kota]</td>
            <td>$tampil[no_telp]</td>
            <td>$tampil[tgl_lahir]</td>
            <td><a href='? kode=$tampil[id_anggota]'><button>Delete</a></td>
            <td><a href='up_user.php?kode=$tampil[id_anggota]'><button>Edit </a></td>
            <td><a href='admin.php?kode=$tampil[id_anggota]'><button>Home </a></td>
        </tr>";
        $id_anggota++;
        }
        ?>
        </table>
        </tbody>

        <?php
            if(isset($_GET['kode'])){
            mysqli_query($koneksi,"Delete from anggota where id_anggota='$_GET[kode]'");
            echo "Data telah terhapus";
            echo "<meta http-equiv=refresh content=1;url='tb_anggota.php'>";
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
    <h2>Registrasi Anggota</h2>
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form_login" placeholder="Nama .." required="required">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form_login" placeholder="Alamat .." required="required">
            <label>Kota</label>
            <input type="kota" name="kota" class="form_login" placeholder="Kota .." required="required">
            <label>No.Telp</label>
            <input type="text" name="no_telp" class="form_login" placeholder="No.Telp .." required="required">
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form_login" placeholder="Tanggal Lahir .." required="required">
            <p>
    <input type="submit" class="tombol_login" value="S I M P A N" name="proses" ></p>
    <a href="index.php"><input type="button" class="tombol_login" value="C A N C E L"></a>

    <?php 
     $koneksi=mysqli_connect("localhost","root","","db_perpustakaan_cece");
     if(isset($_POST['proses'])){
        mysqli_query($koneksi,"insert into anggota set
        nama='$_POST[nama]',
        alamat='$_POST[alamat]',
        kota='$_POST[alamat]',
        no_telp='$_POST[no_telp]',
        tgl_lahir='$_POST[tgl_lahir]'");
        
        echo "<b> Data Anggota Baru Telah Tersimpan";
       echo "<meta http-equiv=refresh content=1;url=tb_anggota.php>";
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