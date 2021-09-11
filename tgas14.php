<html>
<head>
<title>Hasil Tugas 14
</title>
</head>
<body>
<h3 align="center"><blink>Hasil Akhir Nilai</blink></h3>
<table align="center" border="2">
<?php
$hari_ini = date("j-F-y");
$nama=$_POST['tnama'];
$jk=$_POST["jeniskelamin"] ;
$jr=$_POST["jurusan"];
$sm=$_POST["semester"];
$mk=$_POST["makul"];
$tugas=$_POST['ttugas'];
$tugas2=$_POST['tugas2'];
$ttugas3=$_POST['ttugas3'];
$uts=$_POST['tuts'];
$uas=$_POST['tuas'];?>
<?php
$na=(0.20*$tugas)+(0.20*$tugas2)+(0.20*$ttugas3)+(0.30*$uts)+(0.50*$uas);
?>

<?php
if ($na <= 40 )
{
$nh = 'E' ;
}
else if ($na <= 50 )
{
$nh = 'D' ;
}

else if ($na <= 70 )
{
$nh = 'C' ;
}
else if ($na <= 80 )
{
$nh = 'B' ;
}
else
{
$nh = 'A' ;
}
?>

<tr>
<th>Tanggal</th>
<th>Nama Mahasiswa</th>
<th>Jenis Kelamin</th>
<th>Jurusan</th>
<th>Semester</th>
<th>Matakuliah</th>
<th>Nilai Angka</th>
<th>Nilai Huruf</th>
</tr>
<tr>
<td align="center"><?php echo($hari_ini); ?></td>
<td align="center"><?php echo$nama;?></td>
<td align="center"><?php echo$jk; ?></td>
<td align="center"><?php echo$jr; ?></td>
<td align="center"><?php echo$sm; ?></td>
<td align="center"><?php echo$mk; ?></td>
<td align="center"><?php echo$na;?></td>
<td align="center"><?php echo$nh;?></td>
</table>
</tr>
<tr>
<a></a></br>
<a></a></br>
<a><center>Bagi Mahasiswa Yang Mendapat Nilai E, Agar Dapat Memperbaiki Nilai Sebelum Tanggal 30 Agustus 2021</center></a>
</body>
</html>