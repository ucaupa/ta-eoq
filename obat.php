<?php
include "atas.php";
?>

    <section id="main-content">

    <section class="wrapper">

        <div class="row mt">

            <div class="col-lg-12">
                <div class="content-panel">
                    <h4><i class=""></i>DATA PERSEDIAAN OBAT</h4>
                    <section id="unseen">
                        <a href="input_obat.php" class="btn btn-theme"/>Tambah Data</a>
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>KODE OBAT</th>
                                <th>NAMA OBAT</th>
                                <th>JENIS OBAT</th>
                                <th>HARGA</th>
                                <th>STOK</th>
                                <th>AKSI</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include "Config/koneksi.php";
                            $tampil = "SELECT * FROM obat";
                            $hasil = mysqli_query($konek, $tampil);
                            while ($row = mysqli_fetch_array($hasil)):
                                ?>
                                <tr>
                                    <td><?php echo $row['kd_obat'] ?></td>
                                    <td><?php echo $row['nm_obat'] ?></td>
                                    <td><?php echo $row['jenis_obat'] ?></td>
                                    <td><?php echo $row['harga'] ?></td>
                                    <td><?php echo $row['stok'] ?></td>
                                    <td>
                                        <a href="edit_obat.php?id=<?php echo $row['kd_obat'] ?>"
                                           class="btn btn-theme"
                                           title="Klik Disini Untuk Ubah"
                                           Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan ID =<?php echo $row['kd_obat'] ?>')">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="delete_obat.php?id=<?php echo $row['kd_obat'] ?>"
                                           class="btn btn-theme"
                                           title="Klik Disini Untuk Hapus"
                                           Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan ID =<?php echo $row['kd_obat'] ?>')">
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