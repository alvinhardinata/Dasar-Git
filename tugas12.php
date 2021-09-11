<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Check In</title>
</head>
<body>
   <form method=post action="tgas12.php">
   <table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
   <tr>
   <th><h2>Form Pemesanan</h2></th>
   </tr>
   <tr>
   <td>
   <table width="500" border="" cellpadding="0" cellspacing="0" align="center">

   <tr height="40">
   <td width="200" valign="center">Tanggal Booking</td>
   <td width="10" valign="center">:</td>
   <td><input type="date" name="tanggal" size="50"></td>
   </tr>

   <tr height="30">
   <td width="200" valign="center">Nama Costumer</td>
   <td width="10" valign="center">:</td>
   <td><input type="text" name="nama" size="30"></td>
   </tr>

   <tr height="30">
   <td width="200" valign="center">No Identitas</td>
   <td width="10" valign="center">:</td>
   <td><input type="text" name="identitas" size="30"></td>
   </tr>

   <tr height="30">
   <td width="200" valign="center">Tipe Kamar</td>
   <td width="10" valign="center">:</td>

   <td>
   <select name="tipe">
   <option name="tipe">Tipe
   <option name="tipe">Superior
   <option name="tipe">Deluxe
   <option name="tipe">JS
   </select>
   </td>
   </tr>

   <tr height="30">
   <td width="200" valign="center">Durasi Menginap</td>
   <td width="10" valign="center">:</td>
   <td><input type="text" name="durasi" size="22"/> Malam</td>
   </tr>

   <tr>
   <td align="right" colspan="2"><input type="submit" name="simpan" value="Simpan" /></td>
   <td><input type="reset" name="cancel" value="Cancel"/></td>
   </tr>
   </table>
   </table>
</body>
</html>