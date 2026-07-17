<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/body4.css">
</head>
<aside>
<body>
<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select*from user where id_user='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
?>
    <div class="kotak_login">
    <center><img src="img/user.png"></center>
    <h2><center>Update Data Petugas</center></h2>
        <p class="tulisan_login"><img src=""></p>
        <form action="" method="post" enctype="multipart/form-data">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form_login" value="<?php echo $data['nama_lengkap']; ?>">
            <label>Username</label>
            <input type="text" name="username" class="form_login" value="<?php echo $data['username']; ?>">
            <label>Password</label>
            <input type="password" name="password" class="form_login" value="<?php echo $data['password']; ?>">

        <label for="level" class="form_login">Level <?php echo $data['level']; ?> </label>
        <select name="level" id="<?php echo $data['level'];?>" class="form_login">
            <?php
            // Data statis untuk dropdown list
            $items = ["Pilih Level","admin","petugas"];

            // Loop untuk menampilkan opsi di dropdown
            foreach ($items as $item) {
                echo "<option value='$item'>$item</option>";
            }
            ?>
        </select>
        <p>
    <input type="submit" value="UPDATE" name="proses" class="tombol_login"></p>
    <a href="tb_user.php"><input type="button" class="tombol_login" value="CANCEL"></a>
    </form>

<?php
    include "koneksi.php";
if(isset($_POST['proses'])){
mysqli_query($koneksi,"update user set
    nama_lengkap    ='$_POST[nama_lengkap]',
    username        ='$_POST[username]',
    password        ='$_POST[password]',
    level           ='$_POST[level]'
    where id_user   ='$_GET[kode]'");
    echo "Data User telah diubah";
    echo "<meta http-equiv=refresh content=1;url='tb_user.php'>";
}
?>
    </div>
    </p>
</body>
</aside>
</html>