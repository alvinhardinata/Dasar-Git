<?php
$employee =[
'Jurusan Teknik Informatika' => 'ada di index 0',
'Jurusan Sistem Informasi' => 'ada di index 1',
'Jurusan Teknik Komputer' => 'ada di index 2',
'Jurusan Manajemen Informatika' => 'ada di index 3'
];


foreach ($employee as $key => $value) {
    echo $key. ' - ' . $value;
    echo '<br>';
}
?>