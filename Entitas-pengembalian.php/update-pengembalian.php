<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_Pengembalian   = $_POST['id_pengembalian'];
$nama_anggota = $_POST['nama_anggota'];
$tanggal_kembali  = $_POST['tanggal_kembali'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE Pengembalian SET nama_anggota = '$nama_anggota', tanggal_kembali = '$tanggal_kembali' WHERE id_Pengembalian = '$id_Pengembalian'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupdate!";
}

?>