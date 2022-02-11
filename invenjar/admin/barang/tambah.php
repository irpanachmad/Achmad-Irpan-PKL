<?php
require '../../app/config.php';
include_once '../../template/header.php';
$page = 'barang';
include_once '../../template/sidebar.php';

$cek = $con->query("SELECT max(kd_barang) AS no FROM barang");
$data = $cek->fetch_array();
$no = $data['no'];
$nourut = (int) substr($no, 10, 11);
$nourut++;
$a = "INV/JAR/";
$num = $a . sprintf('%06s', $nourut);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark"><i class="fa fa-server ml-1 mr-1"></i> Tambah Data Inventaris Barang</h4>
                </div><!-- /.col -->
                <div class="col-sm-6 float-right">
                    <a href="#" onClick="history.go(-1);" class="btn btn-xs bg-dark float-right"><i class="fa fa-arrow-left"> Kembali</i></a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- left column -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="card card-purple card-outline">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body" style="background-color: white;">
                            <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kode Inventaris</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kd_barang" value="<?= $num ?>" required readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Inventaris</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nm_barang" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Satuan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="satuan" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal & Tahun Diperoleh</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" name="tgl_inventaris" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" name="tahun" placeholder="Tahun" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kondisi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kondisi" value="Baik" required readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Ruangan / Tempat</label>
                                    <div class="col-sm-10">
                                        <select name="id_ruang" class="form-control select2" style="width: 100%;">
                                            <option value="">-- Pilih --</option>
                                            <?php $data = $con->query("SELECT * FROM ruang ORDER BY id_ruang DESC"); ?>
                                            <?php foreach ($data as $row) : ?>
                                                <option value="<?= $row['id_ruang'] ?>"><?= $row['nm_ruang'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" name="submit" class="btn btn-sm bg-cyan float-right"><i class="fa fa-save"> Simpan</i></button>
                                        <button type="reset" class="btn btn-sm btn-danger float-right mr-1"><i class="fa fa-times-circle"> Batal</i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!--/.col (left) -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once '../../template/footer.php';
?>

<?php
if (isset($_POST['submit'])) {
    $kd_barang = $_POST['kd_barang'];
    $nm_barang = $_POST['nm_barang'];
    $satuan = $_POST['satuan'];
    $tgl_inventaris = $_POST['tgl_inventaris'];
    $tahun = $_POST['tahun'];
    $kondisi = $_POST['kondisi'];
    $id_ruang = $_POST['id_ruang'];

    $tambah = $con->query("INSERT INTO barang VALUES (
        default, 
        '$kd_barang', 
        '$nm_barang', 
        '$satuan', 
        '$tgl_inventaris',
        '$tahun',
        '$kondisi',
        '$id_ruang',
        0
    )");

    if ($tambah) {
        $_SESSION['pesan'] = "Data Berhasil di Simpan";
        echo "<meta http-equiv='refresh' content='0; url=index'>";
    } else {
        echo "Data anda gagal disimpan. Ulangi sekali lagi";
        echo "<meta http-equiv='refresh' content='0; url=tambah'>";
    }
}


?>