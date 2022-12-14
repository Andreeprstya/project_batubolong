<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gaji Karyawan</title>
</head>
<body>
	<h1>Data Karyawan</h1>
	<h1></h1>
	<button><a href="<?= base_url('Kuis/tambah')?>">Hitung Gaji</a></body></button>
	<table border="1">
		<tr>
			<td>No.</td>
			<td>Nama</td>
			<td>Jabatan</td>
			<td>Jumlah Hari Kerja</td>
			<td>Gaji</td>
		</tr>
		<?php foreach($gaji->result_array() as $key): ?>
		<tr>
			<td><?php echo $key['id_gaji'] ?></td>
			<td><?php echo $key['nama'] ?></td>
			<td><?php echo $key['jabatan'] ?></td>
			<td><?php echo $key['jlmh_hari_kerja'] ?></td>
			<td><?php echo $key['gaji'] ?></td>
		</tr>
	<?php endforeach ?>
	</table>
</html>