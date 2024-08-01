<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_pengembalian = $_POST['id_pengembalian'];
$nama_anggota = $_POST['nama_anggota'];
$tanggal_kembali = $_POST['tanggal_kembali'];

var_dump($Nama_Anggota);
//query insert data ke dalam database
$query = "INSERT INTO Pengembalian (nama_anggota, tanggal_kembali) VALUES ('$nama_anggota', '$tanggal_kembali')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>