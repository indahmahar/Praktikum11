<?php
$host="localhost"; // mendeklarasikan host
$user="root"; // mendeklarasikan user
$password=""; // mendeklarasikan password
$db="penjualan"; // mendeklarasikan db

$kon = mysqli_connect($host,$user,$password,$db); // mengecek koneksi
if (!$kon){ // pengecekan jika gagal maka akan memunculkan koneksi eror
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>