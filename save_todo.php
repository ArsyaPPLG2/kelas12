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
$Nomor = $_POST['Nomor'];
$kegiatan = $_POST['kegiatan'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];

// Menyimpan data ke tabel
$sql = "INSERT INTO tb_list (Nomor,kegiatan, tanggal, status) VALUES ('$Nomor', '$kegiatan', '$tanggal', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
    header("Location: kls12.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
