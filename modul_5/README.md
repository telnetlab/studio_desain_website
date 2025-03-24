# Modul 5: PHP 
## Tujuan Praktikum
1. Memahami apa itu PHP.
2. Memahami dasar-dasar PHP dan menggunakan sintaks-sintaks PHP.
3. Mengetahui berbagai macam fungsi pada PHP lanjutan.
4. Membuat halaman login sebuah situs web.

## Alat & Bahan
Alat & Bahan yang digunakan adalah sebagai berikut:
1. Sistem Operasi Windows, Linux, atau MacOS
2. PHP 8.x
3. Software XAMPP atau LAMPP
4. Text Editor

## Dasar Teori
### XAMPP
XAMPP adalah perangkat lunak open-source yang digunakan untuk membuat server lokal di komputer. Perangkat lunak ini membantu pengembang dan desainer web menguji proyek sebelum dipublikasikan ke internet. XAMPP terdiri dari beberapa komponen utama:
- **X (Cross Platform)**: Dapat dijalankan di berbagai sistem operasi.
- **A (Apache)**: Web server yang berfungsi untuk mengelola dan menyajikan halaman web.
- **M (MySQL/MariaDB)**: Sistem manajemen basis data untuk menyimpan dan mengolah data.
- **P (PHP)**: Bahasa pemrograman yang digunakan untuk membangun aplikasi web dinamis.
- **P (Perl)**: Bahasa pemrograman tambahan yang digunakan untuk kebutuhan scripting.

### PHP (Hypertext Preprocessor)
PHP adalah bahasa skrip sumber terbuka yang dirancang khusus untuk pengembangan web dan dapat disematkan dalam HTML. Dikembangkan awalnya oleh Rasmus Lerdorf pada tahun 1994, PHP kini dikelola oleh The PHP Group dan menjadi salah satu bahasa pemrograman server-side paling populer di dunia. PHP memiliki beberapa fungsi utama, yaitu:

1. Memproses dan menampilkan konten dinamis dalam sebuah situs web.
2. Mengelola data dari formulir dan sesi pengguna.
3. Berinteraksi dengan database seperti MySQL dan PostgreSQL.
4. Menghasilkan dan mengedit file seperti gambar, PDF, dan XML.

PHP pertama kali muncul sebagai sekumpulan skrip Perl yang dibuat oleh Rasmus Lerdorf untuk memantau kunjungan ke resume onlinenya, yang disebut "Personal Home Page Tools" (PHP Tools). Versi publik pertama dirilis pada 1995 (PHP/FI). Pada 1997, Zeev Suraski dan Andi Gutmans menulis ulang parser PHP, menciptakan PHP 3.0, yang menjadi fondasi bahasa modern. Versi utama terkini adalah PHP 8.x, dirilis dengan fitur seperti JIT compiler dan union types.

### Syarat Menjalankan PHP
1. **Web Server**: Perangkat lunak yang menangani permintaan HTTP dan menjalankan kode PHP. Contoh: Apache ([www.apache.org](www.apache.org)).

2. **PHP Interpreter**: Diperlukan untuk menjalankan skrip PHP, bisa dikonfigurasi sebagai modul Apache atau aplikasi CGI ([www.php.net](www.php.net)).

3. **Database Server**: Digunakan untuk menyimpan dan mengelola data. PHP sering digunakan dengan MySQL/MariaDB ([www.mysql.com](www.mysql.com)).

## Sintaks dan Semantik
### Delimiter
Kode PHP diapit oleh tag khusus:

```php
<?php
  // Kode PHP
?>
```

Tag pendek `<? ... ?>` tersedia tetapi tidak disarankan karena kompatibilitas.

### Komentar
PHP mendukung tiga jenis komentar:

```php
// Komentar satu baris  
# Alternatif komentar satu baris  
/*  
  Komentar  
  multi-baris  
*/
```

## Variabel dan Tipe Data
### Variabel
Variabel dideklarasikan dengan prefix `$` dan bersifat case-sensitive:

```php
$namaVariabel = "Nilai";
```

### Tipe Data Saklar
1. String: Teks, diapit tanda kutip (`"..."` atau `'...'`)
2. Integer: Bilangan bulat (`-3`, `42`)
3. Float: Bilangan desimal (`3.14`, `-0.001`)
4. Boolean: `true` atau `false`

### Tipe Data Komposit
1. Array: Koleksi nilai terindeks:

```php
$array = [1, 2, "tiga"];
```

2. Object: Instansiasi kelas.

### Tipe Data Khusus
1. NULL: Menunjukkan ketiadaan nilai.
2. Resource: Referensi ke sumber eksternal (e.g., koneksi database).

## Operator
### Aritmatika
| Operator | Deskripsi | Contoh | Output |
|----------|-----------|--------|--------|
| + | Penjumlahan | 5+3 | 8 |
| - | Pengurangan | 5-3 | 2 |
| * | Perkalian   | 5*3 | 15 |
| / | Pembagian   | 6/3 | 2 |
| % | Modulus (Sisa Bagi) | 7%3 | 1 |

