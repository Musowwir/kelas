<?php
// menyimpan hasil inputan kedalam variabel
$nama_walikelas = $_POST['nama_walikelas'];
$options      = array("cost"=>4);
$email        = $_POST['email'];
$no_hp        = $_POST['no_hp'];


include 'koneksi.php';
// sintaks sql untuk insert data
$sql = "insert into walikelas set nama_walikelas='$nama_walikelas',no_hp='$no_hp',email='$email'";
// perintah untuk mengeksekusi query di atas
$insert = mysqli_query($konek, $sql);
/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/


header("location:walikelas.php");
?>
