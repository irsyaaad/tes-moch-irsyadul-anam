<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Input</title>
</head>
<body>
	<form action="" method="POST" name="form-input-data">
		<table>
			<tr>
				<td>jumlah</td>
				<td><input type="number" name="jumlah"></td>
			</tr>
			<tr>
				<td>Hitung</td>
				<td><input type="submit" name="Submit" value="Submit">   </td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$jumlah    			= $_POST['jumlah'];

		//validasi data data kosong
	if (empty($_POST['jumlah'])) { ?>
		<script language="JavaScript">
			alert('Data Harap Dilengkapi!');
			document.location='PHP_05.php';
		</script>
		<?php
	}

	for ($i=$jumlah; $i > 0 ; $i--) { 
		for ($j=0; $j < $i ; $j++) { 
			echo "*";
		}
		echo "<br>";
	}
	

}

?>
