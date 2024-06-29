<?php
include('../../config/config.php');

$query = "SELECT * FROM tbl_galeri";
$result = mysqli_query($koneksi, $query);
$tbl_galeri = [];
while ($row = mysqli_fetch_assoc($result)) {
    $tbl_galeri[] = $row;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $author = $_POST['author'];

    // Menangani unggahan file
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Periksa apakah file gambar adalah gambar asli atau gambar palsu
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.";
        $uploadOk = 0;
    }

    // Periksa apakah file sudah ada
    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    // Periksa apakah direktori target ada, jika tidak, buat direktori
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    // Periksa ukuran file
    if ($_FILES["gambar"]["size"] > 10000000) { // 10MB
        echo "Maaf, ukuran file Anda terlalu besar.";
        $uploadOk = 0;
    }

    // Izinkan format file tertentu
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.";
        $uploadOk = 0;
    }

    // Periksa apakah $uploadOk diatur ke 0 oleh kesalahan
    if ($uploadOk == 0) {
        echo "Maaf, file Anda tidak diunggah.";
    // Jika semuanya baik-baik saja, coba unggah file
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            $gambar = basename($_FILES["gambar"]["name"]);
            $sql = "INSERT INTO tbl_galeri (judul, tanggal, gambar, author) VALUES ('$judul', '$tanggal', '$gambar', '$author')";
            if (mysqli_query($koneksi, $sql)) {
                header('Location: ../index.php?page=galeri');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
            }
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
        }
    }
}
?>
