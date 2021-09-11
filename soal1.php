<?php
 $gaji = "Rp. 2.000.000";
 $pajak = 10/100;
 
 $awal = 2000000;
 $potong = $awal * (10/100);
 $bayar = $awal - $potong;
 echo "Gaji sebelum pajak = $gaji <br>";
 echo "gaji yang dibawa pulang = Rp. $bayar <br>";
 echo "pajak 10%";
?>