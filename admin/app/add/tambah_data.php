<?php
include('../../config/config.php');

// Ambil data dari form menggunakan metode POST
$nama            = $_POST['nama'];
$jabatan         = $_POST['jabatan'];
$tahun_bergabung = $_POST['tahun_bergabung'];
$status_id       = $_POST['status_id'];

// Masukkan data ke dalam database
$query = "INSERT INTO tbl_anggota (nama, jabatan, tahun_bergabung, status_id) VALUES ('$nama', '$jabatan', '$tahun_bergabung', '$status_id')";

if (mysqli_query($koneksi, $query)) {
    // Redirect ke halaman data jika insert berhasil
    header('Location: ../index.php?page=data-anggota');
} else {
    // Tampilkan pesan kesalahan jika insert gagal
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
