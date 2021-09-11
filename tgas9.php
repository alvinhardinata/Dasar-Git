<?php
echo "<h1>GAJI KARYAWAN</h1>";
if (isset($_POST['jam'])) {
$jam = $_POST ['jam'];
    echo "jam kerja anda : $jam jam<br>";
    $golongan = $_POST['golongan'];
    echo "Golongan Kerja Anda : $golongan<br>";
    $A = 4000;
    $B = 5000;
    $C = 6000;
    $D = 7000;
}
switch ($golongan) {
    case 'A':
    $gaji = $jam*$A;
    echo "Gaji anda adalah Rp.$gaji";
break;
case 'B':
    $gaji = $jam*$B;
    echo "Gaji anda adalah Rp.$gaji";
break;
case 'C':
    $gaji = $jam*$C;
    echo "Gaji anda adalah Rp.$gaji";
break;
case 'D':
    $gaji = $jam*$D;
    echo "Gaji anda adalah Rp.$gaji";
    break;
}
?>