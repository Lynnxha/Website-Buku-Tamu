<?php
include "../config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $delete_query = mysqli_query($config, "DELETE FROM tamu WHERE id = $id");

    if($delete_query){
        // Menggunakan JavaScript untuk menampilkan alert
        echo '<script>alert("Data berhasil dihapus."); window.location.href = "../admin/data.php";</script>';
    } else {
        echo "Gagal menghapus data.";
    }
} else {
    echo "ID data tidak ditemukan.";
}
?>
