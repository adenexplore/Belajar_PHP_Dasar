<?php 

session_start();
	if (isset($_POST['reset'])) {
		$kata = '';
		$_SESSION['warna'] = 'black';
		$_SESSION['align'] = 'left';
	} else {
		$kata = @$_POST['kata'];
	} 
	if (isset($_POST['merah'])) {
		$_SESSION['warna'] = 'red';
	} elseif (isset($_POST['biru'])) {
		$_SESSION['warna'] = 'blue';
	} elseif (isset($_POST['hijau'])) {
		$_SESSION['warna'] = 'green';
	}
	if (isset($_POST['kiri'])) {
		$_SESSION['align'] = 'left';
	} elseif (isset($_POST['tengah'])) {
		$_SESSION['align'] = 'center';
	} elseif (isset($_POST['kanan'])) {
		$_SESSION['align'] = 'right';
	}
	if (isset($_POST['matikan'])) {
		$disabled = 'readonly';
	} elseif (isset($_POST['nyalakan'])) {
		$disabled = '';
	} else {
		$disabled = '';
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ini nomor 3</title>
</head>
<body>
	<h3 align="center">study kasus 3</h3>
	<style type="text/css">
		input {
			width: 120px;
		}
	</style>
		<form method="post">
			<table align="center" border="3">
				<tr>
					<td  colspan="3" style="text-align: center;"><h3>Masukan Kata Di Bawah Ini</h3></td>
				</tr>
				<tr>
					<td colspan="3">
						<input type="text" name="kata" 
				style=" width: 350px; color: <?php echo $_SESSION['warna']; ?>; text-align: <?php echo $_SESSION['align']; ?>;"
				value=" <?php echo ($kata) ?> " <?php echo "$disabled"; ?> >
				 	</td>
				</tr>
			<tr>
				<td align="center">Warna</td>
				<td align="center">Alignment</td>
				<td align="center">Aksi</td>
			</tr>
			<tr>
				<td><input type="submit" name="merah" value="Merah"></td>
				<td><input type="submit" name="kiri" value="Kiri"></td>
				<td><input type="submit" name="reset" value="Reset"></td>
			</tr>
			<tr>
				<td><input type="submit" name="biru" value="Biru"></td>
				<td><input type="submit" name="tengah" value="Tengah"></td>
				<td><input type="submit" name="matikan" value="Matikan"></td>
			</tr>
			<tr>
				<td><input type="submit" name="hijau" value="Hijau"></td>
				<td><input type="submit" name="kanan" value="Kanan"></td>
				<td><input type="submit" name="nyalakan" value="Nyalakan"></td>
			</tr>
		</table>
	</form>
</body>
</html>