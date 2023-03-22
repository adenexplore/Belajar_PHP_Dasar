<?php  

if (isset($_POST['submit'])) {
	$nisn = $_POST['nisn']; 
	echo "NISN : " . $nisn; echo "<br>";
	$nama = $_POST['nama']; 
	echo "Nama : " . $nama;  echo "<br>";
	$jeniskelamin = $_POST['jeniskelamin']; 
	echo "Jenis Kelamin : " . $jeniskelamin;  echo "<br>";
	$tanggal = $_POST['tanggal']; 
	echo "Tanggal Lahir : " . $tanggal;  echo "<br>";
	$alamat = $_POST['alamat'];	
	echo "Alamat : " . $alamat;  echo "<br>";
	$agama = $_POST['agama']; 
	echo "Agama : " . $agama;  echo "<br>";

	$indo = $_POST['indo'];
	$mtk = $_POST['mtk'];
	$inggris = $_POST['inggris'];
	$produktif = $_POST['produktif'];

	echo "<br>";

	$total;
	$total = ($indo + $mtk + $inggris + $produktif);
	echo "Total Nilai : " . $total;
	echo "<br>";
	$ratarata = ($indo + $mtk + $inggris + $produktif) / 4;
	echo "Rata - Rata : " . $ratarata;
	echo "<br>";
	if ($ratarata >= 75) {
		echo " Ket : Lulus";
	} else {
		echo " Ket : Tidak Lulus";
	}
}

?>