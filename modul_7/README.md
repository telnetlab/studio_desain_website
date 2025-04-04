# Modul 7: Relasi MySQL dan Koneksi MySQL dengan PHP

## 7.1 Tujuan Praktikum
Setelah mengikuti praktikum ini, mahasiswa diharapkan dapat:
1. Memahami konsep database MySQL dan operasi CRUD.
2. Mengimplementasikan query SQL untuk relasi antar tabel.
3. Membangun aplikasi web sederhana dengan integrasi PHP dan MySQL.

## 7.2 Alat dan Bahan
Alat dan bahan yang digunakan dalam praktikum ini meliputi:
1. Sistem Operasi: Windows, Linux, atau MacOS.
2. PHP versi 8.x.
3. Perangkat lunak XAMPP.
4. Editor teks.

## 7.3 Dasar Teori

### 7.3.1 MySQL
MySQL adalah sebuah Relational Database Management System (RDBMS) sumber terbuka yang menggunakan Structured Query Language (SQL) untuk mengelola, mengorganisasi, dan mengambil data. MySQL dirilis di bawah lisensi ganda: GNU General Public License (GPL) versi 2 untuk penggunaan dalam ekosistem sumber terbuka, dan lisensi komersial untuk keperluan proprietary. Sebagai perangkat lunak bebas di bawah GPL, MySQL dapat digunakan secara gratis untuk keperluan pribadi maupun komersial, dengan syarat pengguna mematuhi ketentuan lisensi tersebut (misalnya, menyertakan kode sumber modifikasi jika didistribusikan). Untuk pengguna yang tidak ingin terikat dengan persyaratan GPL, tersedia opsi lisensi berbayar dari Oracle Corporation (pemilik MySQL saat ini). Dalam operasional basis data, SQL pada MySQL mendukung beberapa kategori perintah utama:

#### 1. Data Definition Language (DDL)
DDL adalah sub perintah dalam bahasa SQL yang digunakan untuk membangun struktur sebuah database, termasuk database dan tabel. Terdapat tiga perintah penting dalam DDL, yaitu:

| Perintah | Deskripsi |
|----------|-----------|
| CREATE   | Perintah untuk membuat database, tabel, view, atau kolom baru. | 
| DROP     | Perintah untuk menghapus struktur dalam suatu database. |
| ALTER    | Perintah untuk mengubah struktur tabel yang telah ada, termasuk mengubah nama tabel, menambah kolom, atau menghapus kolom. |

#### 2. Data Manipulation Language (DML)
DML adalah sub perintah dalam bahasa SQL yang digunakan untuk memanipulasi data dalam database yang telah dibuat. Terdapat empat perintah utama dalam DML, yaitu:

| Perintah | Deskripsi |
|----------|-----------|
| INSERT   | Perintah untuk memasukkan data baru ke dalam tabel. | 
| SELECT   | Perintah untuk memilih dan mengambil data dari tabel untuk ditampilkan. |
| UPDATE   | Perintah untuk mengubah data yang ada pada tabel. |
| DELETE   | Perintah untuk menghapus data dari tabel. |

Contoh query untuk masing-masing perintah di atas adalah sebagai berikut:

1. **INSERT**
    ```mysql
    INSERT INTO mahasiswa_t (nama, nim, email) VALUES ('rical', '607052300001', 'rical@telnet.net');
    ```

2. **SELECT**
    ```mysql
    SELECT nama, nim, email FROM mahasiswa_t;
    ```

3. **UPDATE**
    ```mysql
    UPDATE mahasiswa_t SET nama = 'Pascal', nim = '607052300002', email = 'pascal@telnet.net' WHERE nama = 'rical';
    ```

4. **DELETE**
    ```mysql
    DELETE FROM mahasiswa_t WHERE email = 'pascal@telnet.net';
    ```

#### 3. Data Control Language (DCL)
DCL adalah sub bahasa SQL yang berfungsi untuk mengontrol data dan server database, termasuk manipulasi pengguna dan hak aksesnya. Terdapat empat perintah dalam DCL, yaitu:

| Perintah | Deskripsi |
|----------|-----------|
| GRANT    | Digunakan untuk memberikan izin kepada pengguna untuk mengakses tabel dalam database. | 
| REVOKE   | Digunakan untuk mencabut izin hak akses pengguna. |
| COMMIT   | Digunakan untuk menetapkan penyimpanan database. |
| ROLLBACK | Digunakan untuk membatalkan penyimpanan database. |

