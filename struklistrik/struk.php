<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			margin-top: 20px;
		}
		b {
			font-size: 12px;
		}
		h4,h5 {
			margin-bottom: -10px;
		}
	</style>
</head>
<body>

	<?php  
	if (isset($_POST['submit'])) {
		$tgl = $_POST['tgl'];
		$jam = $_POST['jam'];
		$nama = $_POST['nama'];
		$jumlah = $_POST['jumlah'];
		$daya = $_POST['daya'];
		$kwh = $_POST['kwh'];
		$harga = $_POST['harga'];
		$token = $_POST['token'];
	}
	?>

	<center>
		<h4>** ALFA CELL **</h4>
		<p>= = = = = = = = = = = = = = = = = = = = = =</p>
		<h5>STRUK PEMBAYARAN LISTRIK PRABAYAR</h5>
		<p><?php echo $tgl; ?> &nbsp; <?php echo $jam; ?></p>
	</center>

	<table align="center" cellpadding="5">
			<tr>
				<td><b>NAMA</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td><?php echo $nama; ?></td>
			</tr>
			<tr>
				<td><b>NOMINAL</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td><?php echo $jumlah; ?></td>
			</tr>
			<tr>
				<td><b>DAYA</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td><?php echo $daya; ?></td>
			</tr>
			<tr>
				<td><b>KWH</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td><?php echo $kwh; ?></td>
			</tr>
			<tr>
				<td><b>HARGA</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td><?php echo $harga; ?></td>
			</tr>
			<tr>
				<td><b>TOKEN</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td><?php echo $token; ?></td>
			</tr>
	</table>

	<center>
		<p>= = = = = = = = = = = = = = = = = = = = = =</p>
		<h5>INFORMASI HUBUNGI CALL CENTER</h5>
		<h5>(Kode Area) 123</h5>
	</center>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>
