<?php

session_start();

include "config.php";

@$pass = md5($_POST['password']);
@$username = mysqli_escape_string($config, $_POST['username']);
@$password = mysqli_escape_string($config, $pass);

$query = mysqli_query($config, "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND status = 'Aktif' ");

$data = mysqli_fetch_array($query);


if($data) {
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['nama_pengguna'] = $data['nama_pengguna'];

    $_SESSION['login_success'] = true;

    header('location:admin');
}else {
    echo "<script>alert('Maaf, Login Gagal Silakan Cek Username atau Password Anda');
    document.location='login.php';
    </script>";
}
?>