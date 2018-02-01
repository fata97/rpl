<!DOCTYPE html>
<html>
<head>
<style>
table {
   width: 100%;
   border-collapse: collapse;
}

table, td, th {
   border: 1px solid black;
   padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

  <?php
  $kelas = intval($_GET['kelas']);
  $mapel = intval($_GET['mapel']);

  include "../include/koneksi.php";
  $i = 1;
  $sql="SELECT siswa.nis, siswa.nama FROM siswa join kelas on siswa.kelas_id = kelas.id_kelas WHERE kelas.id_kelas = '".$kelas."'";
  $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
  echo "<table id='example' class='table table-striped table-bordered' cellspacing='0' width='100%''>
          <thead>
              <tr>
  								<th>NO</th>
                  <th>NAMA</th>
                  <th>WAKTU SEKARANG</th>
                  <th>ABSENSI</th>
  								<th>AKSI</th>
              </tr>
          </thead>
      ";

    if ($num>0) {
      $tgl = date('Y-m-d');
      while($row = mysqli_fetch_array($result)){
      echo "<tbody><tr>";
      echo "<td>" . $i . "</td>";
      echo "<td>" . $row['nama'] . "</td>";
      echo "<td>" . $tgl . "</td>";
      echo "

      <td>
      <form action='proses_tambah_absensi.php' method='post' class='form-inline'>
      <input type='radio' name='kehadiran' id='kehadiran' value='hadir' checked>
  					<span class='checkmark'>Hadir</span>
            <input type='radio' name='kehadiran' id='kehadiran' value='sakit' >
        		<span class='checkmark'>Sakit</span>
            <input type='radio' name='kehadiran' id='kehadiran' value='izin' >
  					<span class='checkmark'>Izin</span>
            <input type='radio' name='kehadiran' id='kehadiran' value='alfa' >
  					<span class='checkmark'>Alfa</span>

      <input type='hidden' name='tanggal' value='". $tgl ."' >
      <input type='hidden' name='nis' value='". $row['nis'] ."' >
      <input type='hidden' name='id_mapel' value='". $mapel ."' >
      <input id='tombol' type='submit' name='submit' value='Konfirmasi' class='btn btn-success'></form></td>";
      echo "</tr></tbody>";
      $i++;
      }
    }else{
      echo "<tbody></tbody>";
    }



echo "</table>";
  mysqli_close($conn);
  ?>
</body>
</html>
