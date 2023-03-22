<!DOCTYPE html>
<html>
<head>
	<title>no 3</title>
</head>
<body>

	<h3> STUDY KASUS 3 </h3>


		<form method="post">
		<table  border="0">
			<tr>
				<td>Masukan Suku Pertama :</font></td>
				<td><input type="number" name="a"></td>
			</tr>
			<tr>
				<td>Masukan Suku Berbeda :</font></td>
				<td><input type="number" name="b"></td>
			</tr>
			<tr>
				<td>Banyaknya Suku :</font></td>
				<td><input type="number" name="n"></td>
			</tr>
			<tr>
				<td><input type="submit" name="hitung" value="Hitung"></td>
			</tr>
		</table>


		<?php 
		if (isset($_POST['hitung'])) {
			$total = $_POST['a'] + ($_POST['n'] - 1) * $_POST['b'];
			echo "<br>Suku ke-".$_POST['n']." adalah ".$total;
		} 

		 ?>
	</form>
</body>
</html>



