<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		button {
			width: 70%;
		}
	</style>
</head>
<body>
	<form method="post" action="struk.php">
		<table align="center" cellpadding="5">
			<tr>
				<td>Tgl Beli</td>
				<td>:</td>
				<td><input type="date" name="tgl"></td>
			</tr>
			<tr>
				<td>Jam</td>
				<td>:</td>
				<td><input type="time" name="jam"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nominal</td>
				<td>:</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			<tr>
				<td>Daya</td>
				<td>:</td>
				<td><input type="text" name="daya"></td>
			</tr>
			<tr>
				<td>Kwh</td>
				<td>:</td>
				<td><input type="text" name="kwh"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>Token</td>
				<td>:</td>
				<td><input type="text" name="token"></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><button name="submit">Cetak</button></td>
			</tr>
		</table>
	</form>
</body>
</html>