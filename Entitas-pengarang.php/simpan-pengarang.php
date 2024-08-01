<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_pengarang = $_POST['id_pengarang'];
$nama_pengarang = $_POST['nama_pengarang'];
$alamat_pengarang = $_POST['alamat_pengarang'];

var_dump($nama_pengarang);
//query insert data ke dalam database
$query = "INSERT INTO Pengarang (nama_pengarang, alamat_pengarang) VALUES ('$nama_pengarang', '$alamat_pengarang')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>