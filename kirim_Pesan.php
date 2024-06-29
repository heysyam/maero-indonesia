<?php
include('admin/config/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form dan melakukan sanitasi
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $isi = isset($_POST['isi']) ? $_POST['isi'] : '';

    // Menyiapkan pernyataan SQL
    $sql = "INSERT INTO tbl_komentar (nama, email, phone, isi) 
            VALUES (?, ?, ?, ?)";

    // Menyiapkan pernyataan menggunakan prepared statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nama, $email, $phone, $isi);

    // Menjalankan pernyataan
    if ($stmt->execute()) {
        echo "Pesan berhasil dikirim.";
        header('Location: contact.php?success=true'); // Redirect setelah sukses
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Menutup statement
    $stmt->close();
}
$conn->close();
?>
