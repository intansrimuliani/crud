<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_penerbit   = $_POST['id_penerbit'];
$nama_penerbit = $_POST['nama_penerbit'];
$alamat_penerbit  = $_POST['alamat_penerbit'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE penerbit SET nama_penerbit = '$nama_penerbit', alamat_penerbit = '$alamat_penerbit' WHERE id_penerbit = '$id_penerbit'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>