<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id']; 
    $kantor = $_POST['kantor'];
    $divisi = $_POST['divisi'];
    $tgl_mulai = $_POST['tgl_mulai'];
    $tgl_berakir = $_POST['tgl_berakir'];
    $promo = $_POST['promo'];
    $barang = $_POST['barang'];
    $mekanisme = $_POST['mekanisme'];
    $jml_barang = $_POST['jml_barang'];
    $jml_rupiah = $_POST['jml_rupiah'];
    $activity = $_POST['activity'];
    $implementasi = $_POST['implementasi'];
    $keterangan = $_POST['keterangan'];

    // buat query update
    $sql = "UPDATE `tb_claim` SET `kantor`='$kantor',`divisi`='$divisi',`tgl_mulai`='$tgl_mulai',
    `tgl_berakir`='$tgl_berakir',`promo`='$promo',`barang`='$barang',`mekanisme`='$mekanisme',`jml_barang`='$jml_barang',`jml_rupiah`='$jml_rupiah',
    `activity`='$activity',`implementasi`='$implementasi',`keterangan`='$keterangan' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: empty.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>