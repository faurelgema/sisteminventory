
<!DOCTYPE html>

<html>
<head>
	<title> Inventoris dan Data Barang </title>
</head>
<body>
	<br>
	<h3 class="text-center">SISTEM BARANG MASUK</h3> 
	<br>
	<link rel="stylesheet" type="text/css" href="css/foundation.css">
</body>
<?php
$db=mysqli_connect("localhost","root", "", "transaksi");
$query ="SELECT * FROM barang";
$result = mysqli_query($db, $query) or die("could not perform query");
?>
<table border 1px class="u-full-width" class="responsive-card-table unstriped">
	<thead>
		<tbody>
	<tr>
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Tanggal</th>
		<th>Stok Barang</th>
		<th>Satuan Barang</th>
		<th>Harga Barang (Rupiah)</th>
		<th>Jumlah (Rupiah) </th>
	</tr> 
		</tbody> 
	</thead> 	
	<?php
		$i=0;
		$total=0;
		foreach($result as $row){
			$i++;
			$kode[$i] = $row['kode'];
			$nama[$i] = $row['nama'];
			$tanggal[$i] = $row['tanggal'];
			$stok[$i] = $row['stok'];
			$satuan[$i] = $row['satuan'];
			$harga[$i] = $row['harga'];
			$jumlah[$i] = $harga[$i] * $stok[$i];
			$total+=$jumlah[$i];
			$angka_format = number_format($total,2,",",".");
		}
	?>
	<?php
		$i=0;
		foreach($result as $row){
		$i++;
	?>
		<tr>
			<td><?=$kode[$i]?></td>
			<td><?=$nama[$i]?></td>
			<td><?=$tanggal[$i]?></td>
			<td><?=$stok[$i]?> </td>
			<td><?=$satuan[$i]?> </td>
			<td><?=$harga[$i]?> </td>
			<td><?=$jumlah[$i]?> </td>
			<td><a class="button success" href="sunting.php?kode=<?php echo $row['kode'] ?>">SUNTING</a> </td> 
			<td><a class="button alert" href="delete.php?kode=<?php echo $row['kode'] ?>">HAPUS</a></td>
		</tr>

	<?php
		}
	?>

	<tr>
		<td colspan="7" class="text-center">TOTAL JUMLAH  HARGA KESELURUHAN ASET: Rp.                  <?=$angka_format?></td> </tr>
</table>
<br>
<a class="button primary" href="tambah.php">Tambah Data</a></button>
</table>
</html>