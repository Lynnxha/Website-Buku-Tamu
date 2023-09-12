<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "bukutamu";

    $config = mysqli_connect($host, $user, $password, $database) or die(mysqli_error($config));
?>