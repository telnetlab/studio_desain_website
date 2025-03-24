# Modul 2: HTML (Hyper Text Markup Language)
## Tujuan Praktikum
1. Memahami pengertian dan konsep dasar dari HTML
2. Memahami struktur dasar dari HTML
3. Memahami sintaks sintaks dalam HTML
4. Menggunakan elemen-elemen HTML

## Alat & Bahan
Alat & Bahan yang digunakan adalah sebagai berikut:
1. Laptop
2. Text Editor

## Dasar Teori
### Pengertian HTML
HTML digunakan oleh 96% dari semua situs web dan kemungkinan besar oleh semua situs yang Anda gunakan secara teratur. HTML adalah singkatan dari HyperText Markup Language.

Pertama, "HyperText" adalah teks pada halaman web yang merujuk ke halaman web lain. Anda mungkin mengenalnya sebagai hyperlink. Hyperlink biasanya membawa kita ke halaman web yang berbeda atau ke bagian lain dari halaman yang sama. Hyperlink juga dapat membuka PDF, email, atau multimedia seperti video atau file audio.

Menghubungkan informasi melalui hypertext adalah hal yang revolusioner dalam membangun web seperti yang kita kenal sekarang. Saat Anda menjelajahi web, Anda sebenarnya hanya mengklik hyperlink yang membawa Anda ke berbagai halaman web. Meskipun halaman tersebut bisa lebih kompleks dan dinamis, seperti di situs media sosial atau aplikasi web, pada dasarnya, semuanya hanyalah dokumen HTML yang menampilkan informasi.

Selanjutnya, "Markup" mengacu pada cara HTML menandai halaman dengan anotasi dalam file HTML. Anotasi ini tidak ditampilkan pada halaman web itu sendiri. Sebaliknya, mereka bekerja di balik layar, memberi tahu browser cara menampilkan dokumen kepada pengunjung. Kita akan segera mempelajari lebih lanjut tentang cara kerja markup ini.

Terakhir, "Language" adalah bagian paling sederhana dari singkatan ini untuk dipahami. Seperti bahasa apa pun, HTML memiliki alfabet dan digunakan untuk mengomunikasikan informasi. HTML adalah bahasa pemrograman, yang berbeda dari bahasa alami seperti Inggris atau Indonesia.

