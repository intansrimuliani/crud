<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama_pegawai = $_POST['nama_pegawai'];
$alamat = $_POST['alamat'];

var_dump($nama_pegawai);
//query insert data ke dalam database
$query = "INSERT INTO pegawai (nama_pegawai, alamat) VALUES ('$nama_pegawai', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>