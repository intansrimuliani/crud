<?php
//koneksi database
include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM penerbit WHERE id_penerbit = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>