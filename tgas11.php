<!DOCTYPE html>
<html lang="en">
<body>
<table border="2" cellpadding="5">
<tr>
<?php
$nis=$_POST['NIS'];
$Nama=$_POST['Nama'];
$jurusan=$_POST['jurusan'];
$Tempat=$_POST['Tempat'];
$Tgl=$_POST['Tgl'];
$Bln=$_POST['Bln'];
$Thn=$_POST['Thn'];
$JK=$_POST['JK'];
$alamat=$_POST['alamat']; 
echo "<td> NIS      : $nis </td>";
echo "<td>Nama     : $Nama</td>";
echo "<td>Jurusan  : $jurusan</td>";
echo "<td>Tempat dan Tanggal Lahir : $Tempat, $Tgl/$Bln/$Thn</td>";
echo "<td>Jenis Kelamin : $JK</td>";
echo "<td>Alamat : $alamat</td>";
?>
</tr>
</table>
</body>
</html>