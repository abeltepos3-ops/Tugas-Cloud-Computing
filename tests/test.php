<?php
echo "Memulai pengujian otomatis...\n";

// Mengecek apakah file index.php ada di folder utama aplikasi
if (file_exists(__DIR__ . '/../index.php')) {
    echo "STATUS: BERHASIL. File utama aplikasi ditemukan.\n";
    exit(0); // Memberi sinyal ke GitHub Actions bahwa tes sukses
} else {
    echo "STATUS: GAGAL. File utama aplikasi tidak ditemukan.\n";
    exit(1); // Memberi sinyal ke GitHub Actions bahwa tes gagal
}