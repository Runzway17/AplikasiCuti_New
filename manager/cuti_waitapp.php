<?php
include("sess_check.php");

// deskripsi halaman
$pagedesc = "Menunggu Approval";
include("layout_top.php");
include("dist/function/format_tanggal.php");
include("dist/function/format_rupiah.php");
$id = $sess_mngid;
?>
<!-- top of file -->
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Cuti Menunggu Approval</h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->


    </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
<!-- bottom of file -->

<?php
include("layout_bottom.php");
?>