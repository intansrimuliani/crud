<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$namaAnggota = $_POST['nama_anggota'];
$alamat = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO anggota (nama_anggota, alamat) VALUES ('$namaAnggota', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>