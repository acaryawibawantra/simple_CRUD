# Laravel CRUD App

Project ini adalah contoh **Laravel CRUD sederhana** menggunakan Laravel 11 dan MySQL.  
README ini berfokus pada instalasi di **macOS** dengan Homebrew, serta disertakan catatan tambahan untuk **Windows** dan **Linux**.

---

## 🚀 Prasyarat

- **PHP** >= 8.2
- **Composer** (dependency manager untuk PHP)
- **MySQL** (via Homebrew di macOS, atau XAMPP/MAMP di Windows/Linux)
- **Git** (opsional)

---

## ⚙️ Instalasi di macOS

### 1. Install PHP & Composer
```bash
brew install php
brew install composer
```

### 2. Install MySQL
```bash
brew install mysql
```

Jalankan MySQL server:
```bash
/opt/homebrew/opt/mysql/bin/mysqld_safe --datadir=/opt/homebrew/var/mysql
```

### 3. Buat Database
Masuk ke MySQL:
```bash
mysql -u root
```

Buat database baru:
```sql
CREATE DATABASE crud_app;
```

Cek daftar database:
```sql
SHOW DATABASES;
```

---

### 4. Clone Project & Install Dependencies
```bash
git clone <url-repo-anda>
cd crud-app
composer install
```

### 5. Update File `.env`
Buka file `.env` dan sesuaikan konfigurasi database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_app
DB_USERNAME=root
DB_PASSWORD=
```

> Biarkan `DB_PASSWORD` kosong jika root MySQL tidak memiliki password.

---

### 6. Migrasi Database
Jalankan perintah:
```bash
php artisan migrate
```

Ini akan membuat tabel default Laravel (`users`, `password_resets`, dll.) di database `crud_app`.

---

### 7. Jalankan Server Laravel
```bash
php artisan serve
```

Server akan berjalan di:
```
http://127.0.0.1:8000
```

> Laravel default membuka port **8000**, kecuali kamu tentukan manual dengan `--port=xxxx`.

---

## 💻 Instalasi di Windows

1. Install **XAMPP** (sudah ada Apache, PHP, dan MySQL).  
2. Start Apache & MySQL lewat XAMPP Control Panel.  
3. Download & install **Composer for Windows** dari [getcomposer.org](https://getcomposer.org).  
4. Ikuti langkah yang sama: buat database `crud_app` lewat **phpMyAdmin** atau `mysql -u root`.  
5. Update `.env`, lalu jalankan:
   ```bash
   php artisan migrate
   php artisan serve
   ```

---

## 🐧 Instalasi di Linux (Ubuntu/Debian)

1. Install PHP, Composer, MySQL:
   ```bash
   sudo apt update
   sudo apt install php php-mysql mysql-server composer unzip git
   ```
2. Start MySQL:
   ```bash
   sudo service mysql start
   ```
3. Login ke MySQL:
   ```bash
   mysql -u root -p
   CREATE DATABASE crud_app;
   ```
4. Clone project & jalankan:
   ```bash
   composer install
   php artisan migrate
   php artisan serve
   ```

---

## 📌 Perintah Artisan yang Penting

- `php artisan serve` → Menjalankan server Laravel (default port 8000).  
- `php artisan migrate` → Membuat tabel di database sesuai migration.  
- `php artisan make:model` → Membuat model baru.  
- `php artisan make:controller` → Membuat controller baru.  
- `php artisan tinker` → Console interaktif untuk Laravel.

---

## 🎯 Hasil

Setelah semua langkah selesai, buka browser di:
```
http://127.0.0.1:8000
```

Dan aplikasi Laravel CRUD sudah siap digunakan.
