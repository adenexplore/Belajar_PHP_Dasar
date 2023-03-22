<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POST Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="hiasan.css">
</head>
<body bgcolor="green">
	<form method="POST">
		<table border="10" align="center">
			<div class="body1">
			    <h1 align="center">Pendaftaran Online Universitas  Aden Rimba</h1>
		    </div>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="lahir"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><select name="tanggal">
					<option selected="selected">Tanggal</option>
						<?php
						    for($a=1; $a<=31; $a+=1) { 
							    echo "<option value=$a> $a </option>";
						    }
						?>
				</select>			
				<select name="bulan">
                    <option value="" selected="selected">Bulan
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select> 
				<select name="tahun">
					<option selected="selected">Tahun</option>
						<?php
							for($c=1990; $c<=2003; $c+=1){
							    echo "<option value=$c> $c </option>";
							}
						?>
				</select>
                </td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="kelamin" value="Perempuan">Perempuan
					<input type="radio" name="kelamin" value="Laki-laki">Laki-laki
				</td>
			</tr>
			<tr>
				<td>Asal Sekolah</td>
				<td><input type="text" name="asalsekolah"></td>
			</tr>
			<tr>
				<td>Nilai UN</td>
				<td><input type="text" name="nilaiun"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="simpan" value="Kirim"></td>
			</tr>	
			<tr>
				<td></td>
				<td><input type="reset" name="Reset"></td>
			</tr>
					</option>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>

<?php

if(isset($_POST['simpan'])){
		$nama = $_POST['nama'];
		$lahir = $_POST['lahir'];
		$tanggal = $_POST['tanggal'];
		$bulan = $_POST['bulan'];
		$tahun = $_POST['tahun'];
		$alamat = $_POST['alamat'];
		$jeniskelamin = $_POST['kelamin'];
		$asalsekolah = $_POST['asalsekolah'];
		$nilaiUN = $_POST['nilaiun'];

		echo "Nama Lengkap	: " . $nama . "<br/>" . "Tempat Lahir	: " . $lahir . "<br/>" . "Tanggal Lahir	: " . $tanggal . "-" . $bulan . "-" . $tahun . "<br/>" . "Alamat	: " . $alamat . "<br/>" . "Jenis kelamin	: " . $jeniskelamin . "<br/>" . "Asal Sekolah	: " . $asalsekolah . "<br/>". "Nilai UN 	: " . $nilaiUN;
	}
?>