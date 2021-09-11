<?php
echo "1. Output Array Dengan Menggunakan Perintah PRINT_R() <br>";
$array = [];
$array []= 'Indonesia';
$array []= 'Malaysia';
$array []= 'Singapura';
$array []= 'Brunei Darussalam';
$array []= 'Filipina';
echo '<pre>';
print_r($array);

echo "<br> 2. Output Array Assosiatif";
$negara = array(
    'Indonesia' => 'jakarta',
    'Malaysia' => 'Kuala Lumpur',
    'Singapura' => 'Singapura',
    'Thailand' => 'Bangkok',
    'Filipina' => 'Manila');
?>
<ul>
<?php foreach ($negara as $key => $value): ?>
<li> Ibukota <?= $key ?> adalah <?= $value ?></li>
<?php endforeach ?>
</ul>