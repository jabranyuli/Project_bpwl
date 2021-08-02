<?php
include '../model/database_akses.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah"){
    $db->input($_POST['id_acc'], $_POST['uname'], $_POST['pass'], $_POST['level']);
    header("location:../view/akses.php");
} else if($aksi == "hapus"){
    $db->hapus($_GET['id_acc']);
    header("location:../view/akses.php");
} else if($aksi == "update"){ 
    $db->update($_POST['id_acc'], $_POST['uname'], $_POST['pass'], $_POST['level']);
    header("location:../view/akses.php");
}
?>