<?php $nama_file = $_GET['file']; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lihat Detail Database</title>
</head>
<body onload="loadDoc()">

	<h5>Isi Dari File <?php echo $nama_file; ?></h5>

	<pre id="isi-db">
		
	</pre>

<script type="text/javascript">
	function loadDoc() {
	  const xhttp = new XMLHttpRequest();
	  xhttp.onload = function() {
	    document.getElementById("isi-db").innerHTML =
	    this.responseText;
	  }
	  xhttp.open("GET", "hasil-backup/<?php echo $nama_file; ?>");
	  xhttp.send();
	}
</script>
</body>
</html>