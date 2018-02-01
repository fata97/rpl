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
  $siswa = intval($_GET['mapel']);

  include "../include/koneksi.php";

  $sql="SELECT mapel.nama, guru.nama_guru, sum(absensi.hadir) as hadir, sum(absensi.sakit) as sakit, sum(absensi.izin) as izin, sum(absensi.alfa) as alfa FROM ((((absensi join siswa on absensi.nis = siswa.nis) join detail_mapel_siswa on siswa.nis = detail_mapel_siswa.nis) join mapel on detail_mapel_siswa.id_mapel = mapel.id_mapel) join detail_mapel_guru
        on mapel.id_mapel = detail_mapel_guru.id_mapel) join guru on detail_mapel_guru.nip = guru.nip WHERE siswa.nis = '".$siswa."'";
  $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
  echo "<table id='example' class='table table-striped table-bordered' cellspacing='0' width='100%''>
          <thead>
              <tr>
              <th>No</th>
              <th>Mapel</th>
              <th>Nama Guru</th>
              <th>Hadir</th>
              <th>Sakit</th>
              <th>Izin</th>
              <th>Alfa</th>
              </tr>
          </thead>
      ";

    if ($num>0) {
      $i =1;
      while($row = mysqli_fetch_array($result)){
      echo "<tbody><tr>";
      echo "<td>" . $i . "</td>";
      echo "<td>" . $row['nama'] . "</td>";
      echo "<td>" . $row['nama_guru'] . "</td>";
      echo "<td>" . $row['hadir'] . "</td>";
      echo "<td>" . $row['sakit'] . "</td>";
      echo "<td>" . $row['izin'] . "</td>";
      echo "<td>" . $row['alfa'] . "</td>";
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
