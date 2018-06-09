<?php
include 'header.php';
?>
<div class="container">
    <h3>Form Input Kelas</h3>
    <form action="simpan-kelas.php" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Kelas</label>
            <div class="col-sm-10">
                <input type="text" name="nama_kelas" placeholder="Masukan Nama Kelas" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-danger">Simpan Data</button>
                <a href="walikelas.php" class="btn btn-primary">Batal</a>
            </div>
        </div>
    </form>
</div>
<?php
include 'footer.php';
?>