<?php
$as=3;
$ts=4;
$ls=1/2*$as*$ts;
$ss=6;
$ks=$ss+$ss+$ss;
$sp=10;
$lp=$sp*$sp;
$ps=12;
$kp=$ps*$ps*$ps*$ps;
$ppp=5;
$pl=5;
$lpp=$ppp*$pl;
$kpp=2*$pl+$ppp;
$jl=20;
$ll=3.14*$jl*$jl;
$kl=2*3.14*$jl;
$bangundatar=array(
    array('- Segitiga <br>','- Luas segitiga <br>','- Rumus luas segitiga yaitu 1/2 alas * tinggi <br>','- Alasnya 3 dan Tingginya 4 <br>','- Jadi luas segitiganya = '.$ls ,' <br>- Keliling segitiga <br>','- Rumus keliling segitiga yaitu s + s + s <br>','- Sisinya 6 <br>','- Jadi keliling segitiga nya = '.$ks),
    array('- Persegi <br>','- Luas Persegi <br>','- Rumus luas Persegi yaitu s * s <br>','- Sisinya 10 <br>','- Jadi luas persegi yaitu = '.$lp,' <br> - Keliling Persegi <br>','- Rumus keliling persegi yaitu 4s','<br> - Sisinya yaitu 12 <br>','- Jadi keliling perseginya yaitu = '.$kp),
    array('- Persegi Panjang <br>','- Luas Persegi Panjang <br>','- Rumus luas Persegi Panjang yaitu Panjang * lebar <br>','- panjangnya 5 dan lebarnya 5 <br>','- Jadi luas persegi panjangnya = '.$lpp,'<br> - Keliling persegi panjang <br>','- Rumus keliling persegi panjang yaitu 2(panjang+lebar)','<br> - Lebarnya 5 dan panjangnya 5','<br> - Jadi kelilingnya yaitu = '.$kpp),
    array('- Lingkaran <br>','- Luas lingkaran <br>','- Rumus luas lingkaran yaitu 3.14 * r2 <br>','- Jari jarinya 20 <br>','- Jadi luas lingkarannya = '.$ll,'<br> - Keliling lingkaran <br>','- Rumus keliling lingkaran yaitu 2 * 3.14 * r','<br> - Jari jarinya 20','<br> - Jadi kelilingnya = '.$kl)
);
?>
<ul>
<?php foreach($bangundatar as $key => $value):?>
<li>Bangun datar <?= $value[0].$value[1].$value[2].$value[3].$value[4].$value[5].$value[6].$value[7].$value[8]?></li>
<?php endforeach?>
</ul>