<?php
echo "<table border='0' align='center'>";
if(isset($_POST['submit'])){
$nama = $_POST['nama'];
$tinggi = $_POST['tinggi'];
$berat = $_POST['berat'];
$jk = $_POST['jk'];

switch($jk){
    case 'Laki-laki';
    $ideal = ($tinggi - 100) - (0.1*($tinggi-100));
    break;
    case 'Perempuan';
    $ideal = ($tinggi - 100) - (0.15*($tinggi-100));
    break;
}

if($berat == $ideal){
    $hasil = "Berat Badan Anda Ideal";
}else{
    $hasil = "Berat Badan Anda Tidak Ideal<br>";
}

echo "<tr>
      <td>Nama</td>
      <td> : </td>
      <td>$nama</td>
      </tr>";

echo "<tr>
      <td>Jenis Kelamin</td>
      <td> : </td>
      <td>$jk</td>
      </tr>";
echo "<tr>
      <td>Tinggi Badan</td>
      <td> : </td>
      <td>$tinggi</td>
      </tr>";
echo "<tr>
      <td>Berat Badan</td>
      <td> : </td>
      <td>$berat</td>
      </tr>";

echo "<tr>
      <td>Hasil</td>
      <td>:</td>
      <td>$hasil</td>
      </tr>";
echo "<tr>
      <td>Berat Badan Ideal Anda Adalah</td>
      <td>$ideal Kg</td>
      </tr>";
}

?>
