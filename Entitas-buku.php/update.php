<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE buku SET judul = '$judul', pengarang = '$pengarang' WHERE id_buku = '$id_buku'";
// var_dump($query);

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupdate!";
}

?>