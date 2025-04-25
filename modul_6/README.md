# MODUL 6: DATABASE

## 5.1 Tujuan Praktikum  
Setelah mengikuti praktikum ini, praktikan diharapkan dapat:  
1. Memahami konsep dasar database.  
2. Mengenal SQL, MySQL, CRUD, dan Basis Data NoSQL.  
3. Mengoperasikan phpMyAdmin untuk membuat dan mengelola database.  
4. Melakukan operasi CRUD (Create, Read, Update, Delete) sederhana.  

## 5.2 Alat & Bahan  
1. Laptop  
2. Software Visual Studio Code  
3. Software XAMPP  

## 5.3 Dasar Teori  

### 5.3.1 Database  
*Database* atau basis data adalah sebuah sistem yang dirancang untuk mengelola dan menyimpan data secara terstruktur, sehingga data dapat diakses dengan mudah. Contohnya pada saat menyimpan nomor kontak di ponsel, sistem akan menyimpan data dalam format yang dapat diakses, dikelola, dan diperbarui dengan mudah. Beberapa contoh perangkat lunak basis data yang populer antara lain MySQL, Oracle Database, dan MongoDB.  

### 5.3.2 SQL
*Structured Query Language (SQL)* adalah bahasa pemrograman untuk menyimpan dan memproses informasi dalam basis data relasional. Dengan menggunakan SQL, pengguna dapat melakukan berbagai operasi seperti menampilkan, menambah, mengubah, dan menghapus data, serta mengelola struktur database itu sendiri. Basis data relasional ini menyimpan data dalam bentuk tabel, yang terdiri dari baris dan kolom yang mewakili atribut data yang berbeda, serta hubungan antara nilai-nilai data tersebut.  

## 5.3.3 MySQL  
MySQL adalah sistem manajemen basis data relasional (*Relational Database Management System/RDBMS*) yang bersifat *open-source* dan menggunakan bahasa SQL (*Structured Query Language*) untuk mengelola data. MySQL dirancang untuk menyimpan, mengatur, dan mengambil data secara efisien dalam bentuk tabel yang saling terhubung.  

## 5.4 Perbedaan SQL dan MySQL  
| Aspek          | SQL                              | MySQL                                      |  
|----------------|----------------------------------|--------------------------------------------|  
| Tipe           | Bahasa pemrograman               | Sistem manajemen database relasional (DBMS)|  
| Fungsi         | Mengelola database relasional    | Menyimpan, mengorganisasi, dan memanipulasi data |  
| Penggunaan     | Digunakan untuk membuat query    | Sebagai software yang menjalankan query SQL |  
| Universalitas  | Bisa digunakan di berbagai DBMS  | DBMS spesifik                              |  

## 5.5 CRUD  
CRUD adalah singkatan dari **Create, Read, Update, dan Delete**, yang merupakan operasi dasar yang sering digunakan dalam aplikasi pengolahan data.  

- **Create (Membuat)**:  
  Sintaks dasar: `INSERT INTO`.  
  Contoh: Saat mendaftar di situs web, data disimpan ke basis data.  

- **Read (Membaca)**:  
  Sintaks dasar: `SELECT FROM`.  
  Contoh: Menampilkan data dalam aplikasi web menggunakan PHP.  

- **Update (Memperbarui)**:  
  Sintaks dasar: `UPDATE namatabel SET ... WHERE ...`.  
  Contoh: Mengedit data melalui aplikasi web.  

- **Delete (Menghapus)**:  
  Sintaks dasar: `DELETE FROM namatabel WHERE ...`.  
  Contoh: Menghapus data melalui aplikasi web.  

## 5.6 Query  
*Query* adalah perintah atau instruksi yang digunakan untuk mengambil, menambahkan, mengubah, atau menghapus data di dalam sebuah basis data. Query ditulis menggunakan bahasa SQL dan dijalankan pada sistem manajemen basis data seperti MySQL, PostgreSQL, atau Oracle.  

### 5.6.1 Jenis-jenis Query pada Database SQL  
1. **DDL (Data Definition Language)**:  
   - `CREATE`: Membuat database dan tabel.  
   - `DROP`: Menghapus tabel dan database.  
   - `ALTER`: Mengubah struktur tabel (menambah, mengganti, atau menghapus kolom).  

