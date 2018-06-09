<?php
include 'koneksi.php';
// pastikan parameter ISBN Ada
$id_user = $_GET['id'];
// kalau data nya ada maka silahkan eksekusi
$query="DELETE from user where id_user='$id_user'";
mysqli_query($konek, $query);
// balik he halaman list buku
header("location:user.php");
?>
