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
                  	  <h4 >INPUT DATA OBAT</h4>
                      <form class="form-horizontal style-form" action="simpan_obat.php" method="POST">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kode Obat</label>
                              <div class="col-sm-10">
                                  <input name="kd" type="text" class="form-control" required>
                              </div>
                          </div>
                                                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Obat</label>
                              <div class="col-sm-10">
                                  <input name="nm" type="text" class="form-control" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Obat</label>
                              <div class="col-sm-10">
                                  <input name="jn" type="text" class="form-control" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga Obat</label>
                              <div class="col-sm-10">
                                  <input name="hg" type="text" class="form-control" required>
                              </div>
                          </div>
                          
						      <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Stok</label>
                              <div class="col-sm-10">
                                  <input type="text" name="st" class="form-control" required>
                              </div>
                          </div>
						     
						     <input type="submit" class="btn btn-theme" value="Simpan"/>
							<hr>
							 
       <?php
	   
	   include "bawah.php";
	   ?>