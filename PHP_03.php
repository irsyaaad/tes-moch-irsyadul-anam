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
				<td>username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Submit</td>
				<td><input type="submit" name="Submit" value="Submit">   </td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$username    			= $_POST['username'];
	$password             	= $_POST['password'];

		//validasi data data kosong
	if (empty($_POST['username'])||empty($_POST['password'])) { ?>
		<script language="JavaScript">
			alert('Data Harap Dilengkapi!');
			document.location='PHP_03.php';
		</script>
		<?php
	}

	function balik($str){
		$r = '';
		for ($i = mb_strlen($str); $i>=0; $i--) {
			$r .= mb_substr($str, $i, 1);
		}
		return $r;
	}

	$pass = balik($username);

	if ($password == $pass) {
		echo "Login Berhasil";
	}else{
		echo "Login Gagal";
	}

}

?>
