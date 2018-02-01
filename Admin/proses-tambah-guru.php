<?php
include "../include/koneksi.php";

$nip = $_POST["nip"];
$nama_guru = $_POST["nama_guru"];
$no_hp = $_POST["no_hp"];
$alamat = $_POST["alamat"];
$username = $_POST["username"];
$password = $_POST["password"];
$mapel = $_POST["mapel"];

if(empty($_POST["nip"]) || empty($_POST["nama_guru"]) || empty($_POST["no_hp"]) || empty($_POST["alamat"]) || empty($_POST["username"]) || empty($_POST["password"])){
	echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
	echo '<meta http-equiv="refresh" content="0; url=tambah_data_guru.php">';
}else{
	$sql = "INSERT INTO `guru`(`nip`, `nama_guru`, `alamat`, `no_hp`, `username`, `password`)
			VALUES ('$nip', '$nama_guru', '$alamat', '$no_hp', '$username', '$password')";
			$kueri = mysqli_query($conn, $sql);
			$sql2 = "INSERT INTO `detail_mapel_guru`(`id_mapel_guru`, `nip`, `id_mapel`)
			VALUES (NULL, '$nip', '$mapel')";
			$kueri2 = mysqli_query($conn, $sql2);
			echo "<script language='javascript'>alert('Berhasil di tambahkan');</script>";
			echo '<meta http-equiv="refresh" content="0; url=data_guru.php">';
}
?>
