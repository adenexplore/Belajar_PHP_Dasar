	<?php
if (isset($_POST['ceksaldo'])) {
	$saldoawal = $_POST['saldoawal'];
	$bunga = $_POST['bunga'];
	$lama = $_POST['lama'];
	$total = $saldoawal+($saldoawal * $bunga * $lama);
echo "Hallo nasabah yang terhormat, berikut saldo akhir anda setelah menabung  selama". $lama . "Bulan.Dengan rincian  sebagai berikut:<br>";
echo "saldo awal : Rp." . $saldoawal;
echo "<br>besar bunga : Rp." . $bunga;
echo "<br>lama menabung: " .  $lama . "bulan";
echo "<br>saldo akhir : Rp." . $total;

echo "<br> silahkan menikmati layanan lainnya yang tidak kami sediakan pada bank ini,selamat menabung ";
	}
?>