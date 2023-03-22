<!DOCTYPE html>
<html>
<head>
	<title>No 2</title>
</head>
<body>
	<h3> STUDY KASUS  2</h3>
	<form method="POST">
	<table border="2">
		<tr>
			<td>Pembelian</td>
			<td><input type="number" name="byr"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="hitung"></td>
		</tr>
	</table>
	<?php
	if (isset($_POST['submit'])) {
		$pembelian = $_POST['byr'];
	}
	if ($pembelian > 150000) {
		$a = $pembelian * (20/100);
		$hasil = $pembelian - $a;
		echo "Yang harus di bayar: $hasil";
		echo "<br>Dengan diskon: 20%";
	}elseif($pembelian < 150000) {
		echo "Yang harus di bayar: $pembelian";
		echo "<br>Dengan diskon: 0%";
	}
	?>

</form>
</body>
</html>