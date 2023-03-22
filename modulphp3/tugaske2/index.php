<!DOCTYPE html>
<html>
<head>
	<title>kosakata</title>
</head>
<body>
	<H2> 2.Persamaan kata </H2>
	<form method="post">
		<table >
               <tr>
                    <td align="center">kata1</td>
                    <td align="center">kata2</td>
               </tr>
               <tr>
                    <td><input type="text" name="kata1"></td>
                    <td><input type="text" name="kata2"></td>
               </tr>
               <tr> 
					<td><input style="width : 170px"; type="submit" name="cekKata" value="Cek persamaan"></td>
	</table>
	</form>
</body>
</html>
<?php 
if (isset($_POST['cekKata'])) {
	$kata1 = $_POST['kata1'];
	$kata2 = $_POST['kata2'];

	if ($kata1 == $kata2) {
		echo "Kata sama!";
	}else{
		echo "Kata tidak sama!";
	}
}?>