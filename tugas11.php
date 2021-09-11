<html>
 <head>
  <title>Biodata</title>
 </head>
 <body>
  <table border=0   >
  <form action="tgas11.php" method="post">
      <tr>
        <td><h1><center>BIODATA</center></h1></td>
</tr>
  <tr>
   <td>NIS</td>
   <td>:</td>
   <td><input type=text name=NIS required></td>
  </tr>
  <tr>
   <td>Nama Lengkap</td>
   <td>:</td>
   <td><input type=text name=Nama required></td>
  </tr>
  <tr>
  <td>Jurusan</td>
  <td>:</td>
   <td>
    <input type=radio name="jurusan" value="TI" required>T. Informatika
    <input type=radio name="jurusan" value="Elektro" required>T. Elektro
    <input type=radio name="jurusan" value="Sipil" required>T. Sipil
   </td>
  </tr>
  <tr>
   <td>Tempat dan Tanggal Lahir</td>
   <td>:</td>
   <td><input type=text name=Tempat size=15 required>
   <select name=Tgl>
   <option name=Tgl>Tgl
   <option name=Tgl>1
   <option name=Tgl>2
   <option name=Tgl>3
   <option name=Tgl>4
   <option name=Tgl>5
   <option name=Tgl>6
   <option name=Tgl>7
   <option name=Tgl>8
   <option name=Tgl>9
   <option name=Tgl>10
   <option name=Tgl>11
   <option name=Tgl>12
   <option name=Tgl>13
   <option name=Tgl>14
   <option name=Tgl>15
   <option name=Tgl>16
   <option name=Tgl>17
   <option name=Tgl>18
   <option name=Tgl>19
   <option name=Tgl>20
   <option name=Tgl>21
   <option name=Tgl>22
   <option name=Tgl>23
   <option name=Tgl>24
   <option name=Tgl>26
   <option name=Tgl>27
   <option name=Tgl>28
   <option name=Tgl>29
   <option name=Tgl>30
   <option name=Tgl>31
   </select>
   <select name=Bln>
   <option name=Bln>Bln
   <option name=Bln>Januari
   <option name=Bln>Februari
   <option name=Bln>Maret
   <option name=Bln>April
   <option name=Bln>Mei
   <option name=Bln>Juni
   <option name=Bln>Juli
   <option name=Bln>Agustus
   <option name=Bln>September
   <option name=Bln>Oktober
   <option name=Bln>November
   <option name=Bln>Desember
   </select>
   <select name=Thn>
   <option name=Thn>Thn
   <option name=Thn>2012
   <option name=Thn>2011
   <option name=Thn>2010
   <option name=Thn>2009
   <option name=Thn>2008
   <option name=Thn>2007
   <option name=Thn>2006
   <option name=Thn>2005
   <option name=Thn>2004
   <option name=Thn>2003
   <option name=Thn>2002
   <option name=Thn>2001
   <option name=Thn>2000
   <option name=Thn>1999
   <option name=Thn>1998
   <option name=Thn>1997
   <option name=Thn>1996
   <option name=Thn>1995
   <option name=Thn>1994
   <option name=Thn>1993
   <option name=Thn>1992
   </select>
   </td>
  </tr>
  <tr>
   <td>Jenis Kelamin</td>
   <td>:</td>
   <td><input type=radio name=JK value=Laki-laki required>Laki-laki<input type=radio name=JK value=Perempuan required>Perempuan</td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td>:</td>
   <td><textarea type = alamat name="alamat" id="alamat" cols="30" rows="10"></textarea></td>
  </tr>
  <tr>
   <td> </td>
   <td> </td>
   <td><input type="reset" name="reset" value="Reset">
   <input type="submit" name=tambah value=Tambah></td>
  </tr>
  </form>
  </table>
 </body>
</html>