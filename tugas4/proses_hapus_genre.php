<?php
include 'koneksi.php';
$id_genre = $_GET["id_genre"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM genre WHERE id_genre='$id_genre' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='view_genre.php';</script>";
    }