<?php
// menyimpan hasil inputan kedalam variabel
$nama_kelas = $_POST['nama_kelas'];
$options      = array("cost"=>4);

include 'koneksi.php';
// sintaks sql untuk insert data
$sql = "insert into kelas set nama_kelas='$nama_kelas'";
// perintah untuk mengeksekusi query di atas
$insert = mysqli_query($konek, $sql);
/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/


header("location:kelas.php");
?>
