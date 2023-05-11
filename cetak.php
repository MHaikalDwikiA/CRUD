<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Data User</title>

</head>
<body>
    <h2 class="text-center my-3">Data User</h2>
    <div class="mx-5">
        <table class="table table-bordered me-3" border="1">
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Kelamin</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No HP</th>
            </tr>
            <?php
                include 'koneksi.php';
                $data = mysqli_query($db_link,"select * from data_siswa");
                $no = 1;
                while($d = mysqli_fetch_array($data)){
    
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
            </tr>
    <?php } ?>
        </table>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>