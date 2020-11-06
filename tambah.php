<html>
<head>
	<title>Tambahkan data barang</title>
<body>
	<link rel="stylesheet" href="css/foundation.css"/>
<?php
$db=mysqli_connect("localhost","root","","transaksi");
if (isset($_POST['simpan'])) {
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$tanggal = $_POST['tanggal'];
	$stok = $_POST['stok'];
	$satuan = $_POST['satuan'];
	$harga = $_POST['harga'];
	$jumlah= $stok * $harga;
	$query=mysqli_query($db, "INSERT INTO barang VALUES ('$kode','$nama', '$tanggal', '$stok','$satuan','$harga','$jumlah')");
	if (mysqli_affected_rows($db)) {
		echo "
		<script>
		alert ('DATA SAVED')
		document.location.href='index.php'
		</script>
		";
	} else {echo "<script> alert ('data not saved')</script>";}
}
?>
<form action="" method="post">
<div class="row">
<h3 class="text-center">Data Barang yang Diinginkan</h3>
<table>
	<tr>
		<td> SILAKAN MASUKAN KODE BARANG </td>
		<td><input type="text" name="kode"></td>
		
	</tr>
	<tr>
		<td>SILAKAN MASUKAN NAMA BARANG </td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td> SILAKAN MASUKAN TANGGAL </td>
		<td><input type="text" name="tanggal"></td>
	</tr>
	<tr>
		<td> SILAKAN MASUKAN STOK BARANG </td>
		<td><input type="text" name="stok"></td>
	</tr>
	<tr>
		<td> SILAKAN MASUKAN SATUAN BARANG </td>
		<td><input type="text" name="satuan"></td>
	</tr>
    <tr>
		<td> SILAKAN MASUKAN HARGA BARANG </td>
		<td><input type="text" name="harga"></td>
	</tr>
	<tr>
	<td><input type ="submit" name ="simpan" value = "Simpan Data" class="button primary"> </td>
</table>
</form>