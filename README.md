# 📖 Tugas Project Pertemuan 10: Simple CRUD + Host DB

## 🧩 Informasi Umum

**Nama Proyek:** Simple CRUD + Host DB  
**Sifat:** Project-Based (Group)  
**Tema:** Kamus Mini Istilah-istilah dalam Dunia Informatika  
**Kelompok:** 2  

### 👥 Anggota Kelompok
1. Dwiki Pratika Admaja – D1041221014  
2. Nurmala Sari – D1041221092  
3. Bintang Budi Pangestu – D1041221046  
4. Wilhelmus Ikchan Dwi Putra – D1041231093  
5. Muhammad Zhia Ijlal – D1041211052  
6. Phasya Ananta – D1041211015  

### Create DataBase
-- 1. Buat Database (jika belum ada)
CREATE DATABASE IF NOT EXISTS db_kamus
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 2. Gunakan Database
USE db_kamus;

-- 3. Buat Tabel Istilah
CREATE TABLE IF NOT EXISTS table_istilah (
  id INT AUTO_INCREMENT PRIMARY KEY,
  istilah VARCHAR(255) NOT NULL UNIQUE,
  definisi TEXT NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- 4. Masukkan Data Dummy (Contoh)
INSERT INTO table_istilah (istilah, definisi) VALUES
('API', 'Singkatan dari Application Programming Interface. Sebuah antarmuka yang memungkinkan dua aplikasi perangkat lunak berkomunikasi satu sama lain.'),
('Backend', 'Bagian dari aplikasi yang berjalan di server dan bertanggung jawab atas logika bisnis, pemrosesan data, dan interaksi dengan database.'),
('Frontend', 'Bagian dari aplikasi yang berinteraksi langsung dengan pengguna (user interface). Ini adalah apa yang pengguna lihat dan gunakan di browser.'),
('Database', 'Kumpulan data terorganisir yang disimpan secara elektronik. Digunakan untuk menyimpan, mengelola, dan mengambil data.'),
('Git', 'Sistem kontrol versi terdistribusi (Distributed Version Control System) yang digunakan untuk melacak perubahan pada kode sumber selama pengembangan perangkat lunak.'),
('HTML', 'Singkatan dari HyperText Markup Language. Bahasa markup standar yang digunakan untuk membuat dan menyusun halaman web.'),
('CSS', 'Singkatan dari Cascading Style Sheets. Bahasa yang digunakan untuk mendeskripsikan tampilan dan format dokumen yang ditulis dalam HTML.'),
('JavaScript', 'Bahasa pemrograman tingkat tinggi yang digunakan untuk membuat halaman web menjadi interaktif dan dinamis.'),
('Framework', 'Kerangka kerja perangkat lunak yang menyediakan abstraksi dan fungsionalitas umum untuk membangun aplikasi dengan lebih cepat dan terstruktur.'),
('Compiler', 'Program komputer yang menerjemahkan kode yang ditulis dalam satu bahasa pemrograman (source code) ke bahasa lain (target code), biasanya bahasa mesin.');
### Cara Pengerjaan untuk Anggota Tim

Langkah-langkah umum untuk mengunggah project ke GitHub:

```bash
# 1. Inisialisasi repository lokal
git init
```

```bash
# 2. Tambahkan semua file ke repository
git add .
```

```bash
# 3. Commit perubahan
git commit -m "Initial commit - Nama Perubahan"
```

```bash
# 4. Hubungkan dengan repository GitHub
git remote add origin https://github.com/BintangBudi/KELOMPOK-2---Kamus-Mini-Istilah-istilah-dalam-dunia-Informatika.git
```

```bash
# 5. Push project ke GitHub
git push -u origin main
```
