<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Backup db</title>
</head>
<body>

	<a href="backup-data.php">Backup DataBase</a><br><br>

	<?php
		$folder = "./hasil-backup/"; //Sesuaikan Folder nya
		if(!($buka_folder = opendir($folder))) die ("eRorr... Tidak bisa membuka Folder");

		$file_array = array();
		while($baca_folder = readdir($buka_folder))
		 {
		  if(substr($baca_folder,0,1) != '.')
		   {
		     $file_array[] =  $baca_folder;
		    }
		 }

		 while(list($index, $nama_file) = each($file_array))
		  {
		   $nomor = $index + 1;
		   echo "$nomor. $nama_file  <a href='hasil-backup/$nama_file'>Download fill</a> || <a href='hapus-db.php?file=$nama_file'>hapus-db</a> <br>";
		 }

		closedir($buka_folder);
	?>

</body>
</html>