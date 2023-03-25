<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$nama    			= $_POST['nama'];
	$alamat             = $_POST['alamat'];
	$no_tlpn        	= $_POST['no_tlpn'];
	$jk            		= $_POST['jk'];

    //validasi data data kosong
	if (empty($_POST['nama'])||empty($_POST['alamat'])||empty($_POST['no_tlpn'])||empty($_POST['jk'])) { ?>
		<script language="JavaScript">
			alert('Data Harap Dilengkapi!');
			document.location='form.php';
		</script>
		<?php
	}

	if (!preg_match("/^[a-zA-Z ]*$/",$nama)) { ?>
		<script language="JavaScript">
			alert('Nama hanya boleh diisi huruf');
			document.location='form.php';
		</script>
		<?php
	}

	if(!is_numeric($no_tlpn)) { ?>
		<script language="JavaScript">
			alert('Telpn hanya boleh diisi angka');
			document.location='form.php';
		</script>
		<?php
	}

	echo json_encode($_POST);
}

?>