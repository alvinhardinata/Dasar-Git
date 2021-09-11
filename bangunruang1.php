<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perhitungan Bangun Ruang Lingkaran</title>
</head>
<body>
    <h1>Fungsi perhitungan Luas dan Keliling Lingkaran</h1>
    <form action="" method="post">
        <input type="angka" name="jari">
        <input type="submit" name="submit">
</form>
</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        function luaslingkaran($jari, $phi=3.14) {
            $keliling = ($jari * $phi) * 2;
            return $keliling;
        }
        function keliling($jari, $phi=3.14) {
            $keliling = ($jari * $phi) * 2;
            return $keliling;
        }
        echo"Jari - Jari :";
        echo $_POST['jari'];
        echo"<br>";
        echo"Luas Lingkaran : ";
        echo luaslingkaran($_POST['jari']);
        echo"<br>";
        echo"Luas Keliling :";
        echo keliling($_POST['jari']);
    }
?>