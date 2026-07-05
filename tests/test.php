<?php
echo "Memulai pengujian otomatis...\n";


if (file_exists(__DIR__ . '/../index.html')) {
    echo "STATUS: BERHASIL. File utama aplikasi ditemukan.\n";
    exit(0); // Memberi sinyal ke GitHub Actions bahwa tes sukses
} else {
    echo "STATUS: GAGAL. File utama aplikasi tidak ditemukan.\n";
    exit(1); // Memberi sinyal ke GitHub Actions bahwa tes gagal
}