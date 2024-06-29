<?php
include('../../config/config.php');

// Mendapatkan informasi gambar
$gambar = $_GET['gambar'];
list($width, $height) = getimagesize($gambar);

// Tentukan batas ukuran yang diinginkan
$max_width = 800;
$max_height = 600;

// Cek apakah gambar melebihi batas yang ditentukan
if ($width > $max_width || $height > $max_height) {
    // Menggunakan fungsi resize atau cara lainnya sesuai kebutuhan Anda
    // Misalnya menggunakan library seperti GD atau ImageMagick untuk resize gambar
    // Contoh menggunakan GD:
    $image = imagecreatefromjpeg($gambar);
    $new_width = min($width, $max_width);
    $new_height = $height * ($new_width / $width);
    $resized_image = imagecreatetruecolor($new_width, $new_height);
    imagecopyresampled($resized_image, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
    
    // Simpan gambar yang sudah diresize ke file baru atau mengganti gambar asli
    imagejpeg($resized_image, $gambar); // Menyimpan gambar yang sudah diresize ke file asli
    
    // Hapus gambar yang sudah diresize dari memori
    imagedestroy($image);
    imagedestroy($resized_image);
}

// Update data ke database
$id = $_GET['id'];
$judul = $_GET['judul'];
$tanggal = $_GET['tanggal'];
$author = $_GET['author'];
$query = mysqli_query($koneksi,"UPDATE tbl_galeri SET judul='$judul',tanggal='$tanggal',gambar='$gambar',author='$author' WHERE id='$id'");
header('Location: ../index.php?page=galeri');
?>