### Struktur Dasar HTML

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
```

- `!DOCTYPE`: Sebagai penanda kepada browser bahwa script yang diproses berupa file html.
- `<html>`: Sebagai penanda bahwa dokumen yang dibuat adalah dokumen web.
- `<head>`: Untuk berbagai definisi halaman tambahan dan peletakan judul.
- `<title>`: Judul untuk masing-masing halaman, ditampilkan di atas browser.
- `<body>`: Bagian untuk meletakkan seluruh informasi yang akan ditampilkan.

### Elemen-elemen HTML
1. Elemen HTML: Elemen adalah istilah bagi komponen-komponen dasar pembentuk dokumen dari HTML. Element terdiri dari tiga bagian, yaitu tag pembuka, tag isi, dan tag penutup. Sebagai contoh, untuk menampilkan judul dokumen HTML pada web browser digunakan elemen `<title>Studio Desain Website</title>`

    Keterangan: 
    - `<title>` sebagai tag pembuka, `Studio Desain Website` sebagai isi.
    - `</title>` sebagai tag penutup.

2. Tag HTML: Pada saat web browser menampilkan suatu halaman web, browser tersebut akan membaca teks-teks pada dokumen HTML, dan mencari kode khusus yang disebut tag. Syarat penulisannya yaitu sebagai berikut:

    - Tag HTML diapit dengan dua karakter siku ( `<` dan `>` ).
    - Tag HTML secara normal selalu berpasangan, contohnya (`<i>...</i>`) tag pertama dalam suatu pasangan adalah tag pembuka, dan tag kedua merupakan tag penutup.
    - Tag HTML tidak case sensitive, ini artinya `<b>` sama dengan `<B>`. 
    - Jika dalam suatu tag terdapat tag lain, maka penulisan tag terakhir tidak boleh bersilang dan harus berurutan. Berikut merupakan contoh penulisannya:

    ```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Studio Desain Website</title>
    </head>
    <body>
        <p><B>HTML adalah bahasa markup</B></p>
    </body>
    </html>
    ```

    - Atribut HTML: Merupakan pelengkap dari sebuah element HTML, pelengkap tersebut terdiri dari 2 bagian yaitu Property dan Value. Pada umumnya, penulisan value biasanya diapit dengan tanda petik dua. Contoh dari struktur penulisannya sebagai berikut:

    ```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Studio Desain Website</title>
    </head>
    <body bgcolor="red">
        <p>HTML adalah bahasa markup</p>
    </body>
    </html>
    ```

    Keterangan: 
    - `</body>`: property dan value akan berlaku di dalam body.
    - `bgcolor`: merupakan sebuah property untuk mengaktifkan background website.
    - `red`: merupakan value atau nilai dari property tersebut juga sebagai warna background

    Attribute yang digunakan untuk perataan dalam objek dokumen HTML, yaitu:
    - `Left`: Untuk rata kiri
    - `Right`: Untuk rata kanan
    - `Center`: Untuk rata tengah
    - `Justify`: Untuk rata kanan-kiri

    Berikut merupakan contoh penulisan dengan menggunakan perataan objek:

    ```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Studio Desain Website</title>
    </head>
    <body bgcolor="red">
        <p align="left">HTML adalah bahasa markup</p>
        <p align="center">HTML adalah bahasa markup</p>
        <p align="right">HTML adalah bahasa markup</p>
        <p align="justify">HTML adalah bahasa markup</p>
    </body>
    </html>
    ```

### Format Teks pada HTML
Terdapat berbagai macam jenis format teks pada HTML, seperti pada umumnya. Berikut merupakan format teks yang terdapat pada HTML: 

1. Teks Tebal: Membuat teks menjadi tebal, tag yang digunakan adalah `<b>` sebagai tag pembuka dan `</b>` sebagai tag penutup.
2. Teks Miring: Membuat teks menjadi miring, tag yang digunakan adalah `<i>`
sebagai tag pembuka dan `</i>` sebagai tag penutup.
3. Underline: Membuat sebuah teks dengan bergaris dibagian bawahnya, tag yang digunakan adalah `<u>` sebagai tag pembuka dan `</u>` sebagai tag penutup.
4. Format Superscript: Format teks yang ukuran hurufnya diperkecil dan posisinya dinaikkan ke atas, seperti angka yang digunakan dalam perpangkatan, tag yang digunakan, yaitu `<sup>` sebagai tag pembuka dan `</sup>` sebagai tag penutup.
5. Format Subscript: Merupakan lawan dari Superscript, berarti format teks yang ukuran hurufnya diperkecil dan posisinya diturunkan ke bawah. Tag yang digunakan yaitu `<sub>` sebagai tag pembuka dan `</sub>` sebagai tag penutup.
6. Membuat Heading (Judul suatu teks): Pada HTML menyediakan 6 jenis ukuran dalam penulisan judul, penulisannya menggunakan tag `<hn>` sebagai tag pembuka dan `</hn>` sebagai tag penutup. Nilai `n` merupakan bilangan yang akan kita inputkan, mulai dari 1 sampai dengan 6.

    Berikut merupakan contoh penulisan dengan menggunakan perataan objek:

    ```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Studio Desain Website</title>
    </head>
    <body bgcolor="red">
        <p align="left">HTML adalah bahasa markup</p>
        <p align="center">HTML adalah bahasa markup</p>
        <p align="right">HTML adalah bahasa markup</p>
        <p align="justify">HTML adalah bahasa markup</p>
        <p><b><h1>Ini adalah web</h1></b></p>
        <p><i><h1>Ini adalah web</h1></i></p>
        <p><h3>Ini adalah web<sup>2</sup></h3></p>
        <p><h3>Ini adalah web<sub>2</sub></h3></p>
    </body>
    </html>
    ```

### HTML Hyperlink
Hyperlink dalam HTML ini berfungsi untuk membuat sebuah teks yang apabila diklik maka akan berpindah ke halaman lain. Tag yang digunakan adalah `<a>` yang merupakan singkatan dari Anchor yang berarti jangkar. Setiap tag `<a>` biasanya diikuti dengan `href` yang merupakan singkatan dari hypertext reference. Jangan lupakan penggunaan tag penutup yaitu `</a>`. Contoh penggunaan Hyperlink pada HTML:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Desain Website</title>
</head>
<body bgcolor="red">
    <p align="left">HTML adalah bahasa markup</p>
    <p align="center">HTML adalah bahasa markup</p>
    <p align="right">HTML adalah bahasa markup</p>
    <p align="justify">HTML adalah bahasa markup</p>
    <p><b><h1>Ini adalah web</h1></b></p>
    <p><i><h1>Ini adalah web</h1></i></p>
    <p><h3>Ini adalah web<sup>2</sup></h3></p>
    <p><h3>Ini adalah web<sub>2</sub></h3></p>
    <p><a href"https://telnetlab.github.io">Klik di sini</a></p>
</body>
</html>
```

### HTML List
List ini biasanya digunakan untuk membuat daftar list. Ada beberapa jenis penulisan list dalam HTML, yaitu sebagai berikut :

- Ordered List: Nomor item secara default menggunakan angka 1,2,3...dst sampai dengan list terakhir. Kita dapat mengubah nomor dalam ordered list dengan model angka yang lain, dengan mengisi attribute type pada tag `<ol> </ol>` dan didalamnya ada tag `<li> </li>` (list Item).

    Contoh penulisan Ordered List:

    ```html
    <ol>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
    </ol>
    ```

