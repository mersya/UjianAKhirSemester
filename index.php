<!DOCTYPE HTML>
<html>
  <head>
    <title>UTS Mersya Efendi</title>
  </head>
  <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
  <body>

  <?php
  $tanggal= mktime(date("m"),date("d"),date("Y"));
echo "Tanggal : <b>".date("d M Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| Pukul : <b>". $jam." "."</b>";

  $txt_file    = file_get_contents('data.txt');
  $rows        = explode("\n", $txt_file);
  array_shift($rows);
  
   foreach($rows as $row => $data)
  {

        // Explode digunakan untuk memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
        $row_data = explode('|', $data);

        $info[$row]['wil']       = $row_data[0];
        $info[$row]['nama']      = $row_data[1];
        $info[$row]['nim']       = $row_data[2];
        $info[$row]['pos']       = $row_data[3];
        $info[$row]['raw']       = $row_data[4];
        $info[$row]['sem']       = $row_data[5];
        $info[$row]['men']       = $row_data[6];

  echo '<p align="center">Data Pemantauan Covid19 wilayah '.$info[$row]['wil'].'</p>';
  echo '<p align="center">Per '.date('d M Y', $tanggal).' '.$jam.'</p>';
  echo '<p align="center">'.$info[$row]['nama'].' / '.$info[$row]['nim'].'</p>';
  ?>
<table align="center">
 
  <tr>
    <th width="150px" height="50px">Positive</th>
    <th width="150px">Dirawat</th> 
    <th width="150px">Sembuh</th>
    <th width="150px">Meninggal</th>
  </tr>

  <tr align="center">
    <td width="150px" height="30px" ><?php echo $info[$row]['pos']; ?></td>
    <td><?php echo $info[$row]['raw']; ?></td>
    <td><?php echo $info[$row]['sem']; ?></td>
    <td><?php echo $info[$row]['men']; ?></td>
  </tr>
</table>
<br>
<br>
<?php
}
?>
<a href="form.php">Tambah Data</a></br></br>

</body>
</html>