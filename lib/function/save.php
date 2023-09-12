<?php
if(isset($_POST['save'])) {
    $tgl = date('Y-m-d');

    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES); 
    $alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES); 
    $tujuan = htmlspecialchars($_POST['tujuan'], ENT_QUOTES); 
    $nope = htmlspecialchars($_POST['nope'], ENT_QUOTES); 

    $save = mysqli_query($config, "INSERT INTO tamu VALUES ('','$tgl','$nama','$alamat','$tujuan','$nope')");

    if($save) {
        echo "<script>alert('Simpan Sukses');
              document.location='?'</script>";
    }else {
        echo "<script>alert('Simpan Gagal');
              document.location='?'</script>";
    }
}
?>