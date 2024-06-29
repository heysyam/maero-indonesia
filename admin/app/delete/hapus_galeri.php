<?php
// Sertakan file konfigurasi
include('../../config/config.php');

// Ambil ID dari parameter GET
$id = $_GET['id'];

// Prepared statement untuk mengambil dan menghapus dari database
$query_select = mysqli_prepare($koneksi, "SELECT gambar FROM tbl_galeri WHERE id=?");
mysqli_stmt_bind_param($query_select, "i", $id);
mysqli_stmt_execute($query_select);
mysqli_stmt_bind_result($query_select, $file_path);
mysqli_stmt_fetch($query_select);
mysqli_stmt_close($query_select);

if ($file_path) {
    // Path lengkap ke file
    $file_path_full = '../../admin/app/add/images/' . $file_path;

    // Hapus file fisik jika ada
    if (file_exists($file_path_full)) {
        if (unlink($file_path_full)) {
            echo "File '$file_path_full' berhasil dihapus.";
        } else {
            echo "Gagal menghapus file '$file_path_full'.";
        }
    } else {
        echo "File '$file_path_full' tidak ditemukan.";
    }

    // Hapus data dari database setelah file dihapus
    $query_delete = mysqli_prepare($koneksi, "DELETE FROM tbl_galeri WHERE id=?");
    mysqli_stmt_bind_param($query_delete, "i", $id);
    mysqli_stmt_execute($query_delete);
    mysqli_stmt_close($query_delete);
} else {
    echo "Data tidak ditemukan dalam database.";
}

// Redirect ke halaman galeri setelah penghapusan
header('Location: ../index.php?page=galeri');
exit();
?>
