<?php
include 'koneksi.php';
$id_singer = $_GET["id_singer"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM singer WHERE id_singer='$id_singer' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='view_singer.php';</script>";
    }