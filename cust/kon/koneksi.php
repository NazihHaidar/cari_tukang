<?php

$server = "localhost";
$user = "u1149608_jioff";
$password = "charanko77";
$nama_database = "u1149608_db_claim";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>