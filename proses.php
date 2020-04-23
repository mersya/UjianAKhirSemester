<?php
 
  // Menangkap isi variabel dari file yang telah kita isi pada form.php
  $wil = $_POST['wil'];
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $pos = $_POST['pos'];
  $raw = $_POST['raw'];
  $sem = $_POST['sem'];
  $men = $_POST['men'];
 
  // Format data yang akandiparsing
  $data = "\n $wil|$nama|$nim|$pos|$raw|$sem|$men";
 
  // Buka file mhs.txt, kemudian tuliskan isi variabel di atas kedalam mhs.txt
  $fh = fopen("data.txt", "a");
  fwrite($fh, $data);
 
  // Tutup file data.txt
  fclose($fh);
 
  // Keterangan bila data berhasil di input
  print "Data Telah Tersimpan.</br><a href='index.php'>Kembalike Index >></a>";
 
?>