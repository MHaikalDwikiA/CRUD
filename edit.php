<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
	<style>
		.page-header h2 {
			margin-top: 0;
		}

		td {
			padding: 5px;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header clearfix">
					<h2 class="pull-left">Edit Data Penduduk</h2>
					<a href="index.php" class="btn btn-primary pull-right">Lihat Semua Data</a>
				</div>
			</div>
		</div>

		<?php
		include "koneksi.php";
		$nis = $_GET['nis'];
		$data = mysqli_query($db_link, "SELECT * FROM data_siswa WHERE nis='$nis'");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<form method="post" action="update.php">
				<table>
					<tr>
						<td><label class="form-label">NIS</label></td>
						<td>
							<input type="hidden" style="width: 500px" name="nis" value="<?php echo $d['nis']; ?>">
							<input class="form-control" type="text" name="nis" disabled="true" autocomplete="off" value="<?php echo $d['nis']; ?>">
						</td>
					</tr>
					<tr>
						<td><label class="form-label">Nama</label></td>
						<td><input class="form-control" type="text" name="nama" autocomplete="off" value="<?php echo $d['nama']; ?>"></td>
					</tr>
					<td><label class="form-label">Alamat</label></td>
					<td><input class="form-control" type="text" name="alamat" autocomplete="off" value="<?php echo $d['alamat']; ?>"></td>
					</tr>
					<tr>
						<td><label for="inputtanggal4" class="form-label">Tanggal Lahir</label></td>
						<td><input type="date" class="form-control" name="tanggal" value="<?php echo $d['tanggal']; ?>"></td>
					</tr>
					<tr>
						<td><label for="inputkelamin4" class="form-label">Kelamin</label></td>
						<td><select name="kelamin" class="form-control">
								<option value="Laki-laki" <?php if ($d['kelamin'] == 'Laki-laki') echo ' selected="selected"'; ?>>Laki-laki</option>
								<option value="Perempuan" <?php if ($d['kelamin'] == 'Perempuan') echo ' selected="selected"'; ?>>Perempuan</option>
							</select></td>
					</tr>
					<tr>
						<td><label class="form-label">Email</label></td>
						<td><input class="form-control" type="text" name="email" autocomplete="off" value="<?php echo $d['email']; ?>"></td>
					</tr>
					<tr>
						<td><label class="form-label">No HP</label></td>
						<td><input class="form-control" type="text" name="no_hp" autocomplete="off" value="<?php echo $d['no_hp']; ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="btn btn-primary" type="submit" value="SIMPAN"></td>
					</tr>
				</table>
			</form>
		<?php } ?>
	</div>
</body>

</html>