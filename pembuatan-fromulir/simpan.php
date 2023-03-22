<?php 

       
	if(isset($_POST['simpannya'])){
		$nama = $_POST['namanya'];
		$tempatlahir = $_POST['tempatlahirnya'];
		$tanggallahir = $_POST['tanggalnya'];
		$alamatrumah = $_POST['alamatrumahnya'];
		$jeniskelamin = $_POST['kelamin'];
		$asalsekolah = $_POST['asalsekolah'];
		$nilaiUN = $_POST['nilaiun'];

		echo "Nama Lengkap	: " . $nama . "<br/>" . "Tempat Lahir	: " . $tempatlahir . "<br/>" . "Tanggal Lahir :" . $tanggallahir ."<br/>" . "Alamat rumah	:" . $alamatrumah . "<br/>" . "Jenis kelamin	: " . $jeniskelamin . "<br/>" . "Asal Sekolah	:" . $asalsekolah . "<br/>". "Nilai UN 	: " . $nilaiUN;
	}
?>