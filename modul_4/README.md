# Modul 4: Pengenalan JavaScript
## Tujuan Praktikum
Setelah mengikuti praktikum ini, praktikan diharapkan dapat :
1. Mengetahui dan memahami apa itu JavaScript.
2. Mengetahui dan memahami cara kerja dan stuktur penulisan JavaScript.
3. Mengetahui kelebihan dan kekurangan JavaScript.
4. Mengimplementasikan JavaScript ke HTML..

## Alat & Bahan
Alat dan bahan yang digunakan adalah sebagai berikut :
1. Laptop
2. Text Editor
3. HTML

## Dasar Teori
### JavaScript
Javascript adalah sebuah bahasa komputer atau kode pemrograman yang digunakan pada website agar website tersebut menjadi lebih interaktif dan dinamis. Javascript adalah jenis bahasa pemrograman client side. Penggunaan kode javascript pada sebuah website bersifat opsional, artinya tidak harus selalu ada. Namun, website-website maupun blog modern saat ini hampir semuanya menggunakan kode javascript walaupun sedikit.

### Variable JavaScript
-   Var bersifat global, dapat di ubah dimana pun, memiliki sifat hoisting dan dapat di deklarasikan ulang dimana pun.
-  Let bersifat scoop area, dapat di ubah. tidak dapat di deklarasikan ulang.
-  Const bersifat scoop area, immutable (tidak dapat dirubah), tidak dapat dideklarasikan ulang. biasa digunakan untuk object.

### Kelebihan dan kekurangan JavaScript
- Kelebihan:
    1. **Mudah dipelajari**: JS fundamental adalah hal yang harus dipelajari sebelum menjadi front-end engineer, karena untuk membuat aplikasi harus berhadapan dengan tampilan akan berurusan dengan JS. Baik itu React, Node, Angular, Express dan lainya. Jadi Anda harus paham sadar tersebut agar mampu masuk kedalamnya lebih jauh.
    2. **Ringan**: JS bersifat client-side yang seluruh proses yang terjadi dalam sebuah halaman akan diproses oleh klien, peramban web. Jadi server hanya memproses HTTP request saja. Jika bahasa pemrogaman lain bersifat sisi-server. Alurnya akan menjadi request dari peramban ke server kemudian server menerima request dan mengolahnya. Selanjutnya hasil akan dikembalikan ke klien melalui peramban.
    3. **Dapat dikolaborasikan**: JS mampu berkolaborasi dengan yang lain seperti PHP. Hal tersebut membuat seorang developer menjadi cepat selesai. Jika terdapat fungsi yang tidak dapat dilakukan PHP maka akan dilakukan oleh JS.
    4. **Fleksibel**: Penggunaan Javascript sangatlah fleksibel, karena seringkali dipakai di berbagai jenis aplikasi, baik di sisi back end maupun sisi front end. Dengan bantuan dari Node.js juga, penggunaan Javascript bisa dijalankan di sisi server.
    5. **Halaman web menjadi lebih interaktif**: Menggunakan Javascript pengguna dapat berinteraksi banyak dengan websitenya karena Javascript membuat website lebih menarik.

- Kekurangan:
    1. **Tidak aman**: JS memang bagus namun jika Anda ingin membuat website yang bagus, krusial, butuh autentikasi yang merupakan data penting jangan menggunakan ini. Kenapa? Karena JS tidak mampu menghandel security seperti itu. Aplikasi ini dibuat dengan library atau Angular, tetap harus memakai pengaman yang lebih aman dari bahasa lain seperti PHP. Fungsi PHP akan mengirim respon ke JS yang sudah di enkripsi, jadi data yang uncul tidak akan bisa dibaca.
    2. **Hanya sebagai pembantu**: JS tidak dapat digunakan untuk membuat sebuah aplikasi yang berdiri sendiri atau standalone app. Lain halnya bahasa lain seperti C++ atau Java yang bisa di compile lalu menjadi sebuah aplikasi dengan bahsa itu sendiri. Jika JS ingin membuat aplikasi harus didukung dengan bahasa lain seprti bahasa markah dan HTML. Tanpa HTML, JS tidak dapat berjalan sempurna. Jadi kunci penting disini jika ingin bermain dengan JavaScript terlebih dahulu bermain dengan HTML.
    3. **Kurang terstruktur**: JavaScript adalah bahasa pemrograman yang tidak terstruktur, yang berarti tidak ada aturan yang kaku tentang bagaimana kode harus ditulis. Hal ini dapat menyebabkan kode yang sulit dibaca dan dipelihara, terutama untuk proyek besar.

### Cara Kerja JavaScript
Secara umum, cara kerja dari Javascript ada 2, yaitu:
1. **Eksekusi di Browser**: Ketika Kita membuka halaman web yang berisi kode JavaScript, kode tersebut akan didownload dan dieksekusi langsung di browser Anda. Browser memiliki mesin JavaScript (JavaScript engine) yang bertugas menerjemahkan dan menjalankan kode JavaScript.
2. **Memanipulasi Konten**: JavaScript sisi klien tidak bisa langsung berinteraksi dengan server. Namun fungsinya adalah untuk memanipulasi konten halaman web yang sudah dikirim oleh server. JavaScript bisa mengubah tampilan elemen HTML, mengatur gaya dengan CSS, dan menanggapi aksi pengguna seperti klik atau ketuk.

**Contoh Penggunaan**: Bayangkan Anda memiliki formulir di halaman web. Saat Anda mengetikkan sesuatu di formulir, JavaScript bisa digunakan untuk memvalidasi input secara langsung tanpa perlu bolak-balik ke server. Contoh lain adalah animasi interaktif atau efek visual yang dibuat dengan JavaScript.

### JavaScript dari Sisi Server (Server Side)
1. Node.js sebagai Wadah: JavaScript pada awalnya hanya bisa dijalankan di browser. Namun dengan munculnya Node.js, JavaScript bisa digunakan untuk pengembangan server-side. Node.js adalah platform open-source yang memungkinkan kode JavaScript dijalankan di luar browser.
2. Menangani Permintaan Dengan Node.js, JavaScript bisa berinteraksi dengan database, menangani permintaan HTTP, dan menghasilkan konten dinamis.

**Contoh Penggunaan**: Node.js bisa digunakan untuk membangun aplikasi web real-time, seperti chat atau aplikasi streaming. Juga bisa digunakan untuk membangun API (Application Programming Interface) yang menyediakan data ke aplikasi lain.

### Struktur Penulisan JavaScript
1. Menggunakan tag `<script>` sebagai tag pembuka dan, tag `</script>` sebagai tag penutup.
2. Bersifat case sensitive. Penulisan di dalam JavaScript harus selalu konsisten karena berbeda huruf besar dan kecilnya berarti berbeda juga artinya.
3. Penggunaan titik koma (;) dapat dihilangkan jika masing masing pernyataan ditempatkan di baris yang berbeda, contohnya:

    ```javascript
    <script type="text/javascript">
        nilai1 = 100; // menghilangkan titik koma
        nilai2 = 200;
        nilai1 = 100; 
        nilai2 = 200; // menggunakan titik koma
    </script>
    ```

## Credits
- Pengembang modul: [Richard Tryas Sembiring]()
- Telecommunication Network Laboratory: [Web Design](https://telnetlab.github.io/web-design/index.html)
- SAS Telkom University: [D3 Teknologi Telekomunikasi](https://io.telkomuniversity.ac.id/degree-program/faculty-of-telkom-applied-science/telecommunication-engineering/)