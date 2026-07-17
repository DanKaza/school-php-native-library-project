<!DOCTYPE html>
<html>
<head>
    <title>Pengurangan PHP</title>
</head>
<body>
    <form method="post">
        Angka 1: <input type="number" name="angka1"><br><br>
        Angka 2: <input type="number" name="angka2"><br><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil = $angka1 - $angka2;

        echo "<h3>Hasil: $angka1 - $angka2 = $hasil</h3>";
    }
    ?>
</body>
</html>
