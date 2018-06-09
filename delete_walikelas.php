<?php
include 'koneksi.php'; 
// pastikan parameter id_walikelas Ada
$id_walikelas = $_GET['id_walikelas'];
// kalau data nya ada maka silahkan eksekusi
$query="DELETE from walikelas where id_walikelas='$id_walikelas'";
mysqli_query($konek, $query);
// balik he halaman list walikelas
header("location:walikelas.php");
?>