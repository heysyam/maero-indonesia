<?php
include('../../config/config.php');
$id                    = $_GET['id'];
$nama                  = $_GET['nama'];
$email                 = $_GET['email'];
$isi                   = $_GET['isi'];
$tanggal               = $_GET['tanggal'];
$status_id             = $_GET['status_id'];
$tulisan_id            = $_GET['tulisan_id'];
$parent                = $_GET['parent'];
$phone                 = $_GET['phone'];
$query = mysqli_query($koneksi,"INSERT INTO tbl_users(id, nama, email, isi, tanggal, status_id, tulisan_id, parent, phone) VALUES ('','$nama','$email','$isi','$tanggal','$status_id','$tulisan_id','$parent','$phone')");
header('Location: ../index.php?page=dashboard');
?>