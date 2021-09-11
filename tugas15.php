<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Berat Badan</title>
</head>
<body>
    <form method="POST" name="BB" action="tgas15.php">
        <table width="500" border="1" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <th><h2>Menghitung Berat Badan Ideal</h2></th>
            </tr>
            <tr>
                <td>
                    <table width="500" border="0" cellpadding="6" cellspacing="6" align="center">

                    <tr height="30">
                            <td width="200" valign="center">Nama</td>
                            <td width="10" valign="center"> : </td>
                            <td><input type="text" name="nama" size="30" required></td>
                    </tr>

                        <tr>
                        <td>Jenis Kelamin</td>
                        <td> : </td> 
                        <td><input type="radio" name="jk" value="Laki-laki">Laki-laki
                        <input type="radio" name="jk" value="Perempuan">Perempuan</td>
                        </tr>

                        <tr height="40">
                                <td width="200" valign="center">Tinggi Badan (Cm)</td>
                                <td width="10" valign="center"> : </td>
                                <td><input type="text" name="tinggi" size="30" required></td>
                        </tr>
                        
                        <tr height="30">
                            <td width="200" valign="center">Berat Badan (Kg)</td>
                            <td width="10" valign="center"> : </td>
                            <td><input type="text" name="berat" size="30" required></td>
                        </tr>
                        <tr>
                            <td align="right" colspan="2"><input type="submit" name="submit" value="Hitung"></td>
                            <td><input type="reset" name="reset" value="Hapus"></td>
                        </tr>

                    </table>
</form>
</body>
</html>
<br>



