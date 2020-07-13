<?php
 include 'config.php';
  // Menangkap isi variabel dari file yang telah kita isi pada form.php
  $wil = $_POST['wil'];
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $pos = $_POST['pos'];
  $raw = $_POST['raw'];
  $sem = $_POST['sem'];
  $men = $_POST['men'];
 
 // query SQL untuk insert data
mysql_query("INSERT INTO tb_data VALUES('','$wil','$nama','$nim','$pos','$raw','$sem','$men')");
// mengalihkan ke halaman home.php
header("location:home.php?pesan=input");
 
?>