### Perbandingan
| Operator | Deskripsi | Contoh | Output |
|----------|-----------|--------|--------|
| == | Sama dengan | 5 == “5” | True |
| === | Identik (sama nilai & tipe data) | 5 === “5” | False |
| != | Tidak sama | 5 != 3 | True |
| !== | Tidak identik | 5 !== “5” | True |
| > | Lebih besar | 10 > 5 | True |
| < | Lebih kecil | 3 < 5 | True |
| >= | Lebih besar atau sama dengan | 5 >= 5 | True |
| <= | Lebih kecil atau sama dengan | 4 <= 5 | True |

### Logika
- `&&` (AND), `||` (OR), `!` (NOT).

### Penggabungan String
Menggunakan operator `.`:

```php
$nama = "John" . " " . "Doe"; // "John Doe"
```

## Struktur Kontrol
1. if-elseif-else:

```php
if ($x > 0) {
  echo "Positif";
} elseif ($x == 0) {
  echo "Nol";
} else {
  echo "Negatif";
}
```

2. switch:

```php
switch ($hari) {
  case 'Senin':
    echo "Hari kerja";
    break;
  default:
    echo "Hari libur";
}
```

## Perulangan 
1. for:

```php
for ($i = 0; $i < 5; $i++) {
  echo $i;
}
```

2. while:

```php
while ($kondisi) {
  // Eksekusi selama $kondisi true
}
```

3. foreach (untuk array):

```php
foreach ($buah as $item) {
  echo $item;
}
```

## Fungsi
### Deklarasi Fungsi

```php
function hitungLuas($panjang, $lebar) {
  return $panjang * $lebar;
}
```

- Parameter default:

```php
function salam($nama = "Tam") {
  return "Halo, $nama!";
}
```

### Fungsi Variadik
Menerima jumlah argumen variabel menggunakan `...`:

```php
function jumlahkan(...$angka) {
  return array_sum($angka);
}
```

## Penanganan Formulir
PHP mengakses data formulir melalui superglobals:

- `$_GET`: Data dari metode GET digunakan untuk mengirimkan data melalui URL. Data yang dikirimkan akan terlihat di alamat URL setelah tanda `?`. Metode ini cocok untuk pencarian atau navigasi, tetapi kurang aman untuk data sensitif karena bisa terlihat dan disimpan di riwayat browser.
- `$_POST`: Data dari metode POST digunakan untuk mengirimkan data yang diinputkan pengguna ke server tanpa menampilkannya di URL. Metode ini lebih aman dibandingkan GET karena data tidak terlihat oleh pengguna. POST biasanya digunakan untuk login, pendaftaran, atau pengiriman data yang bersifat rahasia.

Contoh: 

```php
$username = htmlspecialchars($_POST['username']); // Mencegah XSS
```

## Interaksi Database (MySQLi)
### Koneksi ke MySQL

```php
$koneksi = new mysqli("localhost", "user", "password", "database");
if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}
```

### Query Aman dengan Prepared Statements

```php
$stmt = $koneksi->prepare("INSERT INTO users (email) VALUES (?)");
$stmt->bind_param("s", $email); // 's' = tipe string
$stmt->execute();
```

## Penanganan Kesalahan
### Exception Handling

```php
try {
  if (!file_exists("file.txt")) {
    throw new Exception("File tidak ditemukan");
  }
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}
```

### Error Reporting

```php
error_reporting(E_ALL); // Menampilkan semua error
ini_set('display_errors', 1);
```

## Keamanan 

1. Validasi Input:

```php
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
```

2. Mencegah SQL Injection: Gunakan prepared statements (MySQLi atau PDO).
3. Mencegah XSS:

```php
echo htmlspecialchars($input_pengguna);
```

## Manajemen Sesi

```php
session_start();
$_SESSION['pengguna'] = "John"; // Menyimpan data sesi
session_unset(); // Menghapus semua variabel sesi
session_destroy(); // Menghancurkan sesi
```

## Standar Pengodean
PHP mengikuti PSR (PHP Standards Recommendations) untuk konsistensi kode, seperti:
- PSR-1: Standar penulisan dasar.
- PSR-12: Gaya penulisan kode ekstensif.

## Praktikum: Membuat Sistem Login Sederhana Menggunakan PHP
### Struktur File

```
/login-system/
├── config.php
├── register.php
├── login.php
├── dashboard.php
├── logout.php
└── style.css
```

### Panduan Praktikum
#### Windows:
1. Pastikan XAMPP/WAMP/MAMP sudah berjalan
2. Jalankan query berikut di phpMyAdmin atau CLI MySQL untuk membuat database:

```php
CREATE DATABASE login_system;
USE login_system;

CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(50) UNIQUE NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL
);
```

3. Simpan semua file di folder `htdocs/login-system`
4. Akses melalui browser:
    - Registrasi: [http://localhost/login-system/register.php](http://localhost/login-system/register.php)
    - Login: [http://localhost/login-system/login.php](http://localhost/login-system/login.php)

## Credits
- Pengembang modul: [Aura Pradnya Rahmaninta]() & [Risnanda Pascal](https://ricalnet.github.io)
- Telecommunication Network Laboratory: [Web Design](https://telnetlab.github.io/web-design/index.html)
- SAS Telkom University: [D3 Teknologi Telekomunikasi](https://io.telkomuniversity.ac.id/degree-program/faculty-of-telkom-applied-science/telecommunication-engineering/)