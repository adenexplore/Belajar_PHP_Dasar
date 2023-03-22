<!DOCTYPE html>
<html>
<head>
	<title>ini nomor 2</title>
</head>
<body>
	<h3 align="center">study kasus 2</h3>
	<form method="post">
		<center>
			<table>
				<tr>
					<?php  
						if (isset($_POST['pindahkan'])) {
							$tampung1 = $_POST['kata3'];
							$tampung2 = $_POST['kata1'];
							$tampung3 = $_POST['kata2'];
					?>

					<td>Kata 1 : <input type="text" name="kata1" value="<?php echo $tampung1; ?>"></td>
					<td>Kata 2 : <input type="text" name="kata2" value="<?php echo $tampung2; ?>"></td>
					<td>Kata 3 : <input type="text" name="kata3" value="<?php echo $tampung3; ?>"></td>

					<?php  
					} else {
					?>

				</tr>
				<tr>
					<td>Kata 1 <input type="text" name="kata1"></td>
					<td>Kata 2 <input type="text" name="kata2"></td>
					<td>Kata 3 <input type="text" name="kata3"></td>
					<input type="submit" name="pindahkan" style="width: 685px;" value="Pindahkan">
					<?php } ?>
				</tr>
			</table>
		</center>
	</form>

</body>
</html>
