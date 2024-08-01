<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$idbuku = $_POST['idbuku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];

var_dump($judul);
//query insert data ke dalam database
$query = "INSERT INTO buku (judul, pengarang) VALUES ('$judul', '$pengarang')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>