<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

        <form action="" method="POST">
            <fieldset>
                <table> 
                    <tr>
                    <td>Nama : </td>
                    <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td> Jenis Kelamin : </td>
                        <td><input type="radio" name="jk" value="laki-laki">Laki laki
                            <input type="radio" name="jk" value="perempuan">Perempuan
                    </tr>
                    <tr>
                    <td> Tanggal Lahir : </td>
                    <td><input type="date" name="date"></td>
                    </td>
                    <tr>
                        <td>Agama :</td>
                    <td>
                        <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kristen">Kristen</option>
                        </select>
                    </td>
                    </tr>
                    <tr>
                    <td>Alamat :</td>
                    <td>
                        <textarea name="alamat" cols="30" rows="10"></textarea>
                    </td>
                    </tr>
                    <tr>
                    <td>Hobi : </td>
                    <td>
                        <input type="checkbox" name="hobi[]" value="bermain">Sunmori</input>
                        <input type="checkbox" name="hobi[]" value="bermain">Night Ride</input>
                        <input type="checkbox" name="hobi[]" value="bermain">Balap</input>
                        <input type="checkbox" name="hobi[]" value="bermain">Main Game</input>
                        <input type="checkbox" name="hobi[]" value="bermain">Berenang</input>
                        <input type="checkbox" name="hobi[]" value="bermain">Lari</input>
                    </td>
                    </tr>
                    <tr>
                        <td>
                    <input type="submit" name="submit" value="submit">
                        </td>
                    </tr>
</table>
</fieldset>
</form>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $hobi = @$_POST['hobi'];
    function biodata($nama, $jk, $tl, $agama, $alamat, $hobi) {
            echo "Nama :  $nama <br>";
            echo "Jenis Kelamin : $jk <br>";
            echo "Tanggal lahir : $tl <br>";
            echo "Agama : $agama <br>";
            echo "Hobi : ";
            foreach ($hobi as $key ) {
                echo $key;
                echo ", ";
            } 
    }
    echo biodata($_POST['nama'], $_POST['jk'], $_POST['date'],$_POST['agama'],$_POST['alamat'], $hobi);
}
?>