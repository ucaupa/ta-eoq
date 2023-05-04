<?php
include "atas.php";
?>

    <section id="main-content">

    <section class="wrapper">

        <div class="row mt">

            <div class="col-lg-12">
                <div class="content-panel">
                    <h4><i class=""></i>DATA PENGGUNA</h4>
                    <section id="unseen">
                        <a href="user_input.php" class="btn btn-theme"/>Tambah Data</a>
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>KODE USER</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>NO TELP</th>
                                <th>USERNAME</th>
                                <th>AKSI</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include "Config/koneksi.php";
                            $tampil = "SELECT * FROM admin";
                            $hasil = mysqli_query($konek, $tampil);
                            while ($row = mysqli_fetch_array($hasil)):
                                ?>
                                <tr>
                                    <td><?php echo $row['kd_admin'] ?></td>
                                    <td><?php echo $row['nm_lengkap'] ?></td>
                                    <td><?php echo $row['alamat'] ?></td>
                                    <td><?php echo $row['notlp'] ?></td>
                                    <td><?php echo $row['username'] ?></td>
                                    <td>
                                        <a href="user_edit.php?id=<?php echo $row['kd_admin'] ?>"
                                           class="btn btn-theme"
                                           title="Klik Disini Untuk Ubah"
                                           Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan ID =<?php echo $row['kd_admin'] ?>')">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="user_delete.php?id=<?php echo $row['kd_admin'] ?>"
                                           class="btn btn-theme"
                                           title="Klik Disini Untuk Hapus"
                                           Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan ID =<?php echo $row['kd_admin'] ?>')">
                                            <i class="fa fa-trash-o "></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            endwhile;
                            ?>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </div>
    </section>
<?php
include "bawah.php";
?>