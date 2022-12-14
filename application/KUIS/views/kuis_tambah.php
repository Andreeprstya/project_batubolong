<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hitung Gaji Karyawan</title>
</head>
<body>
	<h1>Hitung Gaji</h1>
	<button><a href="<?= base_url('Kuis')?>">Kembali</a></button>
	<table>
		<form action="<?php echo base_url('kuis/add') ?>" method="post">
			<?php foreach($gaji->result_array() as $key): ?>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td>
					<select name="jabatan">
						<option value="">Pilih Jabatan</option>
						<option value="Cleaning Service">Cleaning Service</option>
						<option value="Staff">Staff</option>
						<option value="Manager">Manager</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jumlah Hari Kerja</td>
				<td>:</td>
				<td><input type="text" name="jlmh_hari_kerja"></td>
			</tr>
			<input type="hidden" name="gaji" value="<?php if ($key['jabatan'] == "Cleaning Service") {
																$key['gaji'] = 100000*$key['jlmh_hari_kerja']+100000;
															} else if ($key['jabatan'] == "Staff") {
																$key['gaji'] = (200000*$key['jlmh_hari_kerja'])+(50000*$key['jlmh_hari_kerja']);
															} else if ($key['jabatan'] == "Manager") {
																$key['gaji'] = ((300000*$key['jlmh_hari_kerja'])+(50000*$key['jlmh_hari_kerja'])+1000000);
															}
													?>">
			<tr>
				<td><button type="submit">SIMPAN</button></td>
			</tr>
			<?php endforeach ?>
		</form>
	</table>
</body>
</html>