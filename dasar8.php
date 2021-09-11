<?php
$perusahaan = [
'nama' => 'Alvin Hardinata Naufal Zaky',
'umur' => '16 Tahun',
'alamat' => 'Kp Bojong Sayang',
'hobby' => [
    'Membaca',
    'Menghitung',
],
'Media Sosial'=>[
    'Instagram' => 'alvinnaufalzaki',
    'Facebook' => 'Alvin Hardinata Naufal Zaky'
]
];

echo "<pre>";
print_r($perusahaan);

echo "<br>";
echo "Program array multidimensi menampilkan satu data <br>";
echo $perusahaan['hobby'][1] ."<br>";
echo $perusahaan['Media Sosial']['Facebook'];
?>