<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_pegawai   = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$alamat       = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pegawai SET nama_pegawai = '$nama_pegawai', alamat = '$alamat' WHERE id_pegawai = '$id_pegawai'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>