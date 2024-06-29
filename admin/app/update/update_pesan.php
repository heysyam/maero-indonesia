<?php
include '../../config/config.php';

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$phone  = $_POST['phone'];
$isi    = $_POST['isi'];

$query = "UPDATE tbl_komentar SET nama='$nama', email='$email', phone='$phone', isi='$isi' WHERE id='$id'";
header('Location: ../index.php?page=dashboard');
?>
