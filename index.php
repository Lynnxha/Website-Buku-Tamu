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
                                    <p class="copygirht small">Sistem Buku Tamu Skariga <?=date('Y') ?> All Right Reserved </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php include "lib/footer.php"; ?>