<?php
$servername = "localhost";
$username = "root";  // Ganti dengan username database Anda
$password = "";      // Ganti dengan password database Anda
$dbname = "pwpb";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari formulir
$kegiatan = $_POST['kegiatan'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];

// Menyimpan data ke tabel menggunakan prepared statement
$stmt = $conn->prepare("INSERT INTO tb_list (kegiatan, tanggal, status) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $kegiatan, $tanggal, $status);

if ($stmt->execute()) {
    echo "Data berhasil disimpan";
    header("Location: kls12.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Menutup statement dan koneksi
$stmt->close();
$conn->close();
?>
