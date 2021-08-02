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
        $data = mysqli_query($this->con, "select * from supplier");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function input($id_supplier, $nama_supplier, $kota_supplier, $no_telp){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into supplier
        values('$id_supplier', '$nama_supplier', '$kota_supplier', '$no_telp')");
    }
    function hapus($id_supplier){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from supplier
        where id_supplier= '$id_supplier'"); 
    }
    function edit($id_supplier){
        $data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from supplier
        where id_supplier= '$id_supplier'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id_supplier, $nama_supplier, $kota_supplier, $no_telp){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update supplier set
        nama_supplier = '$nama_supplier', kota_supplier = '$kota_supplier', no_telp = $no_telp
        where id_supplier = '$id_supplier'");
    }
}
?>