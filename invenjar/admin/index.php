<?php
require '../app/config.php';
include_once '../template/header.php';
$page = 'dashboard';
include_once '../template/sidebar.php';

$a = $con->query("SELECT COUNT(*) AS total FROM barang WHERE musnah = 0 ")->fetch_array();
$b = $con->query("SELECT COUNT(*) AS total FROM mutasi")->fetch_array();
$c = $con->query("SELECT COUNT(*) AS total FROM berita_acara")->fetch_array();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="info-box mb-3 bg-white">
                        <span class="info-box-icon"><i class="fas fa-server"></i></span>

                        <div class="info-box-content"> 
                            <span class="info-box-text"><a href="barang/index.php">Data Inventaris Jaringan</a></span>
                            <span class="info-box-number"><?= $a['total'] ?> Data</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="info-box mb-3 bg-red">
                        <span class="info-box-icon"><i class="fas fa-temperature-high"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><a href="kondisi/index.php">Data Kondisi Inventaris</a></span>
                            <span class="info-box-number"><?= $b['total'] ?> Data</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="info-box mb-3 bg-teal">
                        <span class="info-box-icon"><i class="fas fa-cubes"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><a href="mutasi/index.php">Data Mutasi Inventaris</a></span>
                            <span class="info-box-number"><?= $b['total'] ?> Data</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="info-box mb-3 bg-orange">
                        <span class="info-box-icon"><i class="fas fa-trash"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><a href="musnah/index.php">Data Pemusnahan Inventaris</a></span>
                            <span class="info-box-number"><?= $b['total'] ?> Data</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="info-box mb-3 bg-fuchsia">
                        <span class="info-box-icon"><i class="fas fa-file-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><a href="berita-acara/index.php">Data Berita Acara</a></span>
                            <span class="info-box-number"><?= $c['total'] ?> Data</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
            </div>
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once '../template/footer.php';
?>