<?php
echo "Tugas Analisis";
$bangundatar = [
    'Bangun datar' => [
        'Segitiga',
        'Luas Segitiga' => [
            'Rumus luas segitiganya adalah 1/2 alas * tinggi',
            'Alas = ' .$Alass=12,
            'Tinggi =' .$Tinggi=15,
            'Jadi luas segitiganya adalah = ' .$ls=1/2*$Alass*$Tinggi.'cm'],
            'Keliling segitiga' => [
                'Rumus keliling segitiganya adalah s + s + s',
                'Sisinya = ' .$ss=50,
                'Jadi Keliling segitiganya adalah = ' .$ks=$ss+$ss+$ss.'cm'],
        ],
        'Persegi',
        'Luas Persegi' => [
            'Rumus luas Perseginya adalah s * s',
            'Sisinya = ' .$ser=5,
            'Jadi luas Perseginya adalah = ' .$ler=$ser*$ser.'cm'],
            'Keliling Persegi ' => [
                'Rumus Keliling Perseginya adalah 4s',
                'Sisinya = ' .$err=10,
                'Jadi luas Perseginya adalah = ' .$kerr=$err*$err*$err*$err.'cm'],
            'Persegi Panjang',
            'Luas Persegi Panjang' => [
                'Rumus luas Persegi Panjangnya adalah panjang * lebar',
                'Lebar = ' .$ll=7,
                'panjang = ' .$panjang=9,
                'Jadi luas Persegi Panjangnya adalah = ' .$lll=$panjang*$ll.'cm'],
                'Keliling Persegi Panjang' => [
                    'Rumus Keliling Persegi Panjangnya adalah 2(panjang+lebar)',
                    'panjangnya = ' .$ann=30,
                    'lebarnya = ' .$le=20,
                    'Jadi luas Persegi Panjangnya adalah = ' .$annn=2*$ann+$le.'cm'],
                'Lingkaran',
                'Luas lingkaran' => [
                    'Rumus luas lingkarannya adalah 3.14 * r2',
                    'Jari jarinya ='  .$ja=15,
                    'Jadi luas lingkarannya adalah = ' .$lli=3.14*$ja*$ja.'cm'],
                    'Keliling lingkaran' => [
                        'Rumus keliling lingkarannya adalah 2 * 3.14 * r',
                        'Jari jarinya = ' .$jaa=20,
                        'Jadi keliling lingkarannya adalah = ' .$kllll=2*3.14*$jaa.'cm'],
                    ];
            echo "<pre>",
            print_r($bangundatar);
?>