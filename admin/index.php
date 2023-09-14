<?php include "../lib/header_admin.php";
?>  

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>  

                    <!-- Conten t Row -->
                    <div class="row">

                        <div class="col-lg-12 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                <?php
                                    if (isset($_SESSION['username'])) {
                                        $namaPengguna = $_SESSION['username'];
                                        $Uppercase = ucfirst($namaPengguna);
                                        echo '<h6 class="m-0 font-weight-bold text-primary">Hallo Welcome, ' . $Uppercase . '</h6>';
                                    }
                                ?>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 100px;"
                                            src="../assets/img/gravatar.png" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div>

                        </div>
                    </div>
<?php include "../lib/footer_admin.php";
?>