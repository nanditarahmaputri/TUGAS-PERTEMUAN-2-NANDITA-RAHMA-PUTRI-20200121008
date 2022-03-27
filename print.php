<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
    <title>Cetak Data</title>
    <style>
        h1 {
            text-align: center:
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%
        }

        th,
        td {
            padding: 15px;
        }
    </style>
</head>

<body>
    <h1>Data Barang</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Distributor</th>
                <th>Isi</th>
                <th>Harga</th>
                <th>Exp</th>
                <th>Aksi</th>
            </tr>
        </thead?>
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
                        <td><?= $data->harga ?></td>
                        <td><?= $data->exp ?></td>
                        <td><?= $data->aksi ?></td>
                    </tr>
            <?php endforeach;
        } else { ?> 
            <tr>
                <td colspan="9">Belum ada data pada tabel barang.</td>
            </tr>    
        <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>

    



        

