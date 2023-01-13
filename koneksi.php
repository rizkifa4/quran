<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "dbquran";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));