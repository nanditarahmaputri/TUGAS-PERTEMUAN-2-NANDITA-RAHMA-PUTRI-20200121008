<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
    $kd_barang = $_POST['kd_barang'];
    $nm_barang = $_POST['nm_barang'];
    $distributor = $_POST['distributor'];
    $isi = $_POST['isi'];
    $harga = $_POST['harga'];
    $model = new Model();
    $model->insert($kd_barang, $nm_barang, $distributor, $isi, $harga);
    header('location:index.php');
}
if (isset($_POST['submit_edit'])){
    $kd_barang = $_POST['kd_barang'];
    $nm_barang = $_POST['nm_barang'];
    $distributor = $_POST['distributor'];
    $isi = $_POST['isi'];
    $harga = $_POST['harga'];
    $model = new Model();
    $model->insert($kd_barang, $nm_barang, $distributor, $isi, $harga);
    header('location:index.php');
}
if (isset($_GET['kd_barang'])) {
    $id = $_GET['kd_barang'];
    $model = new Model();
    $model->delete($id);
    header('location:index.php');
}