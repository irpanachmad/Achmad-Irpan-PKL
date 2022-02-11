<?php
include '../../app/config.php';

$no = 1;

if (isset($_POST['cetak1'])) {

    $ruang = $_POST['ruang'];

    $sql = mysqli_query($con, "SELECT * FROM barang a LEFT JOIN ruang b ON a.id_ruang = b.id_ruang WHERE musnah = 0 AND a.id_ruang = '$ruang' ORDER BY id_barang DESC");
    $dt = $con->query("SELECT * FROM ruang WHERE id_ruang = '$ruang' ")->fetch_array();
    $label = 'LAPORAN DATA INVENTARIS BARANG <br> Ruangan / Tempat : ' . $dt['nm_ruang'];
} else {
    $sql = mysqli_query($con, "SELECT * FROM barang a LEFT JOIN ruang b ON a.id_ruang = b.id_ruang WHERE musnah = 0 ORDER BY id_barang DESC");
    $label = 'LAPORAN DATA INVENTARIS BARANG';
}

require_once '../../assets/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'LEGAL-L']);
ob_start();
?>

<script type="text/javascript">
    window.print();
</script>

<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Inventaris Barang</title>
</head>

<style>
    th {
        color: white;
    }
</style>

<body>
    <div class="table-responsive">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <td align="center">
                    <img src="<?= base_url('assets/images/logo.png') ?>" align="left" height="75">
                </td>
                <td align="center">
                    <h4>PEMERINTAH KOTA BANJARMASIN</h4>
                    <h2>DINAS KOMUNIKASI DAN INFORMATIKA STATISTIK</h2>
                    <h6>Jl. RE Martadinata, Telawang, Banjarmasin Barat, Kota Banjarmasin, Kalimantan Selatan Kode Pos 70231</h6>
                </td>
                <td align="center">
                    <img src="<?= base_url('assets/images/pelengkap.png') ?>" align="right" height="75">
                </td>
            </tr>
        </table>
    </div>
    <hr size="2px" color="black">

    <h4 align="center">
        <?= $label ?><br>
    </h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" cellpadding="6" width="100%">
                    <thead>
                        <tr bgcolor="#17A2B8" align="center">
                            <th>No</th>
                            <th>Kode Inventaris</th>
                            <th>Nama Inventaris</th>
                            <th>Satuan</th>
                            <th>Tanggal</th>
                            <th>Tahun</th>
                            <th>Kondisi</th>
                            <th>Tempat/Ruangan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($data = mysqli_fetch_array($sql)) { ?>
                            <tr>
                                <td align="center" width="5%"><?= $no++; ?></td>
                                <td align="center"><?= $data['kd_barang'] ?></td>
                                <td align="center"><?= $data['nm_barang'] ?></td>
                                <td align="center"><?= $data['satuan'] ?></td>
                                <td align="center"><?= tgl($data['tgl_inventaris']) ?></td>
                                <td align="center"><?= $data['tahun'] ?></td>
                                <td align="center"><?= $data['kondisi'] ?></td>
                                <td align="center"><?= $data['nm_ruang'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <br>
    <br>

    <br>
    <div class="table-responsive">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <td align="center" width="85%">
                </td>
                <td align="center">
                    <h6>
                        <?= tgl_indo(date('Y-m-d')) ?><br>
                        Banjarmasin <br>
                        <br><br><br><br>
                        <u>Admin</u><br>
                    </h6>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
<?php
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output();
?>