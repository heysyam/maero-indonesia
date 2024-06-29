<?php
include('../../config/config.php');

// Ambil data dari form menggunakan metode POST
$id              = $_POST['id'];
$nama            = $_POST['nama'];
$jabatan         = $_POST['jabatan'];
$tahun_bergabung = $_POST['tahun_bergabung'];
$status_id       = $_POST['status_id'];

// Update data di dalam database
$query = "UPDATE tbl_anggota SET nama='$nama', jabatan='$jabatan', tahun_bergabung='$tahun_bergabung', status_id='$status_id' WHERE id='$id'";

if (mysqli_query($koneksi, $query)) {
    // Redirect ke halaman data jika update berhasil
    header('Location: ../index.php?page=data-anggota');
} else {
    // Tampilkan pesan kesalahan jika update gagal
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
