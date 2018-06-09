<?php
include 'header.php';
?>
<div class="container">
    <h3>Form Input Wali Kelas</h3>
    <form action="simpan-walikelas.php" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" name="nama_walikelas" placeholder="Masukan Nama Lengkap" class="form-control">
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" placeholder="Masukan Email" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nomor HP</label>
            <div class="col-sm-10">
                <input type="text" name="no_hp" placeholder="Masukan Nomor HP" class="form-control">
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