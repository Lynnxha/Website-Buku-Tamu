<?php include "../lib/header_admin.php";
?>  

                    <!-- Page Heading -->

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-12">

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Statistik <?=date('d F Y') ?></h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
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
                    </div>
                    </div>  

<?php include "../lib/footer_admin.php";
?>  