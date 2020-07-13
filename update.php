<?php 

include 'config.php';
$id = $_POST['id'];
$wil = $_POST['wil'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$pos = $_POST['pos'];
$raw = $_POST['raw'];
$sem = $_POST['sem'];
$men = $_POST['men'];
// print_r($_POST);die();
mysql_query("UPDATE tb_data SET wilayah='$wil', nama='$nama', nim='$nim', jum_positif='$pos', jum_rawat='$raw', jum_sembuh='$sem', jum_meninggal='$men' WHERE id_data='$id'");
// print_r(mysql_query);die();
header("location:home.php?pesan=update");
?>