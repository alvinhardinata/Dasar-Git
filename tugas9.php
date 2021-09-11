<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menghitung Jam Kerja</h1>
    <form action = "tgas9.php" method = "POST">
        <table>
            <tr>
                <td>Jumlah Jam Kerja</td>
                <td>:</td>
                <td><input type="text" name="jam" required></td> 
</tr>

<tr>
                <td>Golongan Kerja</td>
                <td>:</td>
                <td>
    <input type="radio" name="golongan" value="A" checked>A
    <input type="radio" name="golongan" value="B" checked>B
    <input type="radio" name="golongan" value="C" checked>C
    <input type="radio" name="golongan" value="D" checked>D
</td>
</tr>

<tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="kirim" value="kirim"></td>
</tr>
</table>
</form>
</body>
</html>