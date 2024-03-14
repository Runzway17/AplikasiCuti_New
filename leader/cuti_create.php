<?php
include("sess_check.php");

// deskripsi halaman
$pagedesc = "Buat Pengajuan";
$menuparent = "cuti";
include("layout_top.php");
$now = date('Y-m-d');
$npp = $sess_leaderid;
?>
<script type="text/javascript">
function valid() {
    if (document.cuti.akhir.value < document.cuti.mulai.value) {
        alert("Tanggal akhir harus lebih besar dari tanggal mulai cuti!");
        return false;
    }

    if (document.cuti.mulai.value < document.cuti.now.value) {
        alert("Tanggal mulai cuti tidak valid!");
        return false;
    }

    return true;
}
</script>
<!-- top of file -->
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Pengajuan Cuti</h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->


    </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
<!-- bottom of file -->
<?php
include("layout_bottom.php");
?>