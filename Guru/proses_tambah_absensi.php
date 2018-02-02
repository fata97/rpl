<?php
include "../include/koneksi.php";

$tanggal = $_POST["tanggal"];

if(empty($_POST["hadir"])){
	$hadir[] = 0;
}else{
	$hadir[] = 1;
}


if(empty($_POST["sakit"])){
	$sakit[] = 0;
}else{
	$sakit[] = 1;
}

if(empty($_POST["izin"])){
	$izin[] = 0;
}else{
	$izin[] = 1;
}

if(empty($_POST["alfa"])){
	$alfa[] = 0;
}else{
	$alfa[] = 1;
}
// $hadir = $_POST["hadir"];
// $sakit = $_POST["sakit"];
// $izin = $_POST["izin"];
// $alfa = $_POST["alfa"];
// $kehadiran = $_POST["kehadiran"];
$nis = $_POST["nis"];
$id_mapel = $_POST["id_mapel"];
$jumlah_dipilih = count($nis);

// if ($kehadiran == "hadir") {
//     $hadir[] = 1;
//     $alfa = 0;
//     $izin = 0;
//     $sakit = 0;
// }elseif ($kehadiran == "alfa") {
//     $hadir = 0;
//     $alfa = 1;
//     $izin = 0;
//     $sakit = 0;
// }elseif ($kehadiran == "izin") {
//     $hadir = 0;
//     $alfa = 0;
//     $izin = 1;
//     $sakit = 0;
// }elseif($kehadiran == "sakit") {
//     $hadir = 0;
//     $alfa = 0;
//     $izin = 0;
//     $sakit = 1;
// }else{
//   $hadir = 0;
//   $alfa = 0;
//   $izin = 0;
//   $sakit = 0;
// }

// for($x=0;$x<$jumlah_dipilih;$x++){
// echo $hadir[$x];
// }

// if(empty($_POST["tanggal"]) || empty($_POST["kehadiran"]) || empty($_POST["nis"]) || empty($_POST["id_mapel"])){
// 	echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
// 	echo '<meta http-equiv="refresh" content="0; url=data_absensi.php">';
// }else{
for($x=0;$x<$jumlah_dipilih;$x++){
 mysqli_query($conn, "INSERT INTO `absensi`(`id_absensi`, `tanggal`, `hadir`, `alfa`, `izin`, `sakit`, `nis`, `id_mapel`)
		VALUES (NULL, '$tanggal[$x]', '$hadir[$x]', '$alfa[$x]', '$izin[$x]', '$sakit[$x]', '$nis[$x]', '$id_mapel[$x]')");
	// mysql_query("INSERT INTO makanan values('','$makanan')");
}
	// $sql = "";
	// 		$kueri =
 echo "<script language='javascript'>alert('Berhasil Absen');</script>";
  	echo '<meta http-equiv="refresh" content="0; url=data_absensi.php">';

?>
