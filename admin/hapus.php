<?php 
include("koneksi.php");

if( isset($_GET['id_admin']) ){

    // ambil id dari query string
    $id_admin = $_GET['id_admin'];

    // buat query hapus
    $sql = "DELETE FROM tb_admin WHERE id_admin=$id_admin";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: user.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>