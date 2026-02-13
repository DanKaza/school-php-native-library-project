<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana PHP</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        Angka 1: <input type="number" name="angka1" required><br><br>
        Angka 2: <input type="number" name="angka2" required><br><br>
        
        <select name="operator" required>
            <option value="+">Tambah (+)</option>
            <option value="-">Kurang (-)</option>
            <option value="*">Kali (×)</option>
            <option value="/">Bagi (÷)</option>
        </select>
        
        <br><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        $hasil = 0;

        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $hasil = "Error: tidak bisa dibagi 0!";
                }
                break;
        }

        echo "<h3>Hasil: $angka1 $operator $angka2 = $hasil</h3>";
    }
    ?>
</body>
</html>
