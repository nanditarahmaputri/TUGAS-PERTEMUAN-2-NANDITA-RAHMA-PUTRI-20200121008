<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">

<head>
    <titlle>Edit Barang</title>
</head>

<body>
    <h1>Edit Barang</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>Kode Barang</label>
        <br>
        <input type="number" name="kd_barang" value="<?php echo $data->kd_barang ?>">
        <br>
        <label>Nama Barang</label>
        <br>
        <input type="text" name="nm_barang" value="<php echo $data->nm_barang ?>">
        <br>
        <label>Distributor</label>
        <br>
        <input type="text" name="distributor" value="<?php echo $data->distributor ?>">
        <br>
        <label>Isi</label>
        <br>
        <input type="number" name="isi" value="<?php echo $data->isi ?>">
        <br>
        <label>Harga</label>
        <br>
        <input type="number" name="harga" value="<?php echo $data->harga ?>">
        <br><br>
        <button type="submit" name="submit_edit">Submit</button>
    </form>
</body>

</html>

