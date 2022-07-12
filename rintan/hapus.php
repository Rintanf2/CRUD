<?php
include('koneksi.php');
$no = $_GET['no'];
$sql_hapus = mysql_query("delete from crud where no='$no'");

if($sql_hapus){
    echo "Data berhasil dihapus!";
    header("location:tampil.php");
}
else{
    echo "Data Gagal dihapus!";
}
?>