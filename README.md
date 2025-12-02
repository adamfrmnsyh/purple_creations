# Purple Creations

Purple Creations adalah sebuah project website yang dikembangkan menggunakan **Laravel**. Project ini dibuat sebagai bagian dari tugas praktikum dan digunakan untuk mempelajari konsep dasar pengembangan web modern dengan arsitektur MVC (Model – View – Controller).

Website ini berfungsi sebagai platform untuk mengelola halaman, konten, dan elemen-elemen tampilan yang disajikan kepada pengguna.

---

## 🚀 Fitur Utama

- Struktur project mengikuti standar Laravel
- Routing berbasis Laravel
- Template view menggunakan Blade
- Pengelolaan assets melalui public folder
- Konfigurasi environment menggunakan `.env`
- Dapat dikembangkan menjadi website dinamis sesuai kebutuhan

---

## 🛠️ Teknologi yang Digunakan

- **Laravel 12**
- **PHP 8**
- **Blade Template Engine**
- **Composer**
- **npm (opsional, jika digunakan untuk asset)**
- **Database:** MySQL 

---

## 📂 Struktur Folder Utama

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
composer.json
package.json
```

Penjelasan singkat:

- **app/** → Logika aplikasi (Controller, Model, Middleware)
- **resources/views/** → File tampilan Blade
- **routes/web.php** → Routing utama aplikasi
- **public/** → Asset frontend (CSS, JS, image)
- **.env** → Konfigurasi aplikasi (database, URL, key)

---

## ⚙️ Cara Instalasi dan Menjalankan Proyek

Ikuti langkah berikut untuk menjalankan aplikasi secara lokal:

### 1️⃣ Clone Repository

```bash
git clone https://github.com/adamfrmnsyh/purple_creations.git
cd purple_creations
```

### 2️⃣ Install Dependency PHP

```bash
composer install
```

### 3️⃣ Copy File Environment

```bash
cp .env.example .env
```

Lalu sesuaikan isi file `.env` (nama database, username, password, dll).

### 4️⃣ Generate Application Key

```bash
php artisan key:generate
```

### 5️⃣ (Opsional) Migrasi Database

Jika project ini menggunakan tabel database:

```bash
php artisan migrate
```

### 6️⃣ Jalankan Server

```bash
php artisan serve
```

Akses aplikasi melalui browser:

👉 **http://localhost:8000**

---

## 📘 Cara Penggunaan

Setelah server berjalan, kamu dapat:

- Mengakses halaman utama melalui browser  
- Mengedit view di folder `resources/views`  
- Mengatur routing pada `routes/web.php`  
- Mengembangkan fitur sesuai kebutuhan praktikum  

---

## 👨‍💻 Pembuat

**Nama:** Adam Firmansyah  
**GitHub:** https://github.com/adamfrmnsyh  
**Project Praktikum:** Purple Creations  

---

## 🔗 Link Repository GitHub

👉 **https://github.com/adamfrmnsyh/purple_creations**

---

## 📝 Catatan

- Pastikan PHP, Composer, dan extension Laravel sudah terinstall.
- Jika menggunakan database, buat database baru terlebih dahulu sebelum migrate.
- Semua konfigurasi utama ada pada file `.env`.

