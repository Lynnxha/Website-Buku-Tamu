<?php include "../lib/header_admin.php";
?>  


                    <!-- Page Heading -->

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-12">

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Rekapitulasi <?=date('d F Y') ?></h6>
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
                                            <td class="show-popup" data-tujuan="<?= $data['tujuan']?>"><button class="btn btn-info form-control"><i class="fas fa-search fa-sm"></i> Lihat..</button></td>
                                            <td><?= $data['nope']?></td>
                                            <td><?= date('d M,Y', strtotime($data['tanggal'])) ?></td>
                                        </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                </table>
                                <div class="overlay" id="overlay"></div>
                                    <div class="popup-card" id="popup-card">
                                    <span class="close-button" onclick="closePopup()">&times;</span>
                                    <div class="popup-content" id="popup-content"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php include "../lib/footer_admin.php";
?>  