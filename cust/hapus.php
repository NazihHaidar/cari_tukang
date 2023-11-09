<?php 
include("koneksi.php");

if( isset($_GET['id_user']) ){

    // ambil id dari query string
    $id_user = $_GET['id_user'];

    // buat query hapus
    $sql = "DELETE FROM user WHERE id_user=$id_user";
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