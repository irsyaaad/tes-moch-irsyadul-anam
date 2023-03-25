<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Input</title>
</head>
<body>
	<form action="PHP_01.php" method="POST" name="form-input-data">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>No Telpon</td>
				<td><input type="text" name="no_tlpn"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jk">
						<option value="">- Pilih Jenis Kelamin -</option>
						<option value="laki-laki">Laki-laki</option>
						<option value="perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Submit</td>
				<td><input type="submit" name="Submit" value="Submit">   </td>
			</tr>
		</table>
	</form>
</body>
</html>
