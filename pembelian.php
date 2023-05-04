<?php
include "atas.php";
?>

<section id="main-content">

    <section class="wrapper">

        <div class="row mt">

            <div class="col-lg-12">
                <div class="content-panel">
                    <h4><i class=""></i> Data Pembelian</h4>
                    <section id="unseen">

                        <a href="input_pembelian.php" class="btn btn-theme"/>Tambah Pembelian</a>
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>KODE BELI</th>
                                <th>TANGGAL BELI</th>
                                <th>KODE OBAT</th>
                                <th>HARGA</th>
                                <th>JUMLAH</th>
                                <th>TOTAL</th>
                                <th>AKSI</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include "Config/koneksi.php";
                            $tampil = "select beli.kd_beli,tgl_beli,jumlah,obat.kd_obat,nm_obat,harga, (jumlah*harga) as total
from beli,obat
where beli.kd_obat=obat.kd_obat";
                            $hasil = mysqli_query($konek, $tampil);
                            while ($row = mysqli_fetch_array($hasil)):
                                ?>
                                <tr>
                                    <td><?php echo $row['kd_beli'] ?></td>
                                    <td><?php echo $row['tgl_beli'] ?></td>
                                    <td><?php echo $row['kd_obat'] ?></td>
                                    <td><?php echo $row['harga'] ?></td>
                                    <td><?php echo $row['jumlah'] ?></td>
                                    <td><?php echo $row['total'] ?></td>
                                    <td>
                                        <a href="delete_pembelian.php?id=<?php echo $row['kd_beli'] ?>"
                                           class="btn btn-theme"
                                           title="Klik Disini Untuk Hapus"
                                           Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan ID =<?php echo $row['kd_beli'] ?>')">
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
	           
