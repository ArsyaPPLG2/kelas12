CREATE DATABASE pwpb;

USE pwpb;

CREATE TABLE tb_list (
    Nomor INT AUTO_INCREMENT PRIMARY KEY,
    kegiatan VARCHAR(255) NOT NULL,
    tanggal DATE NOT NULL,
    status VARCHAR(50) NOT NULL
);
