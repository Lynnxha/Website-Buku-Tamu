<?php include "lib/header.php"; ?>

<div class="col-lg-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h1 class="h4 text-gray-900 mt-3 ml-3 text-center">Rekapitulasi Data Pengunjung</h1>
            <hr>
        <div class="card-body">
            <form action="" method="POST" class="text-center">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Dari Tanggal</label>
                            <input type="date" class="form-control" name="tgl1" value="<?= isset($_POST['tgl1']) ? $_POST['tgl1']: date('Y-m-d') ?>" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Hingga Tanggal</label>
                            <input type="date" class="form-control" name="tgl2" value="<?= isset($_POST['tgl2']) ? $_POST['tgl2']: date('Y-m-d') ?>" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-2">
                        <button class="btn btn-outline-primary form-control" name="tampilkan"><i class='bx bx-search'></i> Tampilkan</button>
                    </div>
                    <div class="col-md-2">
                        <a href="admin" class="btn btn-outline-warning form-control" name="tampilkan"><i class='bx bx-arrow-back'></i> Kemballi</a>
                    </div>
                </div>
            </form>

            <!-- Deklarasi Data Rekap -->
            <?php
                if(isset($_POST['tampilkan'])) :
            ?>

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
                            $tgl1 = $_POST['tgl1'];
                            $tgl2 = $_POST['tgl2'];

                            $query = mysqli_query($config, "SELECT * FROM tamu where tanggal BETWEEN '$tgl1' AND '$tgl2' order by id desc");
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
                
                <center>
                    <div class="col-md-4">
                        <form action="export.php" method="POST" class="mt-3">
                            <input type="hidden" name="tgla" value="<?= @$_POST['tgl1'] ?>">
                            <input type="hidden" name="tglb" value="<?= @$_POST['tgl2'] ?>">
    
                            <button class="btn btn-outline-success form-control" name="bexport"><i class='bx bx-export'></i> Export Excell</button>
                            
                        </form>
                    </div>
                </center>
            </div>

            <?php endif; ?>

        </div>
    </div>
</div>


<?php include "lib/footer.php"; ?>