<?php
include "../include/koneksi.php";

$tanggal = $_POST["tanggal"];
$kehadiran = $_POST["kehadiran"];
$nis = $_POST["nis"];
$id_mapel = $_POST["id_mapel"];

if ($kehadiran == "hadir") {
    $hadir = 1;
    $alfa = 0;
    $izin = 0;
    $sakit = 0;
}elseif ($kehadiran == "alfa") {
    $hadir = 0;
    $alfa = 1;
    $izin = 0;
    $sakit = 0;
}elseif ($kehadiran == "izin") {
    $hadir = 0;
    $alfa = 0;
    $izin = 1;
    $sakit = 0;
}elseif($kehadiran == "sakit") {
    $hadir = 0;
    $alfa = 0;
    $izin = 0;
    $sakit = 1;
}else{
  $hadir = 0;
  $alfa = 0;
  $izin = 0;
  $sakit = 0;
}



if(empty($_POST["tanggal"]) || empty($_POST["kehadiran"]) || empty($_POST["nis"]) || empty($_POST["id_mapel"])){
	echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
	echo '<meta http-equiv="refresh" content="0; url=data_absensi.php">';
}else{
	$sql = "INSERT INTO `absensi`(`id_absensi`, `tanggal`, `hadir`, `alfa`, `izin`, `sakit`, `nis`, `id_mapel`)
			VALUES (NULL, '$tanggal', '$hadir', '$alfa', '$izin', '$sakit', '$nis', '$id_mapel')";
			$kueri = mysqli_query($conn, $sql);
			echo "<script language='javascript'>alert('Berhasil Absen');</script>";
    	echo '<meta http-equiv="refresh" content="0; url=data_absensi.php">';
}
?>
