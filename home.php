<!DOCTYPE HTML>
<html>
  <head>
    <title>UAS Mersya Efendi</title>
  </head>
  <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
  <body>

    <?php 
include 'config.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:../index.php");
}

// menampilkan pesan selamat datang
echo "Hai, selamat datang ". $_SESSION['username'];

?>
<br/>
<br/>


  <?php
  $tanggal= mktime(date("m"),date("d"),date("Y"));
echo "Tanggal : <b>".date("d M Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| Pukul : <b>". $jam." "."</b>";

  // $txt_file    = file_get_contents('data.txt');
  // $rows        = explode("\n", $txt_file);
  // array_shift($rows);
  
  //  foreach($rows as $row => $data)
  // {

  //       // Explode digunakan untuk memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
  //       $row_data = explode('|', $data);

  //       $info[$row]['wil']       = $row_data[0];
  //       $info[$row]['nama']      = $row_data[1];
  //       $info[$row]['nim']       = $row_data[2];
  //       $info[$row]['pos']       = $row_data[3];
  //       $info[$row]['raw']       = $row_data[4];
  //       $info[$row]['sem']       = $row_data[5];
  //       $info[$row]['men']       = $row_data[6];

    $query_mysql = mysql_query("SELECT * FROM tb_data")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){

  echo '<p align="center">Data Pemantauan Covid19 wilayah '.$data['wilayah'].'</p>';
  echo '<p align="center">Per '.date('d M Y', $tanggal).' '.$jam.'</p>';
  echo '<p align="center">'.$data['nama'].' / '.$data['nim'].'</p>';
  ?>
<table align="center">
 
  <tr>
    <th width="150px" height="50px">Positive</th>
    <th width="150px">Dirawat</th> 
    <th width="150px">Sembuh</th>
    <th width="150px">Meninggal</th>
    <th width="150px">Action</th>
  </tr>

  <tr align="center">
    <td width="150px" height="30px" ><?php echo $data['jum_positif']; ?></td>
    <td><?php echo $data['jum_rawat']; ?></td>
    <td><?php echo $data['jum_sembuh']; ?></td>
    <td><?php echo $data['jum_meninggal']; ?></td>
    <td>
        <a class="edit" href="form_edit.php?id=<?php echo $data['id_data']; ?>">Edit</a> |
        <a class="hapus" href="hapus.php?id=<?php echo $data['id_data']; ?>">Hapus</a>         
      </td>
  </tr>
</table>
<br>
<br>
<?php
}
?>
<p align="center">
<?php 
  if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "input"){
      echo "Data berhasil di input !!!!!";
    }else if($pesan == "update"){
      echo "Data berhasil di update !!!!!";
    }else if($pesan == "hapus"){
      echo "Data berhasil di hapus !!!!";
    }
  }
  ?>
</p>
  <br>
<a href="form.php">Tambah Data</a></br>
<a href="cetak.php" target="_blank">CETAK</a></br></br>
<a href="logout.php">LOGOUT</a>
</body>
</html>