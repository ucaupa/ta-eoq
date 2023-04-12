<?php
include "atas.php";
?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 >Input Pengajuan Obat</h4>
                      <form class="form-horizontal style-form" action="simpan_eoq.php" method="POST">
                
<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kode Obat</label>
                              <div class="col-sm-10">
                        <select name="ko" class="form-control"/>
<option>PILIHAN</option>
<?php
include "Config/koneksi.php";
$tampil="select * from obat";
$hasil=mysqli_query($konek,$tampil);
while($data=mysqli_fetch_array($hasil)){

echo "<option value=$data[kd_obat]>$data[kd_obat] - $data[nm_obat] </option>";

}
?></select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kebutuhan Pertahun</label>
                              <div class="col-sm-10">
                                  <input name="kp" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Biaya Simpan</label>
                              <div class="col-sm-10">
                                  <input  name="bs" type="text" class="form-control">
                              </div>
                          </div>
						      <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Biaya Pesan</label>
                              <div class="col-sm-10">
                                  <input type="" name="bp" class="form-control">
                              </div>
                          </div>
						     
						     <input type="submit" class="btn btn-theme" value="Simpan"/>
							<hr>
							 
       <?php
	   
	   include "bawah.php";
	   ?>