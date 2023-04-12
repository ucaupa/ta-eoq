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
						  
                            <table class="table table-bordered table-striped table-condensed">
     <a href="input_obat.php" class="btn btn-theme"/>Tambah Data</a>
                              <thead>
                              <tr>


							<hr>
<thead>
<tr>
<td>KODE OBAT</td>
<td>NAMA OBAT</td>
<td>JENIS OBAT</td>
<td>HARGA</td>
<td>STOK</td>
<td>AKSI</td>

</tr>
</thead>
<?php
include "Config/koneksi.php";
$tampil = "SELECT * FROM obat";
$hasil = mysqli_query($konek, $tampil);
while ($row =mysqli_fetch_array($hasil)):
?>
     <tr>
          <td><?php echo $row['kd_obat'] ?></td>
          <td><?php echo $row['nm_obat'] ?></td>
          <td><?php echo $row['jenis_obat'] ?></td>
          <td><?php echo $row['harga'] ?></td>
          <td><?php echo $row['stok'] ?></td>
		<td>
               <a href="edit_obat.php" class="btn btn-theme"/>Edit</a>
               <a href="delete_obat.php" class="btn btn-theme"/>Hapus</a>
          </td>   
		   <td>
         

         <a href='edit_obat.php?id=<?php echo $row[kd_obat]?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan ID =<?php echo $row[kd_obat]?>')"><i class="fa fa-pencil"></i><a/>
         <a href='delete_obat.php?id=<?php echo $row[kd_obat]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan ID =<?php echo $row[kd_obat]?>')"><i class="fa fa-trash-o "></i>
                                  

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
	           
