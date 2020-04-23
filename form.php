<!DOCTYPE HTML>
<html>
  <head>
   <title>UTS Mersya Efendi</title>
  </head>
  <body>
 
    <form name="form1" method="post" action="proses.php">
    <table width="780" border="0" align="center">
      <tr>
        <td colspan="2"><h3>Form Input Data COVID19</h3></td>
      </tr>
      <tr>
        <td width="250">Nama Wilayah</td>
        <td width="530">
          <select name="wil" id="wil">
              <option value="DKI Jakarta">DKI Jakarta</option>
              <option value="Jawa Barat">Jawa Barat</option>
              <option value="Banten">Banten</option>
              <option value="Jawa Tengah">Jawa Tengah</option>
          </select>
        </td>
      </tr>
          <tr>
        <td>Nama Operator</td>
        <td><input size="40" name="nama" type="text" id="nama"></td>
      </tr>
        <tr>
        <td>NIM Mahasiswa</td>
        <td><input size="40" name="nim" type="text" id="nim"></td>
      </tr>
      <tr>
        <td>Jumlah Positif</td>
        <td><input size="40" name="pos" type="text" id="pos" value=""></td>
      </tr>
      <tr>
        <td>Jumlah Dirawat</td>
        <td><input size="40" name="raw" type="text" id="raw"></td>
      </tr>
      <tr>
        <td>Jumlah Sembuh</td>
        <td><input size="40" name="sem" type="text" id="sem"></td>
      </tr>
 
      <tr>
        <td>Jumlah Meninggal</td>
        <td><input size="40" name="men" type="text" id="men"></td>
      </tr>
    

      <tr>
        <td></td>
        <td><input name="Submit" type="submit" value="Simpan"></td>
      </tr>
      <tr>
        <td></td>
        <td><a href="index.php">Lihat Data >></a></br></td>
      </tr>
    </table>
    </form>
 
  </body>
</html>