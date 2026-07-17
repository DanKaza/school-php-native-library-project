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
    <h2>Registrasi Petugas</h2>
    <div class="kotak_login">
        <p class="tulisan_login"><img src=""></p>
        <form action="" method="post">
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
</html>