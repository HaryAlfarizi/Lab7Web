<?php
if (isset($_POST['submit'])){ 
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$pekerjaan = $_POST['pekerjaan'];

function hitung_umur($tgl_lahir){
	$birthDate = new DateTime($tgl_lahir);
	$today = new DateTime("today");
	if ($birthDate > $today) { 
	    exit("0 tahun 0 bulan 0 hari");
	}
	$y = $today->diff($birthDate)->y;
    return $y." tahun ";
    
}

if ($pekerjaan == "karyawan") {
    $gaji = "Rp.5000000";
} elseif ($pekerjaan == "barista") {
    $gaji = "Rp.3000000";
} else {
}

$umur = hitung_umur($tgl_lahir);
echo "
<html>
<head>
</head>
<body>
    <h1>Lab7Web : Hary Alfarizi</h1>
    <p>Nama : $nama</p>
    <p>Tanggal lahir: $tgl_lahir </p>
    <p>Pekerjaan : $pekerjaan </p>
    <p>Umur : $umur </p>
    <p>Gaji: $gaji </p>
</body>
</html>
";}
?>