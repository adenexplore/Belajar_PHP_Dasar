<!DOCTYPE html>
<html>
<head>
	<title>form saldo</title>
</head>
<body>
   <h3>perhitungan saldo tabungan</h3>
   <a href="../listprogram.php">kembali kehalaman utama</a>
   <form method="post" action="saldo.php">
   	<table>
   		<tr>
   			<td>masukan saldo awal</td>
   			<td></td>
   			<td>

   				<input type="text" name="saldoawal">
   			</td>
   		</tr>
   		<tr>

   			<td>besar bunga per bulan</td>
   			<td></td>
   			<td><input type="text" name="bunga"></td>
   		</tr>
   		<tr>
   			<td>lama month</td>
   			<td></td>
   			<td><input type="text" name="lama"></td>
   		</tr>
   		<tr>
   			
   			<td></td>
   			<td></td>
   			<td><input type="submit" name="ceksaldo" value="submit"></td>
   		</tr>	
   	</table>		
   </form>
 </body>
</html>