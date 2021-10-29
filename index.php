<?php $mysqli = mysqli_connect("localhost", "root", "", ""); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Backup db</title>
</head>
<body>

	<?php 
		$result = mysqli_query($mysqli, "SELECT DISTINCT
																			TABLE_SCHEMA db
																		FROM
																			INFORMATION_SCHEMA.TABLES
																		WHERE TABLE_SCHEMA NOT LIKE 'information_schema'
																		AND TABLE_SCHEMA NOT LIKE 'mysql'
																		AND TABLE_SCHEMA NOT LIKE 'performance_schema'
																		AND TABLE_SCHEMA NOT LIKE 'phpmyadmin'");
	?>
	<form action="backup-data.php" method="POST">
		<div class="select-db">
			<select name="name_db" id="name_db">
				<?php 
				while ($row = mysqli_fetch_array($result)) {
				?>

			  	<option value="<?php echo $row['db'] ?>"><?php echo $row['db'] ?></option>

			  <?php } ?>
			</select>
		</div>
		<br>
		<div class="btn-bd">
			<button type="submit">Backup Database</button>
		</div>
	</form>
	<br>

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
		  if ($nama_file != "index.php") {
		  	echo "$nomor. $nama_file  <a href='hasil-backup/$nama_file'>Download File</a> || <a href='hapus-db.php?file=$nama_file'>hapus Database</a> || <a href='liat-db.php?file=$nama_file'>Lihat Database</a> <br>";
		  }
		}

		closedir($buka_folder);
	?>

</body>
</html>