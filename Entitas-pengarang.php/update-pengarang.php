<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_pengarang   = $_POST['id_pengarang'];
$nama_pengarang = $_POST['nama_pengarang'];
$alamat_pengarang  = $_POST['alamat_pengarang'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE Pengarang SET nama_pengarang = '$nama_pengarang', alamat_pengarang = '$alamat_pengarang' WHERE id_pengarang = '$id_pengarang'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>