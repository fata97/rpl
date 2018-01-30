<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
            </tr>
        </thead>
        <tbody>
					<?php
							include "include/koneksi.php";
							$i = 0 + 1;
							$sql = mysqli_query($conn, "SELECT * FROM kelas ORDER BY nama_kelas");
							while ($hasil = mysqli_fetch_array($sql)) {
					 ?>
					 <tr>
						<td style="text-align: center;"><?php echo $i; ?></td>
						<td><?php echo $hasil['nama_kelas']; ?></td>
						<td style="text-align: center;"><a href="editkelas.php?edit=<?php echo $hasil['id_kelas']; ?>" class="btn btn-warning">Edit</a>
						<a href="proses-hapus-kelas.php?hapus=<?php echo $hasil['id_kelas']; ?>" class="btn btn-danger">Hapus</a></td>
				</tr>
				<?php
						$i++;
						}
					?>
        </tbody>
    </table>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
    $('#example').DataTable();
	} );
	</script>
</body>
</html>
