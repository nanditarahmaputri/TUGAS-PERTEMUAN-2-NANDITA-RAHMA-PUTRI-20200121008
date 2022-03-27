<?php
include 'Connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }
    public function insert($kd_barang, $nm_barang, $distributor, $isi, $harga)
    {
        $na = $this->na($kd_barang, $nm_barang, $distributor);
        $status = $this->status($na);
        $sql = "INSERT INTO tbl_barang (Kode Barang, Nama Barang, Distributor, Isi, Harga, Berat, status) VALUES ('$kd_barang', '$nm_barang', '$distributor', '$isi', '$harga', '$berta', '$status')";
        $this->conn->query($sql);
    }
    public function tampil_data()
    {
        $sql = "SELECT * FROM tbl_barang";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit($id)
    {
        $sql = "SELECT * FROM tbl_barang WHERE kode produk='$kd_barang'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update($kd_barang, $nm_barang, $distributor, $isi, $harga)
    {
        $na = $this->na($kd_barang, $nm_barang, $distributor);
        $status = $this->status($na);
        $sql = "UPDATE tbl_barang SET kode barang='$kd_barang', nama barang='$nm_barang', distributor='$distributor', isi='$isi', na='$na', status='$status' WHERE kode barang='$kd_barang'";
        $this->conn->query($sql);
    }
    public function delete($nim)
    {
        $sql = "DELETE FROM tbl_barang WHERE kode barang='$kd_barang'";
        $this->conn->query($sql);
    }
}



