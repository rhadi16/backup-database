<?php 

	$file=$_GET['file'];
	unlink('hasil-backup/'.$file); // hapus file
	echo '<script language="javascript"> window.location.href = "index.php" </script>';
	
?>