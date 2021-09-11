<?php
for ($z = 10; $z > 0; $z--) {
    for ($z1 = 10; $z1 > $z;$z1--) {
    echo "*";
    }
    echo "<br>";
}
$jumlah = 10;
echo "<br>";
for ($a = 1; $a<=$jumlah; $a++) {
    for ($c= $jumlah; $c>=$a; $c-=1) {
        echo "*";
    }
    echo "<br>";
}
for ($a= 10; $a<=$jumlah; $a++){
    for ($c= $jumlah; $c>=$a; $c-= 1) {
        echo "&nbsp";
    }
    for ($c= 10; $c >$a;$c--) {
        echo "<*>";
    }
    echo "<br/>";
}
$jumlah = 10;
echo "<br>";
for ($a = 1; $a<$jumlah; $a++) {
    for ($b= 1; $b<=$a; $b++) {
        print ('&nbsp');
    }
    for ($c = $jumlah; $c>$a;$c-=1) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
$star = 13;
for ($a = $star; $a>0; $a--) {
    for ($i= 1; $i<=$a; $i++) {
        echo "&nbsp";
    }
    for ($a1= $star; $a1>=$a;$a1--) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
$star = 13;
for ($a = 1; $a<=$star; $a++) {
    for ($i= 1; $i<=$a; $i++) {
        echo "&nbsp";
    }   
    for ($c= $star; $c>=$a;$c-=1) {
        echo "*";
    }
    echo "<br/>";
}
?>