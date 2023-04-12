<?php
include "atas.php";
?>
<?php
include "Config/koneksi.php";   
$id=$_GET['id'];

$edit="SELECT * From obat where kd_obat ='$id'";
$hasil=mysqli_query ($konek,$edit);
$data=mysqli_fetch_array($hasil);
?>
      <section id="main-content">
          <section class="wrapper">
          
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 >UPDATE DATA OBAT</h4>
                      <form class="form-horizontal style-form" action="update_obat.php" method="GET">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kode Obat</label>
                              <div class="col-sm-10">
                                  <input name="kd" type="text" class="form-control" value='<?php echo "$data[kd_obat]" ?>' disabled >
                                  <input name="kd" type="text" value='<?php echo "$data[kd_obat]" ?>' hidden >
                              </div>
                          </div>
                                                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Obat</label>
                              <div class="col-sm-10">
                                  <input name="nm" type="text" class="form-control" value='<?php echo "$data[nm_obat]" ?>' required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Obat</label>
                              <div class="col-sm-10">
                                  <input name="jn" type="text" class="form-control" value='<?php echo "$data[jenis_obat]" ?>' required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga Obat</label>
                              <div class="col-sm-10">
                                  <input name="hg" type="text" class="form-control" value='<?php echo "$data[harga]" ?>' required>
                              </div>
                          </div>
                          
						      <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Stok</label>
                              <div class="col-sm-10">
                                  <input type="text" name="st" class="form-control" value='<?php echo "$data[stok]" ?>' required>
                              </div>
                          </div>
						     
						     <input type="submit" class="btn btn-theme" value="Edit"/>
							<hr>
							 
       <?php
	   
	   include "bawah.php";
	   ?>