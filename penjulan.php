<?php
include "atas.php";
?>

 <section id="main-content">

          <section class="wrapper">

		  		<div class="row mt">
				
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class=""></i> Data Penjualan</h4>
                          <section id="unseen">
						  
                            <table class="table table-bordered table-striped table-condensed">
     <a href="input_penjualan.php" class="btn btn-theme"/>Tambah Penjualan</a>
                              <thead>
                              <tr>


							<hr>
<thead>
<tr>
<td>NOFAKTUR</td>
<td>TANGGAL FAKTUR</td>
<td>KODE OBAT</td>
<td>HARGA</td>
<td>JUMLAH BELI</td>
<td>TOTAL</td>
<td>AKSI</td>

</tr>
</thead>
<?php
include "Config/koneksi.php";
$tampil = "select penjualan.nofaktur,tgl_faktur,jumlah_beli,obat.kd_obat,nm_obat,harga, (jumlah_beli*harga) as total
from penjualan,obat
where penjualan.kd_obat=obat.kd_obat";
$hasil = mysqli_query($konek, $tampil);
while ($row =mysqli_fetch_array($hasil)):
?>
     <tr>
          <td><?php echo $row['nofaktur'] ?></td>
          <td><?php echo $row['tgl_faktur'] ?></td>
          <td><?php echo $row['kd_obat'] ?></td>
          <td><?php echo $row['harga'] ?></td>
         
          <td><?php echo $row['jumlah_beli'] ?></td>
          <td><?php echo $row['total'] ?></td>
		   
		   <td>
         

        
         <a href='delete_penju.php?id=<?php echo $row[nofaktur]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan ID =<?php echo $row[nofaktur]?>')"><i class="fa fa-trash-o "></i>
                                  

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
	           
