<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-purple elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= base_url() ?>/assets/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text">Inventaris Jaringan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="user-panel mt-1 mb-1 d-flex">
            <div class="info">
                <a href="#" class="d-block"><i class="fas fa-user-circle mr-1"></i><b>
                        <?= $_SESSION['nm_user']; ?>
                    </b></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Menu</li>
                <?php if ($_SESSION['level'] == 1) { ?>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/" class="nav-link <?php if ($page == 'dashboard') {
                                                                                echo 'active';
                                                                            } ?>">
                            <i class="nav-icon fa fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview  <?php if ($page == 'user' || $page == 'ruang') {
                                                            echo 'menu-open';
                                                        } ?>">
                        <a href="#" class="nav-link <?php if ($page == 'user' || $page == 'ruang') {
                                                        echo 'active';
                                                    } ?>">
                            <i class="nav-icon fa fa-database"></i>
                            <p>
                                Data Master
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url() ?>/admin/user/" class="nav-link <?php if ($page == 'user') {
                                                                                            echo 'active';
                                                                                        } ?>">
                                    <i class="fas fa-user mr-1"></i>
                                    <p>Data Pengguna</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>/admin/ruang/" class="nav-link <?php if ($page == 'ruang') {
                                                                                                echo 'active';
                                                                                            } ?>">
                                    <i class="fas fa-map mr-1"></i>
                                    <p>Data Ruang</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/barang/" class="nav-link <?php if ($page == 'barang') {
                                                                                        echo 'active';
                                                                                    } ?>">
                            <i class="nav-icon fa fa-server"></i>
                            <p>
                                Data Inventaris Barang
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/kondisi/" class="nav-link <?php if ($page == 'kondisi') {
                                                                                        echo 'active';
                                                                                    } ?>">
                            <i class="nav-icon fa fa-thermometer-half"></i>
                            <p>
                                Data Kondisi Inventaris
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/mutasi/" class="nav-link <?php if ($page == 'mutasi') {
                                                                                        echo 'active';
                                                                                    } ?>">
                            <i class="nav-icon fa fa-cubes"></i>
                            <p>
                                Data Mutasi Inventaris
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/musnah/" class="nav-link <?php if ($page == 'musnah') {
                                                                                        echo 'active';
                                                                                    } ?>">
                            <i class="nav-icon fa fa-trash"></i>
                            <p>
                                Data Pemusnahan Inventaris
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/berita-acara/" class="nav-link <?php if ($page == 'berita') {
                                                                                            echo 'active';
                                                                                        } ?>">
                            <i class="nav-icon fa fa-file-alt"></i>
                            <p>
                                Data Berita Acara
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">Laporan</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-print"></i>
                            <p>
                                Laporan Cetak
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_barang">
                                    <p>Inventaris Barang</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_kondisi">
                                    <p>Kondisi Inventaris</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_mutasi">
                                    <p>Mutasi Inventaris</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_berita_acara">
                                    <p>Berita Acara</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_musnah">
                                    <p>Pemusnahan Inventaris</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/" class="nav-link <?php if ($page == 'dashboard') {
                                                                                echo 'active';
                                                                            } ?>">
                            <i class="nav-icon fa fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-print"></i>
                            <p>
                                Laporan Cetak
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_barang">
                                    <p>Inventaris Barang</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_kondisi">
                                    <p>Kondisi Inventaris</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_mutasi">
                                    <p>Mutasi Inventaris</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_berita_acara">
                                    <p>Berita Acara</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_musnah">
                                    <p>Pemusnahan Inventaris</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </nav>

    </div>
    <!-- /.sidebar -->
</aside>

<?php

$date_now = date('Y-m-d');
$date_old = date('Y-m-d', mktime(0, 0, 0, date('m') - 1, date('d'), date('y')));
?>

