<?php 
include 'config.php';
$id = $_GET['id'];
mysql_query("DELETE FROM tb_data WHERE id_data='$id'")or die(mysql_error());

header("location:home.php?pesan=hapus");
?>