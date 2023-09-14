<?php
if(isset($_POST['save'])) {
    $tgl = date('Y-m-d');

    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES); 
    $alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES); 
    $tujuan = htmlspecialchars($_POST['tujuan'], ENT_QUOTES); 
    $nope = htmlspecialchars($_POST['nope'], ENT_QUOTES); 

    $save = mysqli_query($config, "INSERT INTO tamu VALUES ('','$tgl','$nama','$alamat','$tujuan','$nope')");

    if($save) {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script>
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Simpan Sukses',
            }).then(function() {
              document.location='?';
            });
        </script>";
    } else {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Simpan Gagal',
              text: 'Something went wrong!',
            }).then(function() {
              document.location='?';
            });
        </script>";
    }
}
?>
