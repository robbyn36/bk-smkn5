<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$host = "127.0.0.1";
$username = "root";
$password = "";
$db = "bk_smkn5";
$koneksi = mysql_connect($host,$username,$password);
mysql_select_db($db);
if ($koneksi == FALSE) {
	die(mysql_errno());
	
}else{
	// echo "koneksi ke database berhasil";
}
// konfigurasi untuk waktu

?>