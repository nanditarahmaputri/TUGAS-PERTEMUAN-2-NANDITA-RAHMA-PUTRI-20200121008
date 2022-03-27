<!doctype html>
<html lang="en">

<head>
    <tittle>PENJUALAN FROZEN FOOD</tittle>
</head>

<body>
    <h1>Tambah</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>Kode Barang</label>
        <br>
        <input type="number" name="kd_barang">
        <br>
        <label>Nama Barang</label>
        <br>
        <input type="text" name="nm_barang">
        <br>
        <label>Distributor</label>
        <br>
        <input type="text" name="distributor">
        <br>
        <label>Isi</label>
        <br>
        <input type="number" name="isi">
        <br>
        <label>Harga</label>
        <br>
        <input type="number" name="harga">
        <br><br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>


        
        
    