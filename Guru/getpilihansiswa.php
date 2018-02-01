<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$q = intval($_GET['q']);

include "../include/koneksi.php";

$sql="SELECT siswa.nis, siswa.nama FROM siswa join kelas on siswa.kelas_id = kelas.id_kelas WHERE kelas.id_kelas = '".$q."'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
echo "<div class='form-grup'>
  <select id='mapel' class='form-control' name='mapel'  style='width: 250px' >
  <option id='siswa' value=''>Pilih Siswa:</option>;";

  if ($num>0) {
    while($row = mysqli_fetch_array($result)){
      echo "
        <option value=". $row['nis'] .">". $row['nama'] ."</option>
      ";
    }
  }else{
  }
echo "</select>
</div>";
mysqli_close($conn);
?>

</body>
</html>
