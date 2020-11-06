<?php
$db=mysqli_connect("localhost","root","", "transaksi");
$kode=$_GET['kode'];
$query=mysqli_query($db, "DELETE FROM barang WHERE kode='$kode'");
if (mysqli_affected_rows($db)) {
		echo "
		<script>
		alert ('DELETE SAVED')
		document.location.href='index.php'
		</script>
		";
	} else {echo "<script> alert ('Delete not successful')</script>";}

?>