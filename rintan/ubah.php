<?php
    include('koneksi.php');
    $no = $_POST['no'];
    $nama = $_POST['nama'];

$sql_ubah = mysql_query("update crud set no='$no', nama='$nama' where no='$no'");
        
if($sql_ubah){
    echo "Data berhasil diubah!";
    header("location:tampil.php");
}
else{
    echo "Data Gagal diubah!";
}
?>