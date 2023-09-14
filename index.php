<?php include "lib/header.php"; ?>
<?php include "lib/function/save.php"; ?>

            <div class="col-lg-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Form Identitas Pengunjung</h1>
                            </div>
                            <form class="user" method="POST" action="">

                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Pengunjung" required>
                                </div>

                                
                                <div class="form-group">
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat Pengunjung" required>
                                </div>
                                
                                <div class="form-group">
                                    <!-- <input type="text" class="form-control" name="tujuan" placeholder="Tujuan Pengunjung" required> -->
                                    <textarea name="tujuan" class="form-control" cols="10" rows="5" placeholder="Tujuan Pengunjungan" required></textarea>
                                </div>

                                <div class="form-group">
                                    <input type="number" class="form-control" name="nope" placeholder="No HP Pengunjung" required>
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

            <!-- <div class="col-lg-12 mt-3">
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
            </div> -->
        </div>
        
<?php include "lib/footer.php"; ?>