<?php
$nilaipertama = @$_POST['nilaipertama'];
$nilaikedua = @$_POST['nilaikedua'];
$hasil= @$_POST['hasil'];

	if (isset($_POST['btambah']))
	{
		$hasil = $nilaipertama + $nilaikedua;
	}
	
	if (isset($_POST['bkurang']))
	 {
	 	$hasil = $nilaipertama - $nilaikedua;
	}
	
	if (isset($_POST['bbagi']))
	 {
		$hasil = $nilaipertama / $nilaikedua;
	}
	
	if (isset($_POST['bkali']))
	 {
		$hasil = $nilaipertama * $nilaikedua;
	}
	if (isset($_POST['bpersen']))
	 {
		$hasil = $nilaipertama / 100 * $nilaikedua;
	}
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>kalkulator</title>
</head>
<body bgcolor="oranye">
	<form method="post">
		<table align= "center" border="10">
			<tr>
				<td  align= "center" colspan="3" bgcolor="blue sky">kalkulator</td>
			</tr>
			<tr>
				<td colspan="3"> <hr> </td>
			</tr>
			<tr>
				<td>nilaipertama</td>
				<td>:</td>
				<td bgcolor="green">
					<input type="text" name="nilaipertama" value="<?=$nilaipertama?>">
				</td>
			</tr>
			<tr>
					<td>nilaikedua</td>
				<td>:</td>
				<td bgcolor="yellow">
					<input type="text" name="nilaikedua" value="<?=$nilaikedua?>">
				</td>
			</tr>
			<tr>
			    <td>opsional</td>
				<td>:</td>
				<td bgcolor="white">
					<input type="submit" name="btambah" value="+">
					<input type="submit" name="bkurang" value="-">
					<input type="submit" name="bbagi" value="/">
					<input type="submit" name="bkali" value="*">
					<input type="submit" name="bpersen" value="%">
					<input type="submit" name="bclean" value="C">
				
				</td>
			</tr>
			<tr>
					<td>hasil</td>
				<td>:</td>
				<td bgcolor="blue">
					<input type="hasil" name="thasil" value="<?=$hasil?>">

				</td>
				</tr>
				<tr>
				<td colspan="3"> <hr> </td>
			</tr>
		</table>
	</form>
		
</body>
</html>