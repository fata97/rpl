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
	<form action="proses-tambah-pakaian.php" method="POST" >
        <div class="form-group">
          <label>NIS Siswa</label>
          <input type="text" class="form-control" name="NIS" placeholder="NIS Siswa" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Nama Siswa</label>
          <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <input type="text" class="form-control" name="Jenis_Pakaian" placeholder="Jenis Kelamin" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Agama</label>
          <input type="text" class="form-control" name="Agama" placeholder="Agama" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" class="form-control" name="Alamat" placeholder="Alamat" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Nomer Handphone</label>
          <input type="text" class="form-control" name="No_HP" placeholder="Nomer Handphone" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Kelas</label>
          <input type="text" class="form-control" name="kelas" placeholder="Kelas Siswa" style="width: 250px" >
        </div>

      <input type="submit" name="submit" value="Simpan" class="btn btn-success">
      <a href="data_siswa.php"><input type="button" class="btn btn-default" value="Batal" ></a>
      </form>
</div>
</body>
</html>