### 7.3.2 Struktur Database
#### a. Tabel
Tabel adalah struktur dasar dalam basis data relasional yang menyimpan data dalam format baris (row) dan kolom (column). Setiap kolom merepresentasikan atribut data tertentu (misalnya: NIM, nama, kelas), sedangkan setiap baris mewakili satu entitas atau rekaman data lengkap (contoh: data individu mahasiswa).

#### b. Field
Kolom (atau field) adalah unit data spesifik yang mendefinisikan atribut dari suatu entitas dalam tabel. Contoh kolom pada tabel `mahasiswa` meliputi `NIM`, `nama`, `kelas`, dan `jurusan`. Setiap kolom memiliki tipe data tertentu (misalnya: integer, varchar, date) yang membatasi nilai yang dapat dimasukkan.

#### c. Record
Baris (atau record) adalah kumpulan nilai kolom yang saling terkait dan merepresentasikan satu entitas utuh dalam tabel. Satu baris pada tabel `mahasiswa`, misalnya, berisi data lengkap seorang mahasiswa seperti `NIM: 6070523`, `nama: "Risnanda"`, `kelas: "4701"`, dan `jurusan: "D3TT"`.

#### d. Primary Key (PK)
Primary Key adalah kolom atau kombinasi kolom yang secara unik mengidentifikasi setiap baris dalam tabel. Syarat utama Primary Key adalah:

1. Nilainya tidak boleh duplikat di dalam tabel.
2. Nilai harus selalu terisi (tidak boleh `null`).
3. Nilainya tidak boleh berubah sepanjang siklus hidup data.

#### e. Foreign Key (FK)
Foreign Key adalah kolom atau kombinasi kolom dalam suatu tabel yang merujuk ke Primary Key di tabel lain, membentuk hubungan relasional (relationship) antar tabel. Contoh: Kolom `mahasiswa_id` di tabel `kelas` adalah Foreign Key yang merujuk ke Primary Key `mahasiswa_id` di tabel `mahasiswa`. Sifat Foreign Key:

1. Dapat berisi nilai `null` (jika tidak diatur sebagai wajib).
2. Dapat memiliki nilai duplikat (kecuali jika diindeks secara unik).
3. Nilainya harus sesuai dengan nilai Primary Key yang dirujuk (referential integrity).
4. Perubahan atau penghapusan nilai Primary Key yang dirujuk dapat dibatasi oleh aturan ON UPDATE atau ON DELETE (misalnya: `CASCADE`, `RESTRICT`, `SET NULL`).

### 7.3.3 Relasi Database
#### a. Relasi One-to-One (1:1)
Relasi One-to-One adalah hubungan di mana satu baris dalam tabel A hanya terkait dengan satu baris dalam tabel B, dan sebaliknya. Relasi ini jarang digunakan dalam desain basis data konvensional dan biasanya diterapkan untuk alasan optimasi atau keamanan (misalnya, memisahkan data sensitif ke tabel terpisah).

![1:1](/modul_7/img/one-to-one.png)

#### b. Relasi One-to-Many (1:M)
Relasi One-to-Many adalah hubungan di mana satu baris dalam tabel A dapat terkait dengan banyak baris dalam tabel B, tetapi satu baris dalam tabel B hanya merujuk ke satu baris dalam tabel A. Ini adalah jenis relasi paling umum dalam basis data relasional.

![1:M](/modul_7/img/one-to-many.png)

Tabel `penjual` dengan Primary Key `id_penjual` berelasi 1:N dengan tabel `produk`. Satu penjual dapat menjual banyak produk, tetapi setiap produk hanya terdaftar di bawah satu penjual

#### c. Relasi Many-to-Many (M:M)
Relasi Many-to-Many adalah hubungan di mana banyak baris dalam tabel A dapat terkait dengan banyak baris dalam tabel B. Untuk mengimplementasikan relasi ini, diperlukan tabel perantara (junction table) yang menyimpan Foreign Key dari kedua tabel.

![M:M](/modul_7/img/many-to-many.png)

Tabel `penjual` dan `kategori` dihubungkan melalui tabel perantara `penjual_kategori`. Satu penjual dapat menjual produk dalam banyak kategori (misalnya: makanan dan minuman), sementara satu kategori dapat dimiliki oleh banyak penjual.

### 7.3.4 Query SQL Relasi
Untuk mengambil data dari tabel yang saling berelasi dalam SQL, digunakan operasi JOIN. Operasi ini menggabungkan baris dari dua atau lebih tabel berdasarkan kondisi relasi kolom terkait. Berikut jenis-jenis utama JOIN dalam SQL standar:

#### 1. INNER JOIN
INNER JOIN menggabungkan baris dari dua tabel hanya jika nilai kolom penghubung (key) memenuhi kondisi yang ditentukan. Baris tanpa pasangan di kedua tabel tidak akan ditampilkan.

