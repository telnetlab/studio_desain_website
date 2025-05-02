# Instalasi dan Konfigurasi Laravel dengan MySQL

**Laravel** adalah framework PHP sumber terbuka untuk pengembangan aplikasi web yang mengikuti pola arsitektur Model-View-Controller (MVC). Dokumen ini menjelaskan prosedur instalasi dan konfigurasi Laravel versi terkini pada distribusi Kali Linux dengan database MySQL.

## Langkah-Langkah Instalasi

### 1. Pembaruan Sistem
Lakukan pembaruan paket sistem sebelum instalasi:
```bash
sudo apt update && sudo apt full-upgrade -y
```

### 2. Instalasi Paket PHP
Instal komponen PHP dan ekstensi yang diperlukan:
```bash
sudo apt install -y php php-cli php-fpm php-mysql php-zip php-gd php-mbstring php-curl php-xml php-bcmath
```

### 3. Instalasi Composer
Composer adalah manajer dependensi untuk PHP:
```bash
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
sudo chmod +x /usr/local/bin/composer
```

### 4. Konfigurasi MySQL
Buat database dan pengguna khusus Laravel:
```sql
CREATE DATABASE laravel_db;
CREATE USER 'laravel_user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON laravel_db.* TO 'laravel_user'@'localhost';
FLUSH PRIVILEGES;
```

### 5. Instalasi Laravel
#### Metode 1: Menggunakan Laravel Installer
```bash
composer global require laravel/installer
export PATH="$PATH:$HOME/.config/composer/vendor/bin"
laravel new modul_laravel
```

#### Metode 2: Menggunakan Composer Langsung
```bash
composer create-project --prefer-dist laravel/laravel modul_laravel
```

### 6. Konfigurasi Environment
1. Salin template environment:
    ```bash
    cp .env.example .env
    ```

2. Modifikasi parameter database pada file `.env`:
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel_db
    DB_USERNAME=laravel_user
    DB_PASSWORD=password
    ```

3. Generate kunci aplikasi:
    ```bash
    php artisan key:generate
    ```

### 7. Migrasi Database
Jalankan migrasi awal untuk membuat tabel database:
```bash
php artisan migrate
```

### 8. Instalasi Dependensi Frontend
Laravel memerlukan Node.js dan NPM untuk aset frontend:
```bash
sudo apt install -y nodejs npm
npm install
npm run build
```

### 9. Menjalankan Server Pengembangan
Aktifkan server pengembangan bawaan Laravel:
```bash
php artisan serve
```
Aplikasi dapat diakses melalui [http://localhost:8000](http://localhost:8000) pada browser.

![Laravel](/modul_9/img/laravel.png)

## Catatan Penting
1. Laravel memerlukan versi PHP 8.0 atau lebih baru
2. Selalu gunakan environment (`APP_ENV`) yang sesuai untuk setiap tahap pengembangan