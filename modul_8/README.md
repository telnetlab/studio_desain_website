# Modul 8: Visualisasi Database Dalam Bentuk Grafik Menggunakan Highcharts dan Framework Bootstrap

## 8.1 Tujuan  
Setelah mengikuti praktikum ini praktikan diharapkan dapat :  
1. Praktikan dapat memahami pengertian dari Highchart.  
2. Praktikan dapat mengetahui macam-macam bentuk grafik.  
3. Praktikan dapat membuat visualisasi database dengan implementasi highcharts dan bootstrap.  

## 8.2 Alat dan Bahan  
Alat dan bahan untuk praktikum kali ini menggunakan:  
1. Laptop  
2. Software Text Editor  
3. Software XAMPP  

## 8.3 Pengertian Grafik  

![Grafik](/modul_8/img/grafik.png)

Grafik adalah sebuah media visual yang digunakan untuk menyajikan data dari tabel agar lebih mudah dipahami. Selain itu, grafik juga dapat diartikan sebagai gambaran dari pasang surutnya suatu data yang ada, dan digambarkan dengan garis ataupun gambar. Data yang digunakan untuk membuat grafik dapat berupa angka, huruf, simbol, gambar, lambang, perkataan, lukisan.  

## 8.4 Pengertian Highcharts  
Highcharts adalah sebuah pustaka/library JavaScript yang digunakan untuk membuat grafik interaktif pada halaman web. Highcharts memudahkan pengembangan dalam menyajikan data dalam bentuk visual seperti grafik garis, batang, lingkaran, dan berbagai jenis grafik laimnya, tappa perlu membuat semuanya dari awal. Highchart sangat cocok digunakan dalam pengembangan website atau aplikasi berbasis web, karena bersifat ringan, mudah dikonfigurasi, dan mendukung berbagai jenis perangkat serta browser. Selain itu, Highcharts juga memungkinkan pengambilan data secara dinamis dari server serta menyediakan fitur ekspor grafik ke dalam format seperti PDF, PNG, atau SVG.  

## 8.5 Karakteristik Highcharts  
- Kompatibilitas - Mendukung semua browser utama dan platform mobile (android, iOS, dll).  
- Multi-perangkat - Mendukung berbagai perangkat, seperti perangkat smartphone, tablet dan sejenisnya.  
- Gratis - Open source.  
- Ringan - Ukuran file inti hanya sekitar 35KB.  
- Konfigurasi Sederhana - Konfigurasi menggunakan format json.  
- Dinamis – Grafik dapat diperbarui secara langsung.  
- Multidimensional - Dukungan grafik multidimensi.  
- Tooltip interaktif – Menampilkan informasi saat pointer diarahkan ke grafik.  
- Timeline - Akurat hingga milidetik.  
- Ekspor data - Grafik dapat disimpan dalam format PDF / PNG / JPG / SVG  
- Output – Grafik keluaran pada halaman web.  
- Zoom - Memperbesar bagian yang dipilih dari grafik, melihat lebih dekat pada grafik.  
- Data eksternal – Dapat memuat data ekstermal dari server.  
- Rotasi teks - Mendukung rotasi di kedua arah dari label.  

## 8.6 Jenis Grafik  
Highchart mendukung beberapa jenis grafik yang sudah disediakan diantara lain seperti gambar dibawah ini.  

1. **Line Chart (Diagram Garis)**  
   Line chart digunakan untuk melihat trend data berdasarkan runtun waktu, data dapat disajikan per tahun, quarter, bulan, bahkan hingga perhari. Hasil visualisasi yang berbentuk garis mempermudah pengguna membaca data apakah mengalami kenaikan maupun penurunan.  

2. **Bar Chart (Diagram Batang)**  
   Bar chart merupakan salah satu visualisasi yang paling umum digunakan. Chart ini biasanya digunakan untuk membandingkan data dengan cepat dari seluruh kategori yang ada.  

3. **Area Chart (Bagan area)**  
   Bagan area pada dasarnya adalah bagan garis, tetapi ruang antara sumbu x dan garis diisi dengan warna atau pola. Ini berguna untuk menunjukkan hubungan bagian-ke-keseluruhan, seperti menunjukkan kontribusi perwakilan penjualan individu terhadap total penjualan selama satu tahun.  

