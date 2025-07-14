Deskripsi Singkat: Sistem informasi pendaftaran sidang praktek kerja lapangan dan sidang tugas akhir berguna untuk mahasiswa, Admin Jurusan, dan Dosen yang terlibat (Kepala Jurusan dan Kepala Prodi) Jurusan Administrasi Niaga yang mengajar di Politeknik Negeri Padang. Sistem ini memudahkan pengguna, untuk menginputkan persyaratan kemudian verfikasi berkas secara sistematis.

## 🛠️ Third-Party / Library yang Digunakan:  

### 1️⃣ Dependensi Produksi & Pengembangan  
- `PHP ^8.2`  
- `laravel/framework ^12.0` — Core Laravel  
- `laravel/sanctum ^4.1` — Otentikasi API & SPA  
- `laravel/tinker ^2.10.1` — Interaksi Konsol  
- `maatwebsite/excel ^3.1` — Impor/Ekspor File Excel & CSV  

### 2️⃣ Dependensi Pengembangan (Development Only)  
- `fakerphp/faker ^1.23` — Generator Data Dummy  
- `laravel/pail ^1.2.2` — Real-time Log Viewer  
- `laravel/pint ^1.13` — PHP Code Style Fixer  
- `laravel/sail ^1.41` — Docker Environment  
- `mockery/mockery ^1.6` — Testing Mocking  
- `nunomaduro/collision ^8.6` — Error Reporting di Konsol  
- `phpunit/phpunit ^11.5.3` — Unit Testing Framework  

### 3️⃣ Skrip Composer  
- `post-autoload-dump` → Autoload & Package Discover  
- `post-update-cmd` → Publish Laravel Assets  
- `post-root-package-install` → Copy `.env.example` ke `.env`  
- `post-create-project-cmd` → Generate App Key, Buat `database.sqlite`, Jalankan Migrate  
- `dev` → Jalankan Server, Queue Listener, Pail, & NPM Dev Bersamaan  
- `test` → Clear Config & Jalankan Testing  

---

🚀 Langkah Instalasi

1️⃣ Instalasi Dependensi PHP
composer install

2️⃣ Duplikat File Konfigurasi Lingkungan
Linux/MacOS:
cp .env.example .env

Windows (CMD):
copy .env.example .env

3️⃣ Generate Kunci Aplikasi
php artisan key:generate

4️⃣ Konfigurasi Database
Edit .env dengan pengaturan berikut:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=username_database_anda
DB_PASSWORD=password_database_anda

5️⃣ Jalankan Migrasi Database
Tanpa Seeder:
php artisan migrate

Dengan Seeder:
php artisan migrate --seed

6️⃣ Jalankan Aplikasi Laravel
php artisan serve

Akses di browser melalui: http://127.0.0.1:8000

---

Akun Untuk Akses Login:

1. Admin
   * Email: admin@example.com
   * Nama: Admin
   * Password: 12345678


  2. Dosen
   * Email: ilham@example.com
       * Nama: Ilham Widajaya
       * NIDN: 1234567890
       * Prodi: Rekayasa Perangkat Lunak
       * Jenis Kelamin: Laki-laki
       * Password: password123
   * Email: andrew@example.com
       * Nama: Andrew Diantara
       * NIDN: 0987654321
       * Prodi: Rekayasa Perangkat Lunak
       * Jenis Kelamin: Laki-laki
       * Password: password123
   * Email: dimas@example.com
       * Nama: Dimas Prasetyo
       * NIDN: 1122334455
       * Prodi: Teknik Komputer
       * Jenis Kelamin: Laki-laki
       * Password: password123
   * Email: andi.wijaya@example.com
       * Nama: Prof. Dr. Andi Wijaya
       * NIDN: 197001012000011001
       * Prodi: Rekayasa Perangkat Lunak
       * Jenis Kelamin: Laki-laki
       * Password: password123
   * Email: budi.santoso@example.com
       * Nama: Dr. Budi Santoso
       * NIDN: 198005102005021002
       * Prodi: Teknik Komputer
       * Jenis Kelamin: Laki-laki
       * Password: password123
   * Email: citra.dewi@example.com
       * Nama: Dra. Citra Dewi, M.Kom
       * NIDN: 197511202002032003
       * Prodi: Rekayasa Perangkat Lunak
       * Jenis Kelamin: Perempuan
       * Password: password123
   * Email: Rayhan.dwiwata@example.com
       * Nama: Dra. Rayhan Dwiwata Putra, M.Kom
       * NIDN: 197511202002032004
       * Prodi: Teknik Komputer
       * Jenis Kelamin: Laki-Laki
       * Password: password123


  3. Mahasiswa
   * Email: arlan@example.com
       * Nama: Arlan Diana
       * NIM: 2311082011
       * Prodi: Rekayasa Perangkat Lunak
       * Jenis Kelamin: Perempuan
       * Kelas: TI-1
       * Password: 12345678

  4. Kaprodi
   * Email: kaprodi@example.com
   * Nama: Kaprodi
   * Password: 12345678


  5. Kajur
   * Email: kajur@example.com
   * Nama: Kajur
   * Password: 12345678

Link Demo:https://drive.google.com/drive/folders/1x5mIF5n-4iZggfZpttyqJ7O3J4BVwux7?usp=sharing

✅ Pengujian

Untuk menjalankan pengujian aplikasi, jalankan perintah berikut:
php artisan config:clear
php artisan test

---

📝 Catatan
- Pastikan konfigurasi database dan environment sudah benar sebelum pengembangan.
- Untuk pertanyaan atau permasalahan, hubungi tim pengembang atau admin.

---

👨‍💻 Dikembangkan Oleh
Tim Pengembang Sistem Informasi Administrasi Niaga
Politeknik Negeri Padang