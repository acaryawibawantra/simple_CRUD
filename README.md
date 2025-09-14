# Laravel CRUD App

Proyek ini adalah contoh **Laravel Project dengan basic CRUD functionality**.  
Instruksi di bawah berfokus pada **macOS**, namun juga disertakan langkah untuk **Windows** dan **Linux**.

---

## 1. Persyaratan

Sebelum memulai, pastikan sudah terinstal:
- **PHP >= 8.1**
- **Composer**
- **MySQL** (atau MariaDB)
- **Node.js & npm** (opsional, untuk asset build)

---

## 2. Instalasi Laravel Project

### macOS & Linux
```bash
composer create-project laravel/laravel crud-app
cd crud-app
```

### Windows (Command Prompt / PowerShell)
```powershell
composer create-project laravel/laravel crud-app
cd crud-app
```

---

## 3. Setup Database

### Buat Database di MySQL
Login ke MySQL melalui terminal:

```bash
mysql -u root -p
```

Setelah masuk ke MySQL shell:
```sql
CREATE DATABASE crud_app;
EXIT;
```

---

## 4. Konfigurasi Environment

1. **Copy file `.env.example` ke `.env`**

   ```bash
   cp .env.example .env   # macOS & Linux
   copy .env.example .env # Windows
   ```

2. **Update koneksi database di `.env`**

   Buka file `.env` dan sesuaikan:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=crud_app
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

3. **Generate Laravel Secret Key**
   ```bash
   php artisan key:generate
   ```

   Perintah ini akan menambahkan `APP_KEY=base64:...` otomatis ke file `.env`.

---

## 5. Migrasi Database

Jalankan perintah:
```bash
php artisan migrate
```

---

## 6. Menjalankan Server Laravel

Untuk menjalankan server lokal:
```bash
php artisan serve
```

✅ Secara default, aplikasi berjalan di:
```
http://127.0.0.1:8000
```
Port yang terbuka: **8000**

---

## 7. Perintah Artisan Penting

- `php artisan migrate` → Menjalankan migrasi database
- `php artisan make:model NamaModel -mcr` → Membuat Model, Controller, dan Resource
- `php artisan serve` → Menjalankan server lokal
- `php artisan tinker` → Interactive REPL untuk Laravel

---

## 8. Instruksi untuk Windows & Linux

Langkah sama dengan macOS, hanya perbedaan pada command copy `.env`:
- **Linux/macOS:** `cp .env.example .env`
- **Windows:** `copy .env.example .env`

---

## 9. Catatan

- Default port Laravel adalah **8000**, bisa diubah dengan:
  ```bash
  php artisan serve --port=8080
  ```
- Pastikan MySQL sudah berjalan sebelum melakukan migrasi.

---

🎉 Sekarang aplikasi Laravel CRUD sudah siap dijalankan!
