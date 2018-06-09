<?php
include 'koneksi.php'; 
// pastikan parameter id_walikelas Ada
$id_kelas = $_GET['id_kelas'];
// kalau data nya ada maka silahkan eksekusi
$query="DELETE from kelas where id_kelas='$id_kelas'";
mysqli_query($konek, $query);
// balik he halaman list walikelas
header("location:kelas.php");
?>