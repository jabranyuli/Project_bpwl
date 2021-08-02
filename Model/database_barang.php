<?php
class database{
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "projek";
    var $con;

    function __construct(){
        $this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        mysqli_select_db($this->con, $this->db);
    }
    function tampil_data(){
        $data = mysqli_query($this->con, "select * from barang");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function input($id_barang, $nama, $jenis, $harga, $jumlah){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into barang
        values('$id_barang', '$nama', '$jenis', '$harga','$jumlah')");
    }
    function hapus($id_barang){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from barang
        where id_barang= '$id_barang'"); 
    }
    function edit($id_barang){
        $data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from barang
        where id_barang= '$id_barang'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
 
    function update($id_barang, $nama, $jenis, $harga,$jumlah)
    {
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "UPDATE barang
            SET id_barang= '$id_barang', nama = '$nama', jenis = '$jenis', harga = '$harga' 
            ,jumlah= '$jumlah' WHERE id_barang = '$id_barang'");
    }
}
?>