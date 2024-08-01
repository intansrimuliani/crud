<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_penerbit = $_POST['id_penerbit'];
$nama_penerbit = $_POST['nama_penerbit'];
$alamat_penerbit = $_POST['alamat_penerbit'];

var_dump($nama_penerbit);
//query insert data ke dalam database
$query = "INSERT INTO Penerbit (nama_penerbit, alamat_penerbit) VALUES ('$nama_penerbit', '$alamat_penerbit')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>