<div class="modal fade" id="lap_barang" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Laporan Data Inventaris Barang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" target="_blank" action="<?= base_url('admin/barang/cetak') ?>">
                    <div class="form-group row">
                        <div class="col-md-10">
                            <label>Nama Ruangan / Tempat</label>
                            <select name="ruang" class="form-control" style="width: 100%;" required>
                                <option value="">-- Pilih --</option>
                                <?php $data = $con->query("SELECT * FROM ruang ORDER BY id_ruang ASC"); ?>
                                <?php foreach ($data as $row) : ?>
                                    <option value="<?= $row['id_ruang'] ?>"><?= $row['nm_ruang'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-md-2" style="margin-top: 31px;">
                            <button type="submit" name="cetak1" class="btn btn-info btn-sm"><i class="fa fa-print"> </i> Cetak</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="col-md-12 text-center">
                    <a href="<?= base_url('admin/barang/cetak') ?>" target="_blank" class="btn bg-purple btn-sm"><i class="fa fa-print"> </i> Cetak Semua </a>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="lap_kondisi" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Laporan Data Kondisi Inventaris</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" target="_blank" action="<?= base_url('admin/kondisi/cetak') ?>">
                    <div class="form-group row">
                        <div class="col-md-5">
                            <label>Dari Tanggal</label>
                            <input type="date" class="form-control" name="tgl1" value="<?= $date_old ?>" required>
                        </div>
                        <div class="col-md-5">
                            <label>Sampai Tanggal</label>
                            <input type="date" class="form-control" name="tgl2" value="<?= $date_now ?>" required>
                        </div>
                        <div class="col-md-2" style="margin-top: 31px;">
                            <button type="submit" name="cetak1" class="btn btn-info btn-sm"><i class="fa fa-print"> </i> Cetak</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="col-md-12 text-center">
                    <a href="<?= base_url('admin/kondisi/cetak') ?>" target="_blank" class="btn bg-purple btn-sm"><i class="fa fa-print"> </i> Cetak Semua </a>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="lap_mutasi" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Laporan Data Mutasi Inventaris</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" target="_blank" action="<?= base_url('admin/mutasi/cetak') ?>">
                    <div class="form-group row">
                        <div class="col-md-5">
                            <label>Dari Tanggal</label>
                            <input type="date" class="form-control" name="tgl1" value="<?= $date_old ?>" required>
                        </div>
                        <div class="col-md-5">
                            <label>Sampai Tanggal</label>
                            <input type="date" class="form-control" name="tgl2" value="<?= $date_now ?>" required>
                        </div>
                        <div class="col-md-2" style="margin-top: 31px;">
                            <button type="submit" name="cetak1" class="btn btn-info btn-sm"><i class="fa fa-print"> </i> Cetak</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="col-md-12 text-center">
                    <a href="<?= base_url('admin/mutasi/cetak') ?>" target="_blank" class="btn bg-purple btn-sm"><i class="fa fa-print"> </i> Cetak Semua </a>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="lap_berita_acara" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Laporan Data Berita Acara</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" target="_blank" action="<?= base_url('admin/berita-acara/cetak') ?>">
                    <div class="form-group row">
                        <div class="col-md-5">
                            <label>Dari Tanggal</label>
                            <input type="date" class="form-control" name="tgl1" value="<?= $date_old ?>" required>
                        </div>
                        <div class="col-md-5">
                            <label>Sampai Tanggal</label>
                            <input type="date" class="form-control" name="tgl2" value="<?= $date_now ?>" required>
                        </div>
                        <div class="col-md-2" style="margin-top: 31px;">
                            <button type="submit" name="cetak1" class="btn btn-info btn-sm"><i class="fa fa-print"> </i> Cetak</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="col-md-12 text-center">
                    <a href="<?= base_url('admin/berita-acara/cetak') ?>" target="_blank" class="btn bg-purple btn-sm"><i class="fa fa-print"> </i> Cetak Semua </a>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="lap_musnah" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Laporan Data Pemusnahan Inventaris</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" target="_blank" action="<?= base_url('admin/musnah/cetak') ?>">
                    <div class="form-group row">
                        <div class="col-md-5">
                            <label>Dari Tanggal</label>
                            <input type="date" class="form-control" name="tgl1" value="<?= $date_old ?>" required>
                        </div>
                        <div class="col-md-5">
                            <label>Sampai Tanggal</label>
                            <input type="date" class="form-control" name="tgl2" value="<?= $date_now ?>" required>
                        </div>
                        <div class="col-md-2" style="margin-top: 31px;">
                            <button type="submit" name="cetak1" class="btn btn-info btn-sm"><i class="fa fa-print"> </i> Cetak</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="col-md-12 text-center">
                    <a href="<?= base_url('admin/musnah/cetak') ?>" target="_blank" class="btn bg-purple btn-sm"><i class="fa fa-print"> </i> Cetak Semua </a>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>