<?php
include 'header.php';
?>
<div class="container">
    <h3>Form Input Siswa</h3>
    <form action="simpan-siswa.php" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NISN</label>
            <div class="col-sm-10">
                <input type="text" name="nisn" placeholder="Masukan NISN" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Siswa</label>
            <div class="col-sm-10">
                <input type="text" name="nama_siswa" placeholder="Masukan Nama Siswa" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
            <div class="col-sm-10">
                <input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input type="text" name="tanggal_lahir" placeholder="Format: Tahun-Bulan-Tanggal. Contoh: 2018-12-30" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <input type="text" name="kelamin" placeholder="Format: Laki Laki / Perempuan" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
                <input type="text" name="agama" placeholder="Masukan Agama Anda" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Wali Kelas</label>
            <div class="col-sm-10">
                <select name="walikelas" class="form-control">
                    <?php
                    $walikelas = mysqli_query($konek, "select * from walikelas");
                    while ($p = mysqli_fetch_array($walikelas)) {
                        echo "<option value='$p[id_walikelas]'>$p[nama_walikelas]</option>";
                    }
                    ?>
                </select>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
                <select name="kelas" class="form-control">
                    <?php
                    $kelas = mysqli_query($konek, "select * from kelas");
                    while ($k = mysqli_fetch_array($kelas)) {
                        echo "<option value='$k[id_kelas]'>" . strtoupper($k[nama_kelas]) . "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Orang Tua / Wali</label>
            <div class="col-sm-10">
                <input type="text" name="orang_tua" placeholder="Masukan Nama Orang Tua / Wali" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea name="alamat" class="form-control"></textarea>
            </div>
        </div>

        

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cover</label>
            <div class="col-sm-10">
                <input type="file" name="cover">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-danger">Simpan Data</button>
                <a href="index.php" class="btn btn-primary">Batal</a>
            </div>
        </div>
    </form>
</div>
<?php
include 'footer.php';
?>