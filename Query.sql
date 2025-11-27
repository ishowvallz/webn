-- 1. Membuat Database
CREATE DATABASE db_mahasiswa;

-- 2. Memilih Database
USE db_mahasiswa;

-- 3. Membuat tabel
CREATE TABLE tb_mahasiswa (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(15) NOT NULL UNIQUE,      -- NIM wajib unik!
    nama VARCHAR(100) NOT NULL,
    jurusan VARCHAR(50) NOT NULL,
    ipk DECIMAL(3,2) NOT NULL,            -- Contoh: 3.99 (total 3 digit, 2 di belakang koma)
    tgl_lahir DATE
);

-- 4. Mengisi Data Dummy (Seed Data)
INSERT INTO tb_mahasiswa (nim, nama, jurusan, ipk, tgl_lahir) VALUES
('24011101', 'Budi Santoso', 'Teknik Informatika', 3.85, '2003-05-12'),
('24011102', 'Citra Lestari', 'Sistem Informasi', 3.60, '2003-08-22'),
('24011103', 'Doni Pratama', 'Teknik Informatika', 2.96, '2002-11-01'),
('24011104', 'Eka Wijaya', 'Sistem Informasi', 3.95, '2004-01-15'),
('24011105', 'Fajar Nugroho', 'Teknik Informatika', 3.20, '2003-03-30'),
('24011106', 'Gina Marlina', 'Sistem Informasi', 3.75, '2002-07-18'),
('24011107', 'Intan Permata', 'Sistem Informasi', 3.60, '2004-06-20'),
('24011108', 'Joko Susilo', 'Teknik Informatika', 3.10, '2003-04-18'),
('24011109', 'Kiki Amalia', 'Sistem Informasi', 3.80, '2003-06-14');