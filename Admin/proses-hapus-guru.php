<?php
// Load file koneksi.php
include "../include/koneksi.php";
// Ambil data NIS yang dikirim oleh index.php melalui URL
$nip = $_GET['hapus'];

// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query = "DELETE FROM guru WHERE nip='".$nip."'";
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
$query2 = "DELETE FROM detail_mapel_guru WHERE nip='".$nip."'";
$sql2 = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  echo "<script language='javascript'>alert('Berhasil di Hapus');</script>";
  echo '<meta http-equiv="refresh" content="0; url=data_guru.php">';
}else{
  // Jika Gagal, Lakukan :
  echo "<script language='javascript'>alert('Gagal di Hapus');</script>";
	echo '<meta http-equiv="refresh" content="0; url=data_guru.php">';
}
?>
