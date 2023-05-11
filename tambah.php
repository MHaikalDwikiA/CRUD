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
		.page-header h1{
            margin-top: 0;
			font-weight: 600;
        }
        td{
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1 style="text-align: center;">Tambah Data Siswa</h1>
					<?php
					if (isset($_GET['pesan'])){
						$pesan = $_GET['pesan'];
						if($pesan == "gagal"){
							echo "Data Tidak Boleh Kosong.<br>";
						}
					elseif($pesan == "duplikat"){
						echo "NIS Sudah Digunakan.<br>";
						}else(empty($pesan));{
							echo "Masukkan Data";
						}
					}
					?>
                    <a href="index.php" style="margin-top: 30px;" class="btn btn-primary pull-right">Lihat Semua Data</a>
                </div>
            </div>
        </div>

		<form method="post" action="tambah_aksi.php" class=" g-5"> 
  		<div class=" my-5 " style="width: 500px">
    		<label for="inputEmail4" class="form-label">NIS</label>
    		<input type="text" class="form-control" name="nis">
  		</div>
  		<div class=" my-5" style="width: 500px">
    		<label for="inputPassword4" class="form-label">Nama</label>
    		<input type="text" class="form-control" name="nama">
  		</div>
  		<div class=" my-5" style="width: 500px">
    		<label for="inputtanggal4" class="form-label">Tanggal Lahir</label>
    		<input type="date"  class="form-control" name="tanggal">
  		</div>
  		<div class=" my-5" style="width: 500px">
    		<label for="inputkelamin4" class="form-label">Kelamin</label>
			<select name="kelamin" class="form-control">
				<option selected>Choose the gender</option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
  		</div>
  		<div class=" my-5" style="width: 500px">
    		<label for="inputAddress" class="form-label">Alamat</label>
    		<input type="text" class="form-control" name="alamat">
  		</div>
  		<div class=" my-5" style="width: 500px">
    		<label for="inputAddress2" class="form-label">Email</label>
    		<input type="email" class="form-control" name="email">
  		</div>
  		<div class=" my-5" style="width: 500px">
    		<label for="inputCity" class="form-label">No HP</label>
    		<input type="text" class="form-control" name="no hp">
		<br>
		<div class=" my-5" style="width: 500px">
			<button type="submit" class="btn btn-primary">Simpan</button>	
			<button type="reset" class="btn btn-primary">Reset</button>	
		</div>
  		</div>
		</form>
    </div>
</body>
</html>