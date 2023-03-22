<!DOCTYPE html>
<html>
<head>
	<title>kalkulator</title>
</head>
<body>
	<center>
		<div class="tabel">
			<form name=form1 action="hitung.php" method="post">
				<table border="10" width="50%">
					<tr>
						<td colspan="2" bgcolor="red">
							<div align="center" >
								<b>kalkulator</b>
							</div>
							</td>
						</tr>
						<tr>
						<td width="40%" bgcolor="red">
							<div align="center">
								<b> angka1</b>
							</div>
						</td>
						<td width="40%">
							<div align="center">
								<input type="text" name="input1">
							</div>
						</td>
					</tr>
					<tr>
						<td width="40%" bgcolor="yellow">
							<div align="center">
								<b> operator</b>
							</div>
						</td>
						<td>
							<div align="center">
								<select name="hitung">
									<option value="*">perkalian</option>
									<option value="/">pembagian</option>
									<option value="+">pertambahan</option>
									<option value="-">pengurangan</option>
								</select>
							</div>
						</td>
					</tr>
						<tr>
							<td bgcolor="blue">
							<div align="center">
								<b>angka2</b>
							</div>
						</td>
						<td>
							<div align="center">
								<input type="text" name="input2">
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<div align="center">
								<input type="submit" name="submit" value="hitung">
							</div>
						</td>
					</tr>
				</table>
			</form>
</body>
</html>