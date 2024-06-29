<?php
include('../../config/config.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi,"DELETE FROM tbl_agenda WHERE id='$id'");
header('Location: ../index.php?page=monitoring');
?>