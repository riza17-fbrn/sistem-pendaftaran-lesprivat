<?php
	include 'koneksi.php';
	if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login.php"</script>';
      }

	if(isset($_GET['no'])) {
		$delete = mysqli_query ($conn,"DELETE FROM pendaftaran WHERE no_pendaftaran = '".$_GET[no]."' ");
		echo '<script>window.location="data_peserta.php"</script>';
	}
?>