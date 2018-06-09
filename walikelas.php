<?php
include 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h3>Data Wali Kelas</h3>
        </div>
        <div class="col-4">
            <form method="POST" class="form-inline" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Password</label>
                    <input type="text" class="form-control" name="keyword" placeholder="Masukan Keyword">
                </div>
                <button name="pencarian" type="submit" class="btn btn-primary mb-2">Cari Data</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

            <table class="table table-bordered">
                <tr><th width="10px;">NO</th><th>NAMA LENGKAP</th><th>EMAIL</th><th>NO HP</th><th width="130">Aksi</th></tr>
                <?php
                $batas = 6;
                $halaman = isset($_GET['hal']) ? $_GET['hal'] : 0;
                if (isset($_POST['pencarian'])) {
                    // query pencarian data
                    $keyword = $_POST['keyword'];
                    $sql = "SELECT * from walikelas where nama_walikelas like '%$keyword%' order by nama_walikelas ASC limit $halaman,$batas";
                } else {
                    // query menapilkan data biasa
                    $sql = "SELECT * from walikelas order by nama_walikelas ASC limit $halaman,$batas";
                }
                $walikelas = mysqli_query($konek, $sql);
                $no=1;
                while ($row = mysqli_fetch_array($walikelas)) {
                    echo "<tr>
                <td>$no</td>
                <td>$row[nama_walikelas]</td>
                <td>$row[email]</td>
                <td>$row[no_hp]</td>
                <td><a href='edit_walikelas.php?id=$row[id_walikelas]' class='btn btn-success btn-sm'>Edit</a>
                    <a href='delete_walikelas.php?id_walikelas=$row[id_walikelas]' class='btn btn-info btn-sm' onClick=\"return confirm('Are you sure want to delete ?')\">Delete</a>
                </td>
                </tr>";
                    $no++;
                }
                ?>
            </table>

            <div class="float-right">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php
                        if ((!isset($_GET['hal'])) or ($_GET['hal'] == 1)) {
                            $prev = 1;
                        } else {
                            $prev = $_GET['hal'] - 1;
                        }
                        ?>
                        <li class="page-item"><a class="page-link" href="index.php?hal=<?php echo $prev; ?>">Previous</a></li>
                        <?php
                        // sql untuk menghitung jumlah data untuk paging
                        $sql2 = mysqli_query($konek, "SELECT * from walikelas");

                        // menghitung jumlah data
                        $jml_data = mysqli_num_rows($sql2);

                        // menghitung jumlah halaman
                        $jml_halaman = ceil($jml_data / $batas);

                        // untuk membuat paging
                        for ($hal = 1; $hal <= $jml_halaman; $hal++) {
                            echo "<li class='page-item'><a class='page-link' href='index.php?hal=$hal'>$hal</a></li>";
                        }
                        ?>
                        <?php
                        ?>
                        <li class="page-item"><a class="page-link" href="index.php?hal=<?php echo $halaman + 1; ?>">Next</a></li>
                    </ul>
                </nav>
            </div>
            <a href="input_walikelas.php" class="btn btn-danger btn-sm">Input Data Wali Kelas</a> 
        </div>
    </div>


</div>
<?php
include 'footer.php';
?>