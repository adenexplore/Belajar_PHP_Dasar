<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
</head>
<body>
	<h2>1.makanan pavorit anda </h2>
		<form action="<?php echo $_SERVER['PHP_SELF'];?> "method="post">
			<table >
				<tr>
					<td>
					  	<input type="radio" name="jenis_makanan" value="Rendang">Rendang
						<input type="radio" name="jenis_makanan" value="Gulai">Gulai
						<input type="radio" name="jenis_makanan" value="Semur">Semur	
					</td>
				</tr>
				<tr>
				<td align="center"><input style="width: 200px;" type="submit" name="submit" value="tampilkan"></td>
			</tr>
			<tr>
                  <td align="center"><input type="text" name="submit"></td>
               </tr>
		</table>
	</form>
	<?php
	if (isset($_POST['jenis_makanan'])) {
		$jenis_makanan=$_POST['jenis_makanan'];
		echo "<br>".$jenis_makanan;
	}
	?>
</body>
</body>
</html>