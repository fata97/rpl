<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
  	<h3>TAMBAH DATA GURU</h3>
  	<hr>
  		<br>
	<form action="#" method="POST" >
        <div class="form-group">
          <label>NIP Guru</label>
          <input type="text" class="form-control" name="NIS" placeholder="NIS Guru" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Nama Guru</label>
          <input type="text" class="form-control" name="nama_guru" placeholder="Nama Guru" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" class="form-control" name="alamat" placeholder="Alamat Guru" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Nomer Handphone</label>
          <input type="text" class="form-control" name="no_hp" placeholder="Nomer Handphone" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" class="form-control" name="Alamat" placeholder="Alamat" style="width: 250px" >
        </div>

      <input type="submit" name="submit" value="Simpan" class="btn btn-success">
      <a href="data_guru.php"><input type="button" class="btn btn-default" value="Batal" ></a>
      </form>
</div>
</body>
</html>