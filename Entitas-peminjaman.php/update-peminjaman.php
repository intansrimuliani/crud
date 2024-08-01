<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_peminjaman   = $_POST['id_peminjaman'];
$nama_anggota = $_POST['nama_anggota'];
$nama_buku  = $_POST['nama_buku'];
$jumlah_peminjaman  = $_POST['jumlah_peminjaman'];
$tanggal_peminjaman  = $_POST['tanggal_peminjaman'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE peminjaman SET nama_anggota = '$nama_anggota', nama_buku = '$nama_buku', jumlah_peminjaman = '$jumlah_peminjaman', tanggal_peminjaman = '$tanggal_peminjaman' WHERE id_peminjaman = '$id_peminjaman'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>