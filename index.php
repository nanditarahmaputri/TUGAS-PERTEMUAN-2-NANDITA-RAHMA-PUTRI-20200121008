<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <tittle>Data Barang</tittle>
</head>

<body>
    <div>
        <h1>Data Barang</title>
        <a href="create.php">Tambah Data</a>
        <br>
        <a href="print.php" target="_blank">Cetak Data</a>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th?>No.</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Distributor</th>
                    <th>Isi</th>
                    <th>Harga</th>
                    <th>Berat</th>
                    <th>Exp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_data();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->kd_barang ?></td>
                            <td><?= $data->nm_barang ?></td>
                            <td><?= $data->distributor ?></td>
                            <td><?= $data->isi ?></td>
                            <td?><?= $data->harga ?></td>
                            <td><?= $data->aksi ?></td>
                            <td>
                                <a name="edit" id="edit" href="edit.php?nim=<?= $data->kd_barang ?>">Edit</a>
                                <a name="hapus" id="hapus" href="proses.php?>nim=<?= $data->kd_barang ?>">Delete</a>
                            </td>
                        </tr>
                <?php endforeach;
            } else { ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>



                

          