- Unordered List atau biasa juga disebut bulleted list, mempunyai bullet default seperti noktah. Dalam penulisannya menggunakan tag `<ul> </ul>` dan didalamnya ada tag `<li> </li>`.

    Contoh penulisan Ordered List:

    ```html
    <ul>
        <li>Item A</li>
        <li>Item B</li>
        <li>Item C</li>
    </ul>
    ```

### HTML Table
Tabel merupakan cara untuk menampilkan informasi dalam bentuk sel yang terdiri dari baris dan kolom. Elemen HTML `<table>` digunakan untuk membuat tabel guna mengatur konten. Elemen ini memerlukan tiga elemen HTML seperti:

1. `<tr>`: mendefinisikan baris tabel.
2. `<th>`: mendefinisikan header tabel.
3. `<td>`: mendefinisikan data tabel (yaitu konten dari sel-sel tabel).

Selain elemen-elemen tersebut, table juga mempunyai bermacam macam atribut yang dapat mempercantik bentuk table tersebut, yaitu:

| Atribut | Nilai | Keterangan |
|----------|-----------|--------|
| Align | Left, Center, Right | Perataan Tabel |
| Border | Angka 0, 1, dst. | Menentukan ketebalan tabel |
| Width | Ixel/Persentase | Mengatur lebar tabel |
| Valign | Middle | Perataan tabel |
| bgcolor | Warna/Bil.hexadecimal | Memberi warna pada tabel/sel |
| Colspan | Angka 1, 2, dst. | Menggabungkan beberapa kolom |
| Rowspan | Angka 1, 2, dst. | Menggabungkan beberapa baris |
| Cellspacing | Angka 1, 2, dst. | Mengatur jarak antara garis tepi dalam dan luar |
| Cellpadding | Angka 1, 2, dst. | Mengatur jarak dari border sisi dalam tabel dengan isi tabel itu sendiri |

### Menyisipkan Gambar
Selain teks, halaman web juga dapat memuat gambar. Terdapat beberapa jenis format gambar yang dapat digunakan pada halaman web, antara lain:

- GIF (Graphics Interchange Format) (.gif)
- JPEG (Joint Photographic Experts Group) (.jpg)
- PNG (Portable Network Graphics) (.png)
- BMP (Bitmap) (.bmp)

Untuk menyisipkan gambar dalam halaman web dapat dilakukan dengan menggunakan tag `<img>`. Terdapat dua cara untuk membuat gambar dalam web dengan menggunakan tag `<img>`:

1. Absolute Path: Diletakkan pada folder yang sama dengan halaman web, sehingga cukup dipanggil nama filenya saja atau dapat berupa alamat dari suatu website. Contoh: `<img src=”foto.jpg”>`
2. Relative Path: File gambar disimpan pada folder yang terpisah dengan folder halamannya. Contoh: `<img src=”/image/foto.jpg”>`

### HTML Form
Form adalah suatu cara untuk menjadikan halaman web lebih interaktif, karena akan mendapatkan umpan balik dari pengunjung web. Form dapat digunakan untuk membuat buku tamu, formulir pemesanan, survey, meminta komentar, absensi, dan lain sebagainya. Adapun cara untuk membuat form adalah dengan menggunakan elemen form kemudian ditambah dengan komponen-komponen pembentuk form seperti:

```html
<form action="#" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>

    <label>Jenis Kelamin:</label>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Laki-laki</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Perempuan</label>
    <br><br>

    <label for="hobby">Hobi:</label>
    <input type="checkbox" id="hobby1" name="hobby" value="rebahan">
    <label for="hobby1">Rebahan</label>
    <input type="checkbox" id="hobby2" name="hobby" value="gaming">
    <label for="hobby2">Mabar</label>
    <input type="checkbox" id="hobby3" name="hobby" value="scrolling">
    <label for="hobby3">Scroll Sosmed</label>
    <br><br>

    <label for="country">Negara:</label>
    <select id="country" name="country">
        <option value="indonesia">Indonesia</option>
        <option value="china">China</option>
        <option value="russia">Russia</option>
        <option value="usa">United States</option>
    </select>
    <br><br>

    <label for="comments">Komentar:</label>
    <textarea id="comments" name="comments" rows="4" cols="50" placeholder="Tulis komentar di sini..."></textarea>
    <br><br>

    <input type="submit" value="Kirim">
    <input type="reset" value="Reset">
</form>
```


## Credits
- Pengembang modul: [Alif Surya Akbar]()
- Telecommunication Network Laboratory: [Web Design](https://telnetlab.github.io/web-design/index.html)
- SAS Telkom University: [D3 Teknologi Telekomunikasi](https://io.telkomuniversity.ac.id/degree-program/faculty-of-telkom-applied-science/telecommunication-engineering/)