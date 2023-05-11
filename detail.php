<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="./src/js/bootstrap.min.js"></script>
    <title>CRUD</title>
</head>

<body class="bg-light">
    <div class="container-fluid p-5">
        <div class="bg-white shadow rounded p-4">
            <?php
            $nis = $_GET['nis'];
            $sql = "SELECT * FROM data_siswa WHERE nis='$nis'";
            $query = mysqli_query($db_link, $sql);
            while ($data = mysqli_fetch_array($query)) {
            ?>

            <header class="d-flex align-items-center justify-content-between mx-4 mb-4">
                <p class="h3">Detail Data</p>
                <a href="./index.php" class="btn btn-primary">Lihat Semua Data</a>
            </header>

            <table class="table-bordered w-100">
                <tr>
                    <th class="border px-5 py-3 text-right">
                        NIS
                    </th>
                    <td class=" border px-5 py-3 text-left">
                        <?php echo $data['nis'] ?>
                    </td>
                </tr>

                <tr>
                    <th class="border px-5 py-3 text-right">
                        Nama
                    </th>
                    <td class="border px-5 py-3 text-left">
                        <?php echo $data['nama'] ?>
                    </td>
                </tr>

                <tr>
                    <th class="border px-5 py-3 text-right">
                        Tanggal
                    </th>
                    <td class=" border px-5 py-3 text-left">
                        <?php echo $data['tanggal'] ?>
                    </td>
                </tr>

                <tr>
                    <th class="border px-5 py-3 text-right">
                        Kelamin
                    </th>
                    <td class=" border px-5 py-3 text-left">
                        <?php echo $data['kelamin'] ?>
                    </td>
                </tr>

                <tr>
                    <th class="border px-5 py-3 text-right">
                        Alamat
                    </th>
                    <td class=" border px-5 py-3 text-left">
                        <?php echo $data['alamat'] ?>
                    </td>
                </tr>

                <tr>
                    <th class="border px-5 py-3 text-right">
                        Email
                    </th>
                    <td class=" border px-5 py-3 text-left">
                        <?php echo $data['email'] ?>
                    </td>
                </tr>

                <tr>
                    <th class="border px-5 py-3 text-right">
                        No HP
                    </th>
                    <td class=" border px-5 py-3 text-left">
                        <?php echo $data['no_hp'] ?>
                    </td>
                </tr>
            </table>

            <?php } ?>
        </div>
    </div>
</body>

</html>