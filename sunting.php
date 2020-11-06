<html>
<head>
	<title>Sunting Barang</title>
</head>
<body><link rel="stylesheet" type="text/css" href="css/foundation.css">
<?php
$db=mysqli_connect("localhost", "root", "", "transaksi");
$kode=$_GET['kode'];
$query = mysqli_query($db, "SELECT * FROM barang WHERE kode='$kode'");
$row = mysqli_fetch_assoc($query);
if (isset($_POST['simpan'])) {
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$tanggal = $_POST['tanggal'];
	$stok = $_POST['stok'];
	$satuan = $_POST['satuan'];
	$harga = $_POST['harga'];
	$jumlah= $stok * $harga;
	$queryy=mysqli_query($db,"UPDATE barang SET nama='$nama', tanggaL='$tanggal',stok='$stok', satuan='$satuan', harga='$harga', jumlah='$jumlah' WHERE kode='$kode' ");
	if (mysqli_affected_rows($db)) {
		echo "
		<script>
		alert ('UPDATE SAVED')
		document.location.href='index.php'
		</script>
		";
	} else {echo "<script> alert ('UPDATE not saved')</script>";}
}
?>
<form action="" method ="post">
	MASUKAN KODE BARANG 
	<input type="text" name ="kode" value ="<?php echo $row['kode'] ?>">
	MASUKAN NAMA BARANG 
	<input type="text" name ="nama" value ="<?php echo $row['nama'] ?>">
	MASUKAN TANGGAL 
	<input type="text" name ="stok" value ="<?php echo $row['tanggal'] ?>">
	MASUKAN STOK BARANG 
	<input type="text" name ="stok" value ="<?php echo $row['stok'] ?>">
	MASUKAN SATUAN BARANG 
	<input type="text" name ="satuan" value ="<?php echo $row['satuan'] ?>">
	MASUKAN HARGA BARANG 
	<input type="text" name ="harga" value ="<?php echo $row['harga'] ?>">
	<input type="submit" name="simpan" value="Simpan hasil sunting" class="button success"> 
</form>