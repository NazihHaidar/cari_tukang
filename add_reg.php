<?php

include("kon.php");

if(isset($_POST['add'])){

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];

    $sql = "INSERT INTO tb_admin (username,password,email,status) VALUES('$username','$password','$email','$status')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {    
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>