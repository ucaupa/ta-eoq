<?php
include "atas.php";
?>
<?php
include "Config/koneksi.php";
$id = $_GET['id'];

$edit = "SELECT * From admin where kd_admin ='$id'";
$hasil = mysqli_query($konek, $edit);
$data = mysqli_fetch_array($hasil);
?>
    <section id="main-content">
    <section class="wrapper">
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4>UPDATE DATA OBAT</h4>
                    <form class="form-horizontal style-form" action="user_update.php" method="POST">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Kode User</label>
                            <div class="col-sm-10">
                                <input name="kd" type="text" class="form-control" required disabled
                                       value="<?= $data['kd_admin'] ?>">
                                <input name="kd" type="text" value="<?= $data['kd_admin'] ?>" hidden>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <input name="nm" type="text" class="form-control" required
                                       value="<?= $data['nm_lengkap'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-10">
                                <input name="alamat" type="text" class="form-control" required
                                       value="<?= $data['alamat'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">No Telp</label>
                            <div class="col-sm-10">
                                <input name="telp" type="text" class="form-control" required
                                       value="<?= $data['notlp'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input name="username" type="text" class="form-control" required
                                       value="<?= $data['username'] ?>">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-theme" value="Edit"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <hr>

<?php
include "bawah.php";
?>