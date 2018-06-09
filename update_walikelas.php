<?php
// menyimpan hasil inputan kedalam variabel
$nama_walikelas = $_POST['nama_walikelas'];
$options      = array("cost"=>4);
$email        = $_POST['email'];
$no_hp        = $_POST['no_hp'];
$id_walikelas      = $_POST['id_walikelas'];


include 'koneksi.php';
// sintaks sql untuk insert data

    $sql = "update walikelas set nama_walikelas='$nama_walikelas',email='$email',no_hp='$no_hp' where id_walikelas='$id_walikelas'";

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
