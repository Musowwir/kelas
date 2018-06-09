<?php
include 'header.php';
$id_kelas = $_GET['id'];
$kelas = mysqli_query($konek, "select * from kelas where id_kelas='$id_kelas'");
$row  = mysqli_fetch_array($kelas);
?>
<div class="container">
    <h3>Form Edit Kelas</h3>
    <form action="update_kelas.php" method="POST">
        <input type="hidden" name="id_kelas" value="<?php echo $id_kelas;?>">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Kelas</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row['nama_kelas']?>" name="nama_kelas" placeholder="Masukan Nama Kelas" class="form-control">
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-danger">Simpan Data</button>
                <a href="kelas.php" class="btn btn-primary">Batal</a>
            </div>
        </div>
    </form>
</div>
<?php
include 'footer.php';
?>