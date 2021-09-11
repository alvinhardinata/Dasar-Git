<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Nilai</title>
    <link rel="stylesheet" type="text/css" href="tugas19.css">
</head>
<body>
    <br>
    <center>
   <h4><b> Form Cetak Nilai Siswa <br>
    SMK ASSALAM BANDUNG <br>
    Tahun 2021/2022</h4> 
    <br>
    
<form action="tgas19.php" method="GET">
    <table border=3>
        <tr><td colspan=3>
    
        <h4><center> <b>Nama : </b>
       <input type="text" name="nama" required> <br>
        <b>Nis &nbsp &nbsp &nbsp: </b> 
        <input type="text" name="nis" required>
        </td></tr></center></h4><img src="aing.jpeg" width="7%">
        <tr>
            <th>No</th>
            <th>Mata Pelajaran</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <td>1</td><td>Pendidikan Agama Islam</td><td><input type="text" name="pai" size = '1' required></td>
        </tr>
        <tr>
            <td>2</td><td>PPKN</td><td><input type="text" name="ppkn" size = '1'></td>
        </tr>
        <tr>
            <td>3</td><td>Bahasa Indonesia</td><td><input type="text" name="indo" size = '1'></td>
        </tr>
        <tr>
            <td>4</td><td>Matematika</td><td><input type="text" name="mtk"size = '1'></td>
        </tr>
        <tr>
            <td>5</td><td>Bahasa Inggris</td><td><input type="text" name="inggris" size = '1'></td>
        </tr>
        <tr>
            <td>6</td><td>Produk Kreatif dan kewirausahaan</td><td><input type="text" name="kwu" size = '1'></td>
        </tr>
        <tr>
            <td>7</td><td>Alquran</td><td><input type="text" name="alquran" size = '1'></td>
        </tr>
        <tr>
            <td>8</td><td>Bimbingan Konseling</td><td><input type="text" name="bk" size = '1'></td>
        </tr>
        <tr>
            <td>9</td><td>Produktif RPL</td><td><input type="text" name="rpl" size = '1'></td>
        </tr>
        <tr>
            <td>10</td><td>Produktif TJK</td><td><input type="text" name="tkj" size = '1'></td>
        </tr>


    </table>
           <center><input type="submit" name="submit" required></center>
</form>
    </center>
        </b>

</body>
</html>