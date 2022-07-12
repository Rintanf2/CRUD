<?php
		$server='localhost';
		$user='root';
		$password='';
		$db='rintan';
		
		$koneksi=mysql_connect($server,$user,$password) or die (mysql_error());
		if ($koneksi){
            mysql_select_db($db) or die(mysql_error());
		} else{
			echo "Koneksi Gagal ... !!!";
		}
?>