4. **Pie Chart (Diagram Lingkaran)**  
   Grafik pie adalah penyajian data statistik dengan menggunakan gambar berbentuk lingkaran atau gambar naik turunnya data dalam bentuk lingkaran untuk menggambarkan persentase nilai total atau nilai keseluruhan.  

5. **Column Chart**  
   Column chart adalah variasi dari bar chart yang memiliki fungsi berbeda, bukan hanya karena pendekatan visualnya yang berubah dari horizontal ke vertikal, column chart juga cenderung membuat varian data yang berbeda dari bar chart biasa. Column chart memungkinkan kita memuat data nilai numerik yang memiliki rentang nilai seperti rentang umur dan rentang penghasilan yang dapat divisualkan dalam format histogram.  

6. **Scatter Plot**  
   Scatter Plot digunakan untuk mengetahui hubungan antara satu variabel dengan variabel lainnya yang bersifat numerik.  

7. **Bubble Chart (Bagan Gelenbung)**  
   Bubble Chart digunakan untuk menampilkan data dalam sekumpulan lingkaran dengan ukuran yang bervariasi. Besar kecilnya lingkaran ditentukan berdasarkan besar kecilnya nilai pada data.  

8. **Funnel Chart (Bagan Corong)**  
   Funnel chart adalah bentuk visualisasi data yang menggambarkan tahapan atau proses perjalanan pelanggan ketika memutuskan untuk melakukan kegiatan pembelian suatu produk. Sales funnel sangat amat penting karena dapat menginformasikan sejauh mana leads melakukan aktivitasnya dalam melakukan customer journey.  

9. **Heat Map (Peta panas)**  
   Peta panas memperlihatkan hubungan antara dua item dan memberikan informasi peringkat, seperti tinggi ke rendah atau buruk hingga sangat baik. Bagan ini menampilkan informasi peringkat menggunakan berbagai warna atau saturasi.  

10. **Pohon (Treemap)**  
    Tree Map digunakan untuk menampilkan visualisasi persegi panjang, besar-kecilnya persegi panjang ditentukan berdasarkan besar-kecilnya nilai pada suatu data.  

## 8.7 Pengertian Bootstrap  

![Bootstrap](/modul_8/img/bootstrap.png)

Bootstrap adalah framework front-end yang bersifat open-source dan digunakan untuk mempermudah proses desain dan pengembangan antarmuka website. Bootstrap menyediakan kumpulan template HTML, CSS, dan JavaScript yang sudah siap pakai untuk membuat tampilan web yang responsif, modern, dan konsisten di berbagai perangkat.  

## 8.8 Kelebihan Bootstrap  
- Responsif Otomatis – Desain akan menyesuaikan dengan ukuran layar.  
- Mudah Digunakan – Cukup pakai class-class tanpa harus membuat css dari nol.  
- Cepat dan Efisien – Hemat waktu pengembangan web.  
- Konsisten – Tampilan antar halaman dan komponen menjadi seragam.  
- Dokumentasi Lengkap – Banyak contoh dan penjelasan resmi.  
- Komunitas Besar – Banyak tutorial, forum, dan bantuan online.  

## 8.9 Kekurangan Bootstrap  
- Tampilan Umum – Banyak website yang menggunakan template bootstrap.  
- Ukuran File Besar – Banyak fitur bawaan yang tidak selalu digunakan.  
- Bergantung pada Class – Kode HTML menjadi lebih panjang.  
- Butuh Penyesuaian Tambahan – Untuk memiliki tampilan yang unik, tetap butuh modifikasi CSS.  

## LANGKAH PRAKTIKUM  
1. Pastikan XAMPP sudah berjalan.  
2. Buat database dengan nama `toko_penjualan`.  
3. Buat folder `modul8` di dalam folder `C:\xampp\htdocs` dan buat file `index.php`.
4. Lihat hasil pada website dengan mengakses : [http://localhost/modul8/index.php](http://localhost/modul8/index.php)  

## Credits
- Pengembang modul: [Fabian Rifqi Ilmany]()
- Telecommunication Network Laboratory: [Web Design](https://telnetlab.github.io/web-design/index.html)
- SAS Telkom University: [D3 Teknologi Telekomunikasi](https://io.telkomuniversity.ac.id/degree-program/faculty-of-telkom-applied-science/telecommunication-engineering/)