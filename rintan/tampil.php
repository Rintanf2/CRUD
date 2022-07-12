<?php
include('koneksi.php');
$sql_tampil = mysql_query("select * from crud");
$data =mysql_fetch_array($sql_tampil);
?>
    <table>
    <h2> Data Tabel </h2> <a href="index.php"><button>Input Lagi</button><a><br>
    <tbody>
        <tr>
        <?php $id=1; do { ?>
        <td><?php echo $data['no']; ?> | </td>
        <td><?php echo $data['nama']; ?> | </td>
        <td><a href = "edit.php?no=<?php echo $data['no'];?>"><button>Edit</button></a> | <a href = "hapus.php?no=<?php echo $data['no'];?>" onclick="return confirm('Yakin ingin menghapus data?')"><button>Hapus</button></a>
        </td>
        </tr>
        <?php $id++; } while($data=mysql_fetch_array($sql_tampil)); ?>
    </tbody>
    
  </table>