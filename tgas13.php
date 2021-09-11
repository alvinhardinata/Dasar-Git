<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajihan</title>
</head>
<body>

    <tr>
        <th><h2><i>Gaji Pokok</i></h2></th>
    </tr>

    <?php


    if(isset($_POST['namap'])){
        $namap = $_POST['namap'];
        echo "<tr><tr>
        <td>Nama Pekerja </td>
        <td>:</td>
        <td>$namap</td>
        </tr><tr>";
    }

    if(isset($_POST['jenis'])){
        $jenis = $_POST['jenis'];
        echo "<tr>
        <td><br>Jenis Kelamin </td>
        <td> : </td>
        <td>$jenis</td>
        </tr>";
    }

    if(isset($_POST['sekola'])){
        $sekola = $_POST['sekola'];
        echo "<tr>
        <td><br>Pendidikan Terakhir</td>
        <td>: </td>
        <td>$sekola</td>
        </tr>";
    }

    if(isset($_POST['jabatan'])){
        $jabatan = $_POST['jabatan'];
        echo "<tr>
        <td><br>Jabatan</td>
        <td>:</td>
        <td>$jabatan</td><br>
        </tr>";
    }
    if(isset($_POST['lembur'])){
        $lembur = $_POST['lembur'];
        echo "<tr>
        <td>Lembur</td>
        <td>:</td>
        <td>$lembur</td>
        </tr><br>";
    }

    switch($jabatan){
        case 'direktur';
        $gaji = 10000000;
        $tambah = $lembur * 25000;
        $total = $gaji + $tambah;
        break;
        case 'manager';
        $gaji = 7500000;
        $tambah = $lembur * 25000;
        $total = $gaji + $tambah;
        break;
        case 'karyawan';
        $gaji = 5000000;
        $tambah = $lembur * 25000;
        $total = $gaji + $tambah;
        break;
        case 'ob';
        $gaji = 2500000;
        $tambah = $lembur * 25000;
        $total = $gaji + $tambah;
        break;
    }

    if(isset($_POST['jabatan'])){
        echo "<tr>
        <td>Gaji</td>
        <td>:</td>
        <td>$gaji</td>
        </tr><br>";
    }
?>

    <tr>
        <th><h2><i>Tunjangan</i></h2></th>
    </tr>

<?php
 switch($sekola){

    case 'Sd':
    $tunjangan = 200000;
    break;
    case 'smp':
    $tunjangan = 500000;
    break;
    case 'sma':
    $tunjangan = 1000000;
    break;
    case 's1':
    $tunjangan = 1500000;
    break;
}

if(isset($_POST['sekola'])){
    echo "<tr>
    <td>Tunjangan Pendidikan</td>
    <td>:</td>
    <td>$tunjangan</td>
    </tr><br>";
}

if(isset($_POST['lembur'])){
    $ttl=25000;
    $l=$lembur*$ttl;
    echo "<tr>
    <td>Vakasi Lembur</td>
    <td>:</td>
    <td>$l</td>
    </tr><br>";
}

$tl=$gaji+$l;
echo "<h3><b><i>Total Gaji : $tl</i></b></h3>";

?>
</body>
</html> 