2. **DML (Data Manipulation Language)**:  
   - `INSERT`: Memasukkan data ke tabel.  
   - `UPDATE`: Mengubah data dalam tabel.  
   - `DELETE`: Menghapus data dari tabel.  

3. **DCL (Data Control Language)**:  
   - `GRANT`: Memberikan hak akses ke user.  
   - `REVOKE`: Mencabut hak akses.  
   - `COMMIT`: Menyimpan perubahan permanen.  
   - `ROLLBACK`: Membatalkan perubahan.  

## 5.7 Jumlah Karakter pada Tipe Data  

### Tipe Data String  
| Tipe Data          | Jumlah Karakter               |  
|---------------------|-------------------------------|  
| CHAR                | 1-255                         |  
| VARCHAR             | 1-65535                       |  
| TINYBLOB, TINYTEXT  | 1-255                         |  
| BLOB, TEXT          | 1-65535                       |  
| LONGBLOB, LONGTEXT  | 1-4294967295                  |  
| MEDIUMBLOB, LONGTEXT| 1-16777215                    |  
| SET                 | Maksimum 64 elemen            |  
| ENUM                | Maksimum 65535 elemen         |  

### Tipe Data Numerik/Angka  
| Tipe Data   | Rentang Nilai                                  |  
|-------------|-----------------------------------------------|  
| SMALLINT    | -32.768 hingga 32.767                         |  
| MEDIUMINT   | 0 hingga 16.777.215                           |  
| INT         | 0 hingga 4.294.967.295                        |  
| BIGINT      | -9.223.372.036.854.775.808 hingga 9.223.372.036.854.775.807 |  
| DOUBLE      | ±1.7976931348623157E+308 hingga ±2.2250738585072014E-308 |  
| FLOAT       | ±3.402823466E+38 hingga ±1.175494351E-38      |  

## 5.8 Basis Data NoSQL  
Basis data NoSQL adalah jenis sistem manajemen basis data yang tidak menggunakan model relasional seperti SQL, melainkan model penyimpanan data fleksibel (dokumen, *key-value*, grafik, atau kolom lebar). Cocok untuk data skala besar, tidak terstruktur, atau semi-terstruktur.  

### 5.8.1 Keunggulan NoSQL  
1. **Fleksibilitas**: Tidak memerlukan struktur tabel kaku.  
2. **Skalabilitas**: Mudah diperluas dengan menambah server.  
3. **Performa Tinggi**: Proses baca/tulis cepat untuk aplikasi *real-time*.  
4. **Fungsionalitas Luas**: Struktur data menyesuaikan perubahan aplikasi.  

### 5.8.2 Perbedaan SQL dan NoSQL  

![Perbedaan SQL dan NoSQL](/modul_6/img/perbedaan-sql-dan-nosql.png)

| Fitur           | SQL                          | NoSQL                          |  
|-----------------|------------------------------|--------------------------------|  
| Struktur Data   | Skema terdefinisi            | Skema fleksibel                |  
| Konsistensi     | ACID                         | Konsistensi beragam            |  
| Skalabilitas    | Vertikal (menambah resource) | Horizontal (menambah server)   |  
| Bahasa Kueri    | SQL                          | API atau bahasa khusus         |  
| Cocok untuk     | - Aplikasi bisnis tradisional <br> - Sistem keuangan <br> - Query data kompleks | - Aplikasi web skala besar <br> - Data tidak terstruktur <br> - Fleksibilitas struktur data |  

## LANGKAH PRAKTIKUM  

### Membuat Database  
```sql
CREATE DATABASE nama_database;
```

### Membuat Tabel
```sql
CREATE TABLE nama_tabel ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50), reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)
```

### Insert Data
```sql
INSERT INTO nama_tabel (column1, column2, column3,...) VALUES (value1, value2, value3,...)
```

### Select Data
```sql
SELECT * FROM nama_tabel
```

### Update Data
```sql
UPDATE nama_tabel SET column1=value, column2=value2,... WHERE some_column=some_value
```

### Delete Data
```sql
DELETE FROM nama_tabel
WHERE some_column = some_value
```

## Credits
- Pengembang modul: [Naufal Ilmi](https://github.com/naufalilmi115)
- Telecommunication Network Laboratory: [Web Design](https://telnetlab.github.io/web-design/index.html)
- SAS Telkom University: [D3 Teknologi Telekomunikasi](https://io.telkomuniversity.ac.id/degree-program/faculty-of-telkom-applied-science/telecommunication-engineering/)