<?php
$bulan = "mei";
$uang = 20000;
$mei = 0.3;
$juni = 0.2;
$juli = 0.1;

if($bulan == "mei"){
    $jml = $uang - ($uang*$mei);
    echo "daftar bulan $bulan diskon 30% <br>" ;
    echo "uang yang harus di bayar adalah $jml";
}elseif($bulan == "juni"){
    $jumlah = $uang - ($uang * $juni);
    echo "daftar bulan $bulan diskon 20% <br>";
    echo "uang yang harus di bayar adalah $jumlah";
}elseif ($bulan == "juli"){
    $total = $uang - ($uang*$juli);
    echo "daftar bulan $bulan diskon 10% <br>";
    echo "uang yang harus di bayar adalah $total";
}else{
    echo "Bulan $bulan ini tidak ada diskon sehingga kamu harus membayar sebesar $uang";
}
?>