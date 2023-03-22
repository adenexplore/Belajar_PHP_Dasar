<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran Universitas Aleksander Ucok</title>
</head>
<body>
	<form method="post" action="simpan.php">
		<table border="10" width ="50%">
			<tr>
			    <td colspan="2" bgcolor="green">
			 <div align="center" >
			<h2>formulir pendaftaran</h2>
			</div>
			  </td>
			</tr>
			<tr>
				
				<td colspan = "1" bgcolor="red">Nama</td>
				<td colspan = "1" bgcolor="silver"><input type="text" name="namanya"></td>
			</tr>
			<tr>
				<td colspan = "1" bgcolor="yellow">Tempat Lahir</td>
				<td colspan = "1" bgcolor="silver"><input type="text" name="tempatlahirnya"></td>
			</tr>
			<tr>	
				<td colspan = "1" bgcolor="green">Tanggal Lahir</td>
			    <td colspan = "1" bgcolor="silver"><input type="date" name="tanggalnya"></td>
			</tr>
			<tr>
				<td colspan = "1" bgcolor="blue-green">Alamat Rumah</td>
				<td colspan = "1" bgcolor="silver"><textarea name="alamatrumahnya"></textarea></td>
			</tr>
			<tr>
				<td colspan = "1" bgcolor="gold">Jenis Kelamin</td>
				<td colspan = "1" bgcolor="silver">
					<input type="radio" name="kelamin" value="Perempuan">Perempuan
					<input type="radio" name="kelamin" value="Laki-laki">Laki-laki
				</td>
			</tr>
			<tr>
				<td colspan = "1" bgcolor="teal">Asal Sekolah</td>
				<td colspan = "1" bgcolor="silver"><input type="text" name="asalsekolah"></td>
			</tr>
			<tr>
				<td colspan = "1" bgcolor="pink">Nilai UN</td>
				<td colspan = "1" bgcolor="silver"><input type="text" name="nilaiun"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="simpannya" value="kirim"></td>
			</tr>
		</table>
	</form>

</body>
</html>

