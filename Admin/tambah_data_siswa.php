<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
  	<h3>TAMBAH DATA SISWA</h3>
  	<hr>
  		<br>
	<form action="proses-tambah-siswa.php" method="POST" >
        <div class="form-group">
          <label>NIS Siswa</label>
          <input type="text" class="form-control" name="nis" placeholder="NIS Siswa" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Nama Siswa</label>
          <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Agama</label>
          <input type="text" class="form-control" name="agama" placeholder="Agama" style="width: 250px" >
        </div>
				<div class="form-group">
          <label>Alamat</label>
					<textarea name="alamat" rows="3" class="form-control" style="width: 250px"></textarea>
				</div>
        <div class="form-group">
          <label>Nomer Handphone</label>
          <input type="text" class="form-control" name="no_hp" placeholder="Nomer Handphone" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Kelas</label>
					<select class="form-control" name="kelas" style="width: 250px">
						<?php
								include "../include/koneksi.php";

								$sql = mysqli_query($conn, "SELECT * FROM kelas ORDER BY nama_kelas");
								while ($hasil = mysqli_fetch_array($sql)) {
						 ?>
						<option value="<?php echo $hasil['id_kelas']; ?>"><?php echo $hasil['nama_kelas']; ?></option>
					<?php } ?>
					</select>
		    </div>
				<div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" name="username" placeholder="Username" style="width: 250px" >
        </div>
				<div class="form-group">
          <label>Password</label>
          <input type="text" class="form-control" name="password" placeholder="password" style="width: 250px" >
        </div>
      <input type="submit" name="submit" value="Simpan" class="btn btn-success">
      <a href="data_siswa.php"><input type="button" class="btn btn-default" value="Batal" ></a>
      </form>
			<br>
</div>
</body>
</html>
