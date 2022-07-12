<?php
include('koneksi.php');        
        $no = $_POST['no'];
        $nama = $_POST['nama'];
    
    $sql_simpan = mysql_query("insert into crud values ('$no', '$nama')");
			
    if($sql_simpan){
        echo "Data berhasil disimpan!";
        header("location:tampil.php");
    }
    else{
        echo "Data Gagal disimpan!";
    }
    
?>