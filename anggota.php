<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/grade2.css">
	<link rel="stylesheet" type="text/css" href="css/nav5.css">
    <link rel="stylesheet" type="text/css" href="css/body4.css">
</head>
<aside>
<body>
    <center><img src="img/user.png"></center>
    <h2>Registrasi Anggota</h2>
    <div class="kotak_login">
        <p class="tulisan_login"><img src=""></p>
        <form action="" method="post">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form_login" placeholder="Nama .." required="required">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form_login" placeholder="Alamat .." required="required">
            <label>Kota</label>
            <input type="kota" name="kota" class="form_login" placeholder="Kota .." required="required">
            <label>No.Telp</label>
            <input type="text" name="no_telp" class="form_login" placeholder="No.Telp .." required="required">
            <label>Kota</label>
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
</html>