<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style type="text/css">
        .tombol{
            margin-bottom: 20px;
        }

        h1{
        	text-align: center;
        }

        .box {
        	border-style: outset;
        	padding: 25px;
        	border-radius: 40px 40px 40px 40px;
        }

        .btn-danger{
        	padding: 5px;
        }

        .btn-warning{
        	padding: 5px;
        }
    </style>
</head>
<body>
	<h1>ABSENSI SISWA</h1>
	<br>
	<div class="box">

<div class="table-responsive">

	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
				<th>NO</th>
                <th>NAMA</th>
                <th>ABSENSI</th>
                <th>WAKTU SEKARANG</th>
				<th>AKSI</th>

            </tr>
        </thead>
        <tbody>
			<tr>
				<td></td>
				<td></td>
				<td>
  					<input type="radio" checked="checked" name="radio">
  					<span class="checkmark">Hadir</span>
					
					
  					<input type="radio" checked="checked" name="radio">
  					<span class="checkmark">Sakit</span>
					
					
  					<input type="radio" checked="checked" name="radio">
  					<span class="checkmark">Alfa</span>
					
				</td>
				<td></td>
				<td style="text-align: center;"><a href="edit_data_guru.php?edit=<?php echo $hasil['nip']; ?>" class="btn btn-success">Konfirmasi</a>
			</tr>	
        </tbody>
    </table>
    </div>
	</div>
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
