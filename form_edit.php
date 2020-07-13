<!DOCTYPE HTML>
<html>
  <head>
   <title>UTS Mersya Efendi</title>
  </head>
  <body>
 <?php 
  include "config.php";
  $id = $_GET['id'];
  $query_mysql = mysql_query("SELECT * FROM tb_data WHERE id_data='$id'")or die(mysql_error());
  $nomor = 1;

  while($data = mysql_fetch_array($query_mysql)){
    // print_r($data);die();
  ?>
    <form name="form1" method="post" action="update.php">
    <table width="780" border="0" align="center">
      <tr>
        <td colspan="2"><h3>Form Edit Data COVID19</h3></td>
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
        <td><input type="hidden" name="id" value="<?php echo $data['id_data'] ?>">
          <input size="40" name="nama" type="text" id="nama" value="<?php echo $data['nama'] ?>"></td>
      </tr>
        <tr>
        <td>NIM Mahasiswa</td>
        <td><input size="40" name="nim" type="text" id="nim" value="<?php echo $data['nim'] ?>"></td>
      </tr>
      <tr>
        <td>Jumlah Positif</td>
        <td><input size="40" name="pos" type="text" id="pos" value="<?php echo $data['jum_positif'] ?>"></td>
      </tr>
      <tr>
        <td>Jumlah Dirawat</td>
        <td><input size="40" name="raw" type="text" id="raw" value="<?php echo $data['jum_rawat'] ?>"></td>
      </tr>
      <tr>
        <td>Jumlah Sembuh</td>
        <td><input size="40" name="sem" type="text" id="sem" value="<?php echo $data['jum_sembuh'] ?>"></td>
      </tr>
 
      <tr>
        <td>Jumlah Meninggal</td>
        <td><input size="40" name="men" type="text" id="men" value="<?php echo $data['jum_meninggal'] ?>"></td>
      </tr>
    

      <tr>
        <td></td>
        <td><input name="Submit" type="submit" value="Update"></td>
      </tr>
      <tr>
        <td></td>
        <td><a href="index.php">Lihat Data >></a></br></td>
      </tr>
    </table>
    </form>
 <?php } ?>
  </body>
</html>