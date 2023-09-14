<?php include "../lib/header_admin.php";
?>
                    <!-- Page Heading -->

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-12">

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Pengguna </h6>
                                </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                           $tgl = date('Y-m-d');
                                            $query = mysqli_query($config, "SELECT * FROM user order by id_user asc");
                                            $no = 1;
                                            while($data = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                            <td><?=$no++ ?></td>
                                            <td><?= $data['username']?></td>
                                            <td><?= $data['nama_pengguna']?></td>
                                            <td><?= $data['status']?></td>
                                        </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php include "../lib/footer_admin.php";
?>  