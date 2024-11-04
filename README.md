## Ujian Tengah Semester
Pemrograman Berbasis Web & Prak
Ahmad Laatansa Sajidan Kowsoleea
4521210072

## Website Sederhana Kursus Online
Proyek ini adalah sebuah portal pendaftaran kursus online sederhana yang dibuat dengan Laravel. Tujuan dari aplikasi ini adalah untuk memberikan pengguna kemampuan untuk mendaftarkan diri pada berbagai kursus yang tersedia. Aplikasi ini memiliki fitur CRUD untuk mengelola kursus dan pendaftaran siswa.

## Deskripsi Proyek
Portal Pendaftaran Kursus Online dirancang untuk memudahkan manajemen kursus dan siswa secara efisien. Admin dapat menambahkan, mengubah, dan menghapus kursus yang tersedia. Selain itu, siswa dapat didaftarkan ke dalam kursus tertentu dengan memasukkan detail pribadi mereka.
## Fitur Utama
CRUD Kursus: Admin dapat menambah, mengubah, dan menghapus kursus yang ada di platform.
CRUD Siswa: Admin dapat menambah, mengubah, dan menghapus data siswa yang terdaftar dalam kursus.
Halaman Utama: Tampilkan daftar kursus yang tersedia langsung pada halaman utama.
Navigasi Mudah: Terdapat menu navigasi yang memudahkan akses ke daftar kursus dan siswa.

## Struktur Proyek
1. Migrasi Database
courses: Tabel untuk menyimpan informasi kursus, dengan kolom:
id: Primary Key
course_name: Nama kursus
description: Deskripsi singkat tentang kursus
instructor: Nama instruktur yang mengajar kursus
duration: Durasi kursus dalam format jam atau minggu

students: Tabel untuk menyimpan data siswa, dengan kolom:

id: Primary Key

name: Nama siswa

email: Alamat email siswa

phone: Nomor telepon siswa

course_id: Foreign key yang merujuk ke tabel courses untuk menyatakan kursus yang diikuti siswa

3. Controllers ->
  
CourseController: Mengelola semua fungsi yang berkaitan dengan kursus, seperti menampilkan daftar kursus, menambah, mengedit, dan menghapus kursus.

StudentController: Mengelola semua fungsi yang berkaitan dengan siswa, termasuk menampilkan daftar siswa, menambah siswa ke kursus tertentu, mengedit, dan menghapus data siswa.

4. Views

Home: Menampilkan halaman utama yang berisi daftar kursus yang tersedia.

Course Views: Berisi form dan daftar kursus, termasuk halaman untuk menambah dan mengedit kursus.

Student Views: Berisi form dan daftar siswa yang terdaftar, termasuk halaman untuk menambah dan mengedit data siswa.

## Cara Menggunakan Aplikasi
Halaman Utama: Di halaman utama, Anda akan melihat daftar kursus yang tersedia. Setiap kursus dilengkapi dengan deskripsi singkat, nama instruktur, dan durasi.
Manajemen Kursus: Klik pada tombol "Kursus" untuk mengelola kursus yang tersedia. Anda dapat menambah kursus baru, mengedit kursus yang sudah ada, atau menghapus kursus.
Manajemen Siswa: Klik pada tombol "Siswa" untuk mengelola data siswa. Anda dapat menambah siswa ke kursus tertentu, mengedit data siswa, atau menghapus siswa dari kursus.

## Teknologi yang Digunakan
Laravel: Framework PHP yang digunakan untuk mengelola logika backend, database, dan routing aplikasi.
Bootstrap: Library CSS untuk membuat tampilan yang responsif dan ramah pengguna.
MySQL: Sistem manajemen basis data yang digunakan untuk menyimpan data kursus dan siswa.

## Fitur Tambahan yang Dapat Dikembangkan
Authentication: Menambahkan fitur autentikasi untuk membatasi akses ke fitur-fitur tertentu.
Search and Filter: Fitur pencarian dan filter untuk mempermudah pengguna menemukan kursus atau siswa berdasarkan nama atau kategori.
Dashboard Statistik: Menambahkan halaman dashboard untuk menampilkan statistik jumlah siswa dan kursus yang terdaftar.

## Kesimpulan
Proyek Portal Pendaftaran Kursus Online ini memberikan solusi sederhana untuk manajemen kursus dan pendaftaran siswa. Dengan fitur CRUD yang lengkap dan antarmuka yang mudah digunakan, aplikasi ini dapat dikembangkan lebih lanjut untuk memenuhi kebutuhan yang lebih kompleks.
