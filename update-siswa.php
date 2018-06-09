<?php
// menyimpan hasil inputan kedalam variabel
$nisn           = $_POST['nisn'];
$nama_siswa     = $_POST['nama_siswa'];
$walikelas        = $_POST['walikelas'];
$kelas       = $_POST['kelas'];
$alamat      = $_POST['alamat'];
$tempat_lahir          = $_POST['tempat_lahir'];
$tanggal_lahir          = $_POST['tanggal_lahir'];
$agama          = $_POST['agama'];
$orang_tua          = $_POST['orang_tua'];
$kelamin          = $_POST['kelamin'];

include 'koneksi.php';


$file_tmp  = $_FILES['cover']['tmp_name'];
if(!empty($file_tmp)){
	// upload cover
	$file_name = $_FILES['cover']['name'];
	move_uploaded_file($file_tmp,"cover/".$file_name);
	$sql = "update siswa SET nama_siswa='$nama_siswa',alamat='$alamat',
    id_kelas='$kelas',id_walikelas='$walikelas',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',
    agama='$agama',orang_tua='$orang_tua',kelamin='$kelamin'
    where nisn='$nisn',cover='$file_name'";
}
else{
	$sql = "update siswa SET nama_siswa='$nama_siswa',alamat='$alamat',
    id_kelas='$kelas',id_walikelas='$walikelas',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',
    agama='$agama',orang_tua='$orang_tua',kelamin='$kelamin'
    where nisn='$nisn'";
}

// perintah untuk mengeksekusi query di atas
$update = mysqli_query($konek, $sql);
/*
if($insert){
    echo "insert data berhasil";
}  else {
    echo "insert data gagal";
}
*/
header("location:index.php");
?>
