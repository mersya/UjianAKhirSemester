<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA COVID by Mersya Efendi</title>
</head>
<body>

	<center>

		<h2>DATA LAPORAN PASIEN COVID</h2>

	</center>

	<?php 
	include 'config.php';
	?>

	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Wilayah</th>
			<th>Nama Operator</th>
			<th width="5%">NIM</th>
			<th width="5%">Positif</th>
			<th width="5%">Rawat</th>
			<th width="5%">Sembuh</th>
			<th width="5%">Meninggal</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysql_query("select * from tb_data");
		while($data = mysql_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['wilayah']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['nim']; ?></td>
			<td><?php echo $data['jum_positif']; ?></td>
			<td><?php echo $data['jum_rawat']; ?></td>
			<td><?php echo $data['jum_sembuh']; ?></td>
			<td><?php echo $data['jum_meninggal']; ?></td>

		</tr>
		<?php 
		}
		?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>