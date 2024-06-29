<?php
include('../../config/config.php');
$id                 = $_GET['id'];
$nama               = $_GET['nama'];
$tanggal            = $_GET['tanggal'];
$deskripsi          = $_GET['deskripsi'];
$waktu              = $_GET['waktu'];
$author             = $_GET['author'];
$query = mysqli_query($koneksi,"UPDATE tbl_agenda SET nama='$nama',tanggal='$tanggal',deskripsi='$deskripsi',waktu='$waktu',author='$author' WHERE id='$id'");
header('Location: ../index.php?page=monitoring');
?>