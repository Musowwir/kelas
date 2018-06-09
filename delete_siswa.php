<?php
include 'koneksi.php'; 
// pastikan parameter nisn Ada
$nisn = $_GET['nisn'];
// kalau data nya ada maka silahkan eksekusi
$query="DELETE from siswa where nisn='$nisn'";
mysqli_query($konek, $query);
// balik he halaman list siswa
header("location:index.php");
?>