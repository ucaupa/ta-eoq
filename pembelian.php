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
						  
                            <table class="table table-bordered table-striped table-condensed">
     <a href="input_pembelian.php" class="btn btn-theme"/>Tambah Pembelian</a>
                              <thead>
                              <tr>


							<hr>
<thead>
<tr>
<td>KODE BELI</td>
<td>TANGGAL BELI</td>
<td>KODE OBAT</td>
<td>HARGA</td>
<td>JUMLAH</td>
<td>TOTAL</td>
<td>AKSI</td>

</tr>
</thead>
<?php
include "Config/koneksi.php";
$tampil = "select beli.kd_beli,tgl_beli,jumlah,obat.kd_obat,nm_obat,harga, (jumlah*harga) as total
from beli,obat
where beli.kd_obat=obat.kd_obat";
$hasil = mysqli_query($konek, $tampil);
while ($row =mysqli_fetch_array($hasil)):
?>
     <tr>
          <td><?php echo $row['kd_beli'] ?></td>
          <td><?php echo $row['tgl_beli'] ?></td>
          <td><?php echo $row['kd_obat'] ?></td>
          <td><?php echo $row['harga'] ?></td>
          <td><?php echo $row['jumlah'] ?></td>
          <td><?php echo $row['total'] ?></td>
		   
		   <td>
         

        
         <a href='delete_pembelian.php?id=<?php echo $row[kd_beli]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan ID =<?php echo $row[kd_beli]?>')"><i class="fa fa-trash-o "></i>
                                  

          </td>
     </tr>
<?php
endwhile;
?>
</body>
</table>
<?php
include "bawah.php";
?>
	           
