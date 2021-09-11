<?php
$nasi = 20000;
$areng = 13000;
$akar = 15000;
$natih = 5000;
$porsi = 2;
$porsii = 1;
$d = 0.2;

echo "Menu Di Restoran";
echo "* Makanan";
echo "- Nasi Goreng : $nasi <br>";
echo "- Ayam Goreng : $areng <br>";
echo "- Ayam Bakar : $akar <br>";
echo "- Nasi Putih : $natih <br>";

$jeruk = 8000;
$alpukat = 10000;
$air = 7000;

echo "* Minuman <br>";
echo "- Jus Jeruk : $jeruk <br>";
echo "- Jus ALpukat : $alpukat <br>";
echo "- Air Mineral : $air <br>";
echo "<br> <br>";
echo "Anda Memesan: ";
$hasilporsi = $nasi*$porsi;
$hasilporsii = $alpukat*$porsi;
echo "- $natih $porsi: $hasilporsi <br>";
echo "- $alpukat $porsii: $hasilporsii <br> <br>";
$bayar1 = $hasilporsi + $hasilporsii;
if($bayar1 >= 150000){
    $bayar=$bayar1-($bayar1 * $d);
    echo "Transaksi Anda Sebesar $bayar1 <br>";
    echo "Karena Anda Mempunyai Transaksi Sebesar $bayar1 Anda Mendapatkan Diskon 20% <br>";
    echo "Jadi Anda Cukup Membayar Sebesar = $bayar <hr>";
}else if($bayar1 <= 150000){
    echo "Transaksi Anda Sebesar $bayar1 <br>";
    echo "Karena Anda Mempunyai Transaksi Sebesar $bayar1 Anda Tidak Mendapatkan Diskon. <br>";
    echo "Jadi Anda Membayar Sebesar $bayar1 <hr>";
}
?>