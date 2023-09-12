<?php include "lib/header.php"; ?>
<?php include "lib/function/save.php"; ?>

<div class="col-lg-7 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Identitas Pengunjung</h1>
                </div>
                <form class="user" method="POST" action="">

                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Pengunjung" required>
                    </div>

                    
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat Pengunjung" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="tujuan" placeholder="Tujuan Pengunjung" required>
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control form-control-user" name="nope" placeholder="No HP Pengunjung" required>
                    </div>

                    <button class="btn btn-primary btn-user btn-block" type="submit" name="save">Simpan</button>
                    <hr>
                    <div class="text-center">
                        <p class="copygirht small">Sistem Buku Tamu BKI Skariga <?=date('Y') ?> All Right Reserved </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-5">
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Statistik Pengunjung</h1>
            </div>

            <?php
                // Deklarasi tanggal sekarang
                $tgl_sekarang = date('Y-m-d');
                // Deklarasi tanggal kemarin
                $tgl_kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));
                // Deklarasi data 1 minggu
                $tgl_week = date('Y-m-d h:i:s', strtotime('-1 week +1day', strtotime($tgl_sekarang)));
                // Deklarasi data 1 bulan
                $month = date('m');

                $sekarang = date('y-m-d h:i:s');

                // Query tampilkan jumlah data pengunjung
                $tgl_sekarang = mysqli_fetch_array(mysqli_query($config, "SELECT count(*) FROM tamu where tanggal like '%$tgl_sekarang%'"));

                // Query tampilkan jumlah data pengunjung kemarin
                $tgl_kemarin = mysqli_fetch_array(mysqli_query($config, "SELECT count(*) FROM tamu where tanggal like '%$tgl_kemarin%'"));

                // Query tampilkan jumlah data pengunjung 1 minggu
                $tgl_week = mysqli_fetch_array(mysqli_query($config, "SELECT count(*) FROM tamu where tanggal BETWEEN '$tgl_week' AND '$sekarang'"));

                // Query tampilkan jumlah data pengunjung 1 bulan
                $month = mysqli_fetch_array(mysqli_query($config, "SELECT count(*) FROM tamu where MONTH(tanggal) = '$month' "));

                // Query tampilkan jumlah data pengunjung keselurhan
                $keseluruhan = mysqli_fetch_array(mysqli_query($config, "SELECT count(*) FROM tamu"));
            ?>


            <table class="table table-bordered">
                <tr>
                    <td><i class='bx bx-user'></i> Hari Ini</td>
                    <td>: <?=$tgl_sekarang[0]; ?></td>
                </tr>
                <tr>
                    <td><i class='bx bx-user'></i> Kemarin</td>
                    <td>: <?=$tgl_kemarin[0]; ?></td>
                </tr>
                <tr>
                    <td><i class='bx bx-user'></i> Minggu Ini</td>
                    <td>: <?=$tgl_week[0]; ?></td>
                </tr>
                <tr>
                    <td><i class='bx bx-user'></i> Bulan Ini</td>
                    <td>: <?=$month[0]; ?></td>
                </tr>
                <tr>
                    <td><i class='bx bx-stats'></i> Keseluruhan</td>
                    <td>: <?=$keseluruhan[0];?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="col-lg-12 mt-3">
    <div class="card">
        <div class="card-title">
            <h1 class="h4 text-gray-900 mt-3 ml-3">Data Pengunjung <?=date('D M Y') ?></h1>
            <hr>
            <a href="rekap.php" class="btn btn-outline-success ml-3"><i class='bx bx-table'></i> Rekap Data</a>
            <a href="logout.php" class="btn btn-outline-danger ml-3"><i class='bx bx-log-out'></i> Logout</a>
        </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
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
                        $tql = date('Y-m-d');
                        $query = mysqli_query($config, "SELECT * FROM tamu where tanggal like '%$tql%' order by id desc");
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
        </div>
    </div>
</div>

<?php include "lib/footer.php"; ?>