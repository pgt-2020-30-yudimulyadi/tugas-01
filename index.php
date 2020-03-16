<?php
//koneksi ke database mysql 
$conn = mysqli_connect("localhost", "root", "", "aritmatika") ;

// ambil data dari tabel
$result = mysqli_query($conn, "SELECT * FROM operasi");
if (!$result) {
	echo mysqli_error($conn);


}
//var_dump($result);
//ambil data mahasiswa dari objek result
//$opr = mysqli_fetch_assoc($result);
//var_dump($opr["hasil"]);
?>

<!DOCTYPE html>
<html>
<head>
	<title>contoh operasi</title>
	<style type="text/css">
		table {
			background-color: darkgrey;
		} 
		th{
			background-color: black;
			color: white ;
		}
	</style>
</head>
<body>
	<center><b><p style="color : red;"><marquee>PENJUMLAHAN&nbsp;&nbsp;&nbsp;PENJUMLAHAN&nbsp;&nbsp;&nbsp;PENJUMLAHAN&nbsp;&nbsp;&nbsp;PENJUMLAHAN&nbsp;&nbsp;&nbsp;PENJUMLAHAN&nbsp;&nbsp;&nbsp;PENJUMLAHAN&nbsp;&nbsp;&nbsp;PENJUMLAHAN&nbsp;&nbsp;&nbsp;PENJUMLAHAN</marquee></p></b></center>
	<center><form action="" method="POST">
		<label>Nilai A : <input type="number" name="a" placeholder="masukkan nilai a"></label><br><br>
		<label>Nilai B : <input type="number" name="b" placeholder="masukkan nilai b"></label><br><br>
		<button type="submit" name="submit">SUBMIT</button><br><br>
	
	</form>
	<?php
	if (isset($_POST['submit'])) {
	// ambil data dari tiap elemen form
	$a 		= $_POST['a'];
	$b 		= $_POST['b'];
	$hasil 	= $_POST['submit'];
	$hasil = $a + $b;

	echo $hasil;

	if ($hasil <= 0) {
		$ket = "D";
	} elseif ($hasil <= 10) {
		$ket = "A"; 
	} elseif ($hasil <= 20) {
		$ket = "B";
	} elseif ($hasil > 20) {
		$ket = "C";
	} 
	echo "kategori : ";
	echo  $ket;

	for ($i=1; $i <= 10 ; $i++) {
		$a = $b;
		$hasil = $a + $b;
		$b = $hasil;

	if ($hasil <= 0) {
		$ket = "D";
	} elseif ($hasil <= 10) {
		$ket = "A"; 
	} elseif ($hasil <= 20) {
		$ket = "B";
	} elseif ($hasil > 20) {
		$ket = "C";
	}
	echo $hasil; 	
	}

	// query insert data
	$query = "INSERT INTO operasi VALUES ('', '$a', '$b', '$hasil', '$ket' )";
	mysqli_query($conn, $query);

	}
	?>

	<hr>
	<h1>TABLE DATA BASE PENJUMLAHAN</h1>
	<table border="1" cellpadding="20" cellspacing="0">
		<tr>
			<th>ID</th>
			<th>NILAI A</th>
			<th>NILAI B</th>
			<th>HASIL</th>
			<th>KETERANGAN</th>
			<th>AKSI</th>	
		</tr>

<?php while ($row = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['a']; ?></td>
			<td><?php echo $row['b']; ?></td>
			<td><?php echo $row['hasil']; ?></td>
			<td><?php echo $row['ket']; ?></td>
			<td>
				<a href="">Ubah</a>
				<a href="">Hapus</a>
			</td>
		</tr>
<?php endwhile; ?>

	</table>
	</center>
	</body>

	
</center>
</body>
</html>


