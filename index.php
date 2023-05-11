<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"   />
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.css">

</head>

<body>
    <div class="container" style="margin-top: 20px;">
        <div class="card-header bg-success">
            <h1 style="text-align: center;" class="text-white">Data Siswa</h1>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-8">
                <a href="tambah.php" type="button" class="btn btn-success" style="margin-bottom: 20px">Tambah Data</a>
                <a href="cetak.php" target="_blank" class="btn btn-success" style="margin-bottom: 20px;"><i class="fa-solid fa-print"></i></a>
                <?php
                if (isset($_GET['pesan'])) {
                    $pesan = $_GET['pesan'];
                    if ($pesan == "input") {
                        echo "Data berhasil di input.<br>";
                    } elseif ($pesan == "update") {
                        echo "Data berhasil di update.<br>";
                    } elseif ($pesan == "hapus") {
                        echo "Data berhasil di hapus.<br>";
                    } else {
                        echo "Data Gagal";
                    }
                }

                ?>
            </div>
            <div class="col-4">
                <form class="d-flex" role="search" action="index.php" method="get">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    <select name="berdasarkan" class="form-control-sm btn btn-outline-success ms-2" id="">
                        <option value="nis">NIS</option>
                        <option value="nama">Nama</option>
                        <option value="kelamin">Tanggal Lahir</option>
                        <option value="tanggal">Kelamin</option>
                        <option value="alamat">Alamat</option>
                        <option value="email">Email</option>
                        <option value="no_hp">No HP</option>
                    </select>
                </form>
            </div>
        </div>
        <table id="myTable" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Kelamin</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th colspan="2">Opsi</th>
                </tr>
            </thead>

            <tbody>

                <?php
                include 'koneksi.php';
                error_reporting(0);
                if (isset($_GET['cari'])) {
                    $cari = $_GET['cari'];
                    $berdasarkan = $_GET['berdasarkan'];
                    $data = mysqli_query($db_link, "select * from data_siswa where " . $berdasarkan . " like '%" . $cari . "%'");
                } else {
                    if (empty($_GET['cari'])) {
                        # code...
                        $data = mysqli_query($db_link, "select * from data_siswa");
                    }
                }
                $no = 1;
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nis']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['tanggal']; ?></td>
                        <td><?php echo $d['kelamin']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['email']; ?></td>
                        <td><?php echo $d['no_hp']; ?></td>
                        <td class="d-flex gap-3">
                            
                            <a href="detail.php?nis=<?php echo $d['nis']; ?>"><i class="fa-solid fa-eye"></i></a>
                            <a href="edit.php?nis=<?php echo $d['nis']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="hapus.php?nis=<?php echo $d['nis']; ?>" onclick="return confirm('Yakin Hapus?')"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>

                <?php
                }
                echo "</tbody>";
                echo "</table>";
                echo "</font>";
                ?>
    </div>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>