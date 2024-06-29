<?php
include('../../config/config.php');
$id                 = $_GET['id'];
$nama               = $_GET['nama'];
$tanggal            = $_GET['tanggal'];
$deskripsi          = $_GET['deskripsi'];
$waktu              = $_GET['waktu'];
$author             = $_GET['author'];
$query = mysqli_query($koneksi,"INSERT INTO tbl_agenda(id,nama,tanggal,deskripsi,waktu,author) VALUES ('','$nama','$tanggal','$deskripsi','$waktu','$author')");
header('Location: ../index.php?page=monitoring');
?>