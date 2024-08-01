<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_peminjaman = $_POST['id_peminjaman'];
$nama_anggota = $_POST['nama_anggota'];
$nama_buku = $_POST['nama_buku'];
$jumlah_peminjaman = $_POST['jumlah_peminjaman'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];

var_dump($nama_anggota);
//query insert data ke dalam database
$query = "INSERT INTO Peminjaman (nama_anggota, nama_buku, jumlah_peminjaman, tanggal_peminjaman) VALUES ('$nama_anggota', '$nama_buku', '$jumlah_peminjaman', '$tanggal_peminjaman')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>