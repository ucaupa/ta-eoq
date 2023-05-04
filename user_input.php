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
                        <h4>INPUT DATA OBAT</h4>
                        <form class="form-horizontal style-form" action="user_simpan.php" method="POST">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Kode User</label>
                                <div class="col-sm-10">
                                    <input name="kd" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input name="nm" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input name="alamat" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">No Telp</label>
                                <div class="col-sm-10">
                                    <input name="telp" type="text" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input name="username" type="text" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input name="password" type="password" class="form-control" required>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-theme" value="Simpan"/>
                        </form>
                            <hr>
                    </div>
                </div>
            </div>
        </section>

<?php
include "bawah.php";
?>