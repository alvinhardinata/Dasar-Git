<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukses</title>
</head>
<body>
<?php
$tanggal=$_POST['tanggal'];
$nama=$_POST['nama'];
$identitas=$_POST['identitas'];
$tipe=$_POST['tipe'];
$durasi=$_POST['durasi'];
$Superior=650000;
$Deluxe=900000;
$JS=1300000;
$diskon;
$total;
?>

<table width="500" border="5" cellpadding="0" cellspacing="0" align="center">
<tr>
<td><?php echo '&nbsp Tanggal Booking';?></td>
<td><?php echo '&nbsp :';?></td>
<td><?php echo '&nbsp'.$tanggal;?></td>
</tr>

<tr>
<td><?php echo '&nbsp Nama Costumer';?></td>
<td><?php echo '&nbsp :';?></td>
<td><?php echo '&nbsp'.$nama;?></td>
</tr>

<tr>
<td><?php echo '&nbsp No Identitas';?></td>
<td><?php echo '&nbsp :';?></td>
<td><?php echo '&nbsp'.$identitas;?></td>
</tr>

<tr>
<td><?php echo '&nbsp Tipe Kamar';?></td>
<td><?php echo '&nbsp :';?></td>
<td><?php echo '&nbsp'.$tipe;?></td>
</tr>

<tr>
<td><?php echo '&nbsp Durasi Penginapan';?></td>
<td><?php echo '&nbsp :';?></td>
<td><?php echo '&nbsp'.$durasi;?></td>
</tr>

<tr>
<td><?php echo '&nbsp Diskon';?></td>
<td><?php echo '&nbsp :';?></td>
<td>

<?php
if($tipe){
    if($durasi == ""){
        echo "Durasi Belom Diisi";
    } else if($tipe == "Superior"){
        $hasil=$Superior*$durasi;
        $hasil;
    } else if($tipe == "Deluxe"){
        $hasil=$Deluxe*$durasi;
        $hasil;
    } else {
        $hasil=$JS*$durasi;
        $hasil;
    }

    if($hasil > 2000000){
        $diskon=(20/100)*$hasil;
        $total=$hasil-$diskon;
        echo "&nbspPotongan diskon 20%";
    } else if ($hasil > 1500000){
        $diskon=(10/100)*$hasil;
        $total=$hasil-$diskon;
        echo "&nbspPotongan diskon 10%";
    } else {
        echo "&nbspAnda tidak berhak mendapatkan diskon";
    }
}
?>
</td>
</tr>

<tr>
<td><?php echo '&nbsp Total Bayar';?></td>
<td><?php echo '&nbsp :';?></td>
<td>
<?php
if ($tipe){
    if($durasi == ""){
        echo "Durasi belum diisi";
    } else if ($tipe == "1"){
        $hasil=$Superior*$durasi;
        $hasil;
    } else if($tipe == "2"){
        $hasil=$Deluxe*$durasi;
        $hasil;
    } else if($tipe == "3"){
        $hasil=$JS*$durasi;
        $hasil;
    }

    if ($hasil > 2000000){
        $diskon=(20/100)*$hasil;
        $total=$hasil-$diskon;
        echo "&nbsp".$total;
    } else if($hasil > 1500000){
        $diskon=(10/100)*$hasil;
        $total=$hasil-$diskon;
        echo "&nbsp".$total;
    } else {
        echo "&nbsp".$hasil;
    }
}
?>
</td>
</tr>
</table>
</body>
</html>
