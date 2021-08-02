<?php
include '../model/database_barang.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah"){
    $db->input($_POST['id_barang'], $_POST['nama'], $_POST['jenis'], $_POST['harga'], $_POST['jumlah']);
    header("location:../view/barang_user.php");
} else if($aksi == "hapus"){
    $db->hapus($_GET['id_barang']);
    header("location:../view/barang_user.php");
} else if($aksi == "update"){ 
    $db->update($_POST['id_barang'], $_POST['nama'], $_POST['jenis'], $_POST['harga'], $_POST['jumlah']);
    header("location:../view/barang_user.php");
}
?>