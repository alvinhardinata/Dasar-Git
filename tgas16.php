<?php
$nama = @$_POST ['nama'];
$usia = @$_POST ['usia'];
$vaksin = @$_POST['vaksin'];



if($usia >= 12 && $usia <= 50 && $vaksin == "ya"){
    $pesan = "Silahkan melanjutkan dan selamat berbelanja";
}elseif($usia <=17 && $usia <=50 && $vaksin=="tidak"){
    $pesan = "Silahkan masuk dan selamat berbelanja";
}else{
    $pesan = "Maaf untuk melanjutkan, silahkan anda ke situs
    <a href='https://pedulilindungi.id/'> Peduli Lindungi</a>
    untuk mendapatkan kartu vaksin anda terlebih dahulu.";
}

echo "<tr>
    <td>Nama</td>
    <td>: </td>
    <td>$nama</td>
    </tr><br>
    <tr>
    <td>Umur</td>
    <td>: </td>
    <td>$usia tahun</td>
    </tr>";
echo "<br>$pesan ";


?>

