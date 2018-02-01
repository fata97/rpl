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
	echo "<script language='javascript'>alert('Gagal di Edit');</script>";
	echo '<meta http-equiv="refresh" content="0; url=edit_data_guru.php">';
}else{
	$sql = "UPDATE `guru` SET `nama_guru`='$nama_guru', `alamat`='$alamat', `no_hp`='$no_hp', `username`='$username', `password`='$password' WHERE `nip` = '$nip'";
				$kueri = mysqli_query($conn, $sql);
				$sql2 = "UPDATE `detail_mapel_guru` SET `id_mapel`='$mapel' WHERE `nip` = '$nip'";
							$kueri2 = mysqli_query($conn, $sql2);
				echo "<script language='javascript'>alert('Berhasil di Edit');</script>";
				echo '<meta http-equiv="refresh" content="0; url=data_guru.php">';
	}
?>
