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
	<form action="proses-tambah-guru.php" method="POST" >
        <div class="form-group">
          <label>NIP Guru</label>
          <input type="text" class="form-control" name="nip" placeholder="NIP Guru" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Nama Guru</label>
          <input type="text" class="form-control" name="nama_guru" placeholder="Nama Guru" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Nomer Handphone</label>
          <input type="text" class="form-control" name="no_hp" placeholder="Nomer Handphone" style="width: 250px" >
        </div>
        <div class="form-group">
          <label>Alamat</label>
					<textarea name="alamat" rows="3" class="form-control" style="width: 250px"></textarea>
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
      <a href="data_guru.php"><input type="button" class="btn btn-default" value="Batal" ></a>
      </form>
			<br>
</div>
</body>
</html>
