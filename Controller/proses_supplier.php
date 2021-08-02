<?php
include '../model/database_supplier.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah"){
    $db->input($_POST['id_supplier'], $_POST['nama_supplier'], $_POST['kota_supplier'], $_POST['no_telp']);
    header("location:../view/supplier.php");
} else if($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../view/supplier.php");
} else if($aksi == "update"){ 
    $db->update($_POST['id_supplier'], $_POST['nama_supplier'], $_POST['kota_supplier'], $_POST['no_telp']);
    header("location:../view/supplier.php");
}
?>