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
        $data = mysqli_query($this->con, "select * from login");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function input($id_acc, $uname, $pass, $level){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into login
        values('$id_acc', '$uname', '$pass', '$level')");
    }
    function hapus($id_acc){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from login
        where id_acc= '$id_acc'"); 
    }
    function edit($id_acc){
        $data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from login
        where id_acc= '$id_acc'");
        while ($d = mysqli_fetch_array($data)){
           $hasil[] = $d;
        }
        return $hasil;
    }
 
    function update($id_acc, $uname, $pass, $level){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update login set
        id_acc = '$id_acc', uname = '$uname', pass = '$pass', level = '$level'
        where id_acc = '$id_acc'");
    }
}
?>