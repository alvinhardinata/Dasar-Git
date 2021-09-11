<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gajih</title>
</head>
<body>
    <center><h4>Program Penggajihan</h4>
    <h3>PT.GARUDA KELINCI AKUR</h3>
    <table>
    <form action="tgas13.php" method=POST>
    <tr>
       <td>Nama Bendahara</td>
       <td>:</td>
       <td><input type="text" name="nama" required></td>
    </tr>
    <tr>
       <td>Nama Pekerja</td>
       <td>:</td>
       <td><input type="text" name="namap" required></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><input type=radio name="jenis" value="Laki-laki">Laki-laki 
            <input type=radio name="jenis" value="Perempuan">Perempuan
        </td>
    </tr>
    <tr>
    <td>Tanggal Gaji</td>
        <td>:</td>
        <td><input type=date name="tanggal">
        </td>
    </tr>
    <tr>
        <td>Pilih Jabatan</td>
        <td>:</td>
        <td>
        <select name="jabatan">
        <option name="jabatan">Pilih Jabatan
            <option name=Tgl>direktur
            <option name=Tgl>manager
            <option name=Tgl>karyawan
            <option name=Tgl>OB
            </select>
    </tr>
    <tr>
        <td>Pendidikan Terakhir</td>
        <td>:</td>
        <td>
        <select name="sekola">
        <option name="sekola">Penddikan Terakhir
            <option name=sekola>sd
            <option name=sekola>smp
            <option name=sekola>sma
            <option name=sekola>s1
            </select>
    </tr>
    <tr>
       <td>Lembur</td>
       <td>:</td>
       <td><input type="text" name="lembur">    Hari</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
</tr><hr>
    </center>
</body>
</html>