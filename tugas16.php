<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mendata Pengunjung</title>
</head>
<body>
    <form method="POST" name="mall" action="tgas16.php">
        <table width="500" border="1" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <th><h2>Pendataan Pengunjung Mall</h2></th>
            </tr>
            <tr>
                <td>
                    <table width="500" border="0" cellpadding="6" cellspacing="6" align="center">
                    <tr height="40">
                                <td width="200" valign="center">Masukan Nama Anda </td>
                                <td width="10" valign="center"> : </td>
                                <td><input type="text" name="nama" size="30" required></td>
                        </tr>
                        <tr height="40">
                                <td width="200" valign="center">Masukan Usia Anda </td>
                                <td width="10" valign="center"> : </td>
                                <td><input type="text" name="usia" size="30" required></td>
                        </tr>
                        
                        <tr>
            <td>Apakah Sudah Divaksin</td>
            <td>:</td>
            <td>
                <input type="radio" name="vaksin" value="tidak" checked>Belum
                <input type="radio" name="vaksin" value="ya" checked>Sudah
            </td>
        </tr>

                        <tr>
                            <td align="right" colspan="2"><input type="submit" name="submit" value="Kirim"></td>
                            <td><input type="reset" name="reset" value="Hapus"></td>
                        </tr>

                    </table>
</form>
</body>
</html>
