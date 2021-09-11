<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proses</title>
    <link rel="stylesheet" type="text/css" href="tugas19.css">
</head>
<body>
    <fieldset>
    <center>
    <h4>Form Cetak Nilai Siswa<br>SMK ASSALAAM BANDUNG<br>Tahun 2021/2022</h4>
    <table border="3">
        <td colspan=3>
        <tr>
            <th>
    <?php
    if(isset($_GET['submit'])){
    $nama=$_GET['nama'];
    $nis=$_GET['nis'];
    $pai=$_GET['pai'];
    $ppkn=$_GET['ppkn'];
    $indo=$_GET['indo'];
    $mtk=$_GET['mtk'];
    $inggris=$_GET['inggris'];
    $kwu=$_GET['kwu'];
    $alquran=$_GET['alquran'];
    $bk=$_GET['bk'];
    $rpl=$_GET['rpl'];
    $tkj=$_GET['tkj'];
    
    $nilai=[
        'Pendidikan Agama Islam' => $pai,
        'PPKN' => $ppkn,
        'Bahasa Indonesia' => $indo,
        'Matematika' => $mtk,
        'Bahasa Inggris' => $inggris,
        'Produk Kreatif dan Kewirausahaan' => $kwu,
        'Al Quran' => $alquran,
        'Bimbingan Konseling' => $bk,
        'Produktif RPL' => $rpl,
        'Produktif TKJ' => $tkj,
    ];
    echo "<table width='500' border='0' cellpadding='5'>
    <tr>
    <tr height='40'>
    <td with='200' valign='center'>Nama</td>
    <td width='10' valign='center'>:</td>
    <td>$nama</td>
    </tr><br>";
    echo "<tr height='30'>
    <td with='200' valign='center'>Nis</td>
    <td width='10' valign='center'>:</td>
    <td>$nis</td>
    </tr>";
    echo "<table width='500' border='5' cellpadding='10'><br><br>
    <tr height='30'>
    <td width='10'><center>No</center></td>
    <td width='250'><center>Mata Pelajaran</center></td>
    <td width='50'><center>Grade</center></td>
    </tr>";

    $x=1;
    $grade="";
    $total=0;

    foreach($nilai as $key => $value){
        if ($value >= 85 && $value <= 100){
            $grade="A";
            @$total=$total+4;
        } else if ($value >= 70 && $value <= 85){
            $grade="B";
            @$total=$total+3;
        } else if ($value >= 60 && $value <= 70){
            $grade="C";
            @$total=$total+2;
        } else if ($value >= 40 && $value <= 60){
            $grade="D";
            @$total=$total+1;
        } else if ($value >= 0 && $value <= 40){
            $grade="E";
            @$total=$total+0;
        }
        echo "<tr>
        <center><tr >
        <td width='10' valign='center'><center>$x</center></td>
        <td width='10' valign='center'><center>$key</center></td>
        <td width='50' valign='center'><center>$grade</center></td>
        </tr>";
        $x++;}

        $jumlah = $total /10;
        echo "<tr>
        <td colspan='3' height='55'><center>Nilai Rata Rata Anda Adalah $jumlah</center></td>
        </tr>";
        echo "</table>";
        
        echo "</table>";
    }
    ?>
    </th>
    </tr>
    </table>
    </center>
    </fieldset>
</body>
</html>