```mysql
SELECT m.*, k.*  
FROM mahasiswa_t m  
INNER JOIN kelas_t k ON m.kelas_id = k.id;  
```

#### 2. LEFT JOIN
LEFT JOIN menampilkan semua baris dari tabel kiri (tabel pertama), dan baris yang cocok dari tabel kanan (tabel kedua). Jika tidak ada pasangan, kolom dari tabel kanan akan berisi nilai NULL.

```mysql
SELECT m.*, k.*  
FROM mahasiswa_t m  
LEFT JOIN kelas_t k ON m.kelas_id = k.id;  
```

#### 3. RIGHT JOIN
RIGHT JOIN menampilkan semua baris dari tabel kanan (tabel kedua), dan baris yang cocok dari tabel kiri. Jika tidak ada pasangan, kolom dari tabel kiri akan berisi nilai NULL.

```mysql
SELECT m.*, k.*  
FROM mahasiswa_t m  
RIGHT JOIN kelas_t k ON m.kelas_id = k.id;  
```

#### 4. FULL JOIN
FULL JOIN menampilkan semua baris dari kedua tabel, dengan nilai NULL di kolom yang tidak memiliki pasangan. Catatan: MySQL tidak mendukung sintaks FULL JOIN secara native. Untuk meniru perilaku ini, gunakan kombinasi LEFT JOIN dan RIGHT JOIN dengan klausa UNION:

```mysql
SELECT m.*, k.*  
FROM mahasiswa_t m  
LEFT JOIN kelas_t k ON m.kelas_id = k.id  
UNION  
SELECT m.*, k.*  
FROM mahasiswa_t m  
RIGHT JOIN kelas_t k ON m.kelas_id = k.id;  
```

### 7.3.5 Perintah SQL pada PHP
#### 1. Membuat Koneksi ke Server MySQL dengan `mysqli_connect()`
Perintah `mysqli_connect()` digunakan untuk menguji dan membuat koneksi ke server database MySQL. Penulisan perintahnya adalah sebagai berikut:

- `$object = new mysqli("localhost", "root", "", "prakmod7_db");` 
- `$conn = mysqli_connect("localhost", "root", "", "prakmod7_db");`

Untuk menutup koneksi, dapat menggunakan perintah:

- `$object->close();`
- `mysqli_close($conn);`

#### 2. Menjalankan Query SQL dengan `mysqli_query()`
Perintah `mysqli_query()` digunakan untuk menjalankan perintah-perintah SQL agar dapat memanipulasi data pada tabel. Dalam perintah ini, parameter "request" berisi query SQL seperti SELECT, INSERT, UPDATE, DELETE, dan lain-lain. Penulisan perintahnya adalah sebagai berikut:

- `$object->query($sql);`
- `mysqli_query($conn, $sql);`

#### 3. Mengambil Record dari Database
Terdapat beberapa perintah yang dapat digunakan untuk mengambil record dari suatu database. Umumnya, record tersebut akan memiliki tipe data array.

1. **Tipe Data Array**: Perintah `mysqli_fetch_array()` dapat digunakan untuk menyimpan record dalam bentuk array asosiatif, array numerik, atau keduanya. Penulisan perintahnya adalah:

   - `$object->query($sql)->fetch_array();`
   - `mysqli_fetch_array($result);`

2. **Tipe Data Array Asosiatif**: Perintah `mysqli_fetch_assoc()` digunakan untuk menyimpan record dalam bentuk array asosiatif saja. Penulisan perintahnya adalah:

   - `$object->query($sql)->fetch_assoc();`
   - `mysqli_fetch_assoc($result);`

3. **Tipe Data Array Numerik**: Perintah `mysqli_fetch_row()` digunakan untuk menyimpan record dalam bentuk array numerik saja. Penulisan perintahnya adalah:

   - `$object->query($sql)->fetch_row();`
   - `mysqli_fetch_row($result);`

## Praktikum: Membangun Aplikasi Manajemen Tugas Sederhana dengan PHP-MySQL
### Langkah 1: Persiapan Lingkungan

1. Buat folder baru di `C:\xampp\htdocs` dengan nama `modul7_todoapp`

    Struktur file:
    ```
    /modul7_todoapp/
    ├── config.php
    ├── index.php
    ├── add.php
    ├── edit.php
    ├── delete.php
    ```

2. Buka XAMPP Control Panel dan start **Apache** & **MySQL**

### Langkah 2: Membuat Database
1. Buka browser dan kunjungi http://localhost/phpmyadmin
2. Klik `New` untuk membuat database baru

#### Eksekusi SQL
```mysql
-- Buat database
CREATE DATABASE todo_app;

-- Pilih database
USE todo_app;

-- Buat tabel tasks
CREATE TABLE tasks (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(100) NOT NULL,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- (Opsional) Tambah contoh data
INSERT INTO tasks (title, description) 
VALUES 
  ('Belajar PHP', 'Membuat CRUD dengan MySQLi'),
  ('Membuat Modul', 'Update modul praktikum');
```

### Langkah 3: Koneksi PHP-MySQL
#### File `config.php`
```php
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'todo_app';

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_errno) {
  die("Koneksi gagal: " . $mysqli->connect_error);
}

// Set charset untuk menghindari masalah encoding
$mysqli->set_charset("utf8mb4");
?>
```

#### File `index.php` (Tampilan Data)
```php
<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modul 7 - Todo App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h1>📝 My Todo List</h1>
  
  <!-- Form Tambah Data -->
  <form method="POST" action="add.php" class="mb-4">
    <div class="row">
      <div class="col-8">
        <input type="text" name="title" class="form-control" placeholder="Judul task" required>
      </div>
      <div class="col-4">
        <button type="submit" class="btn btn-primary">➕ Tambah</button>
      </div>
    </div>
  </form>

  <!-- Tabel Data -->
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Task</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = $mysqli->query("SELECT * FROM tasks ORDER BY created_at DESC");
      while ($row = $result->fetch_assoc()):
      ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['title']) ?></td>
        <td><?= htmlspecialchars($row['description']) ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">✏️ Edit</a>
          <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger">🗑️ Hapus</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</body>
</html>
```

### Langkah 4: Operasi CRUD
#### Tambah Data (`add.php`)
```php
<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $mysqli->real_escape_string($_POST['title']);
  $description = $mysqli->real_escape_string($_POST['description'] ?? '');

  $stmt = $mysqli->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
  $stmt->bind_param("ss", $title, $description);
  
  if ($stmt->execute()) {
    header("Location: index.php?success=1");
  } else {
    echo "Error: " . $stmt->error;
  }
  
  $stmt->close();
}

$mysqli->close();
```

#### Edit Data (`edit.php`)
```php
<?php
include 'config.php';

// Ambil data yang akan diedit
$id = $_GET['id'];
$stmt = $mysqli->prepare("SELECT * FROM tasks WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$task = $result->fetch_assoc();

// Proses update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $mysqli->real_escape_string($_POST['title']);
  $description = $mysqli->real_escape_string($_POST['description']);
  
  $updateStmt = $mysqli->prepare("UPDATE tasks SET title = ?, description = ? WHERE id = ?");
  $updateStmt->bind_param("ssi", $title, $description, $id);
  
  if ($updateStmt->execute()) {
    header("Location: index.php?success=1");
  } else {
    echo "Error: " . $updateStmt->error;
  }
}
?>

<!-- Form Edit -->
<form method="POST" action="edit.php?id=<?= $id ?>">
  <input type="text" name="title" value="<?= htmlspecialchars($task['title']) ?>" required>
  <textarea name="description"><?= htmlspecialchars($task['description']) ?></textarea>
  <button type="submit">💾 Simpan</button>
</form>
```

#### Hapus Data (`delete.php`)
```php
<?php
include 'config.php';

$id = $_GET['id'];
$stmt = $mysqli->prepare("DELETE FROM tasks WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
  header("Location: index.php?success=1");
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
```

### Langkah 5: Menambahkan Relasi Database
#### Tambah Tabel Users
```mysql
CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(50) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL
);

-- Modifikasi tabel tasks
ALTER TABLE tasks ADD COLUMN user_id INT;
ALTER TABLE tasks ADD FOREIGN KEY (user_id) REFERENCES users(id);
```

#### Implementasi di PHP
```php
// Di config.php, tambahkan session_start();
session_start();

// Di add.php, sesuaikan query dengan user_id
$stmt = $mysqli->prepare("INSERT INTO tasks (title, description, user_id) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $title, $description, $_SESSION['user_id']);
```

## Challenge! 🚀
1. Tambahkan fitur registrasi/login user
2. Implementasikan pencarian task
3. Tambahkan kolom due_date dengan validasi tanggal
4. Buat relasi many-to-many antara tasks dan categories

## Credits
- Pengembang modul: [Risnanda Pascal](https://ricalnet.github.io)
- Telecommunication Network Laboratory: [Web Design](https://telnetlab.github.io/web-design/index.html)
- SAS Telkom University: [D3 Teknologi Telekomunikasi](https://io.telkomuniversity.ac.id/degree-program/faculty-of-telkom-applied-science/telecommunication-engineering/)