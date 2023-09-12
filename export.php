<?php
include "config.php";

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Export Excel Data Pengunjung.xls");
header("Pragma: no-cache");
header("Expires:0");
?>

<table border="1">
    <thead>
        <tr>
            <th colspan="6"> Rekapitulasi Data Pengunjung </th>
        </tr>
        <tr>
            <th>No</th>
            <th>Nama Pengunjung</th>
            <th>Alamat Pengujung</th>
            <th>Tujuan</th>
            <th>No HP</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $tgla = $_POST['tgla'];
            $tglb = $_POST['tglb'];

            $query = mysqli_query($config, "SELECT * FROM tamu where tanggal BETWEEN '$tgla' AND '$tglb' order by id desc");
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?=$no++ ?></td>
            <td><?= $data['nama']?></td>
            <td><?= $data['alamat']?></td>
            <td><?= $data['tujuan']?></td>
            <td><?= $data['nope']?></td>
            <td><?= date('d M,Y', strtotime($data['tanggal'])) ?></td>
        </tr>
        <?php }
        ?>
    </tbody>
</table>