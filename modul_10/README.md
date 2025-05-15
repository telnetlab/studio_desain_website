# MODUL 10: WEB HOSTING DAN GITHUB PAGES

## 10.1 Tujuan Praktikum

Setelah mengikuti praktikum ini praktikan diharapkan dapat:

1. Praktikan dapat memahami terkait web hosting dan GitHub  
2. Praktikan dapat mengetahui macam-macam web hosting  
3. Praktikan dapat mempublikasikan situs web statis dan dinamis  

## 10.2 Alat dan Bahan

Alat dan bahan untuk praktikum kali ini menggunakan:

1. Laptop  
2. Internet  
3. Editor teks  
4. Perangkat lunak Git  
5. Terdaftar di akun GitHub  

## 10.3 Dasar Teori

### 10.3.1 Web Hosting

Web hosting merupakan layanan yang menyediakan tempat penyimpanan untuk situs web atau aplikasi web agar dapat diakses melalui berbagai perangkat seperti komputer desktop, perangkat seluler, dan tablet. Setiap situs web atau aplikasi web terdiri dari berbagai jenis file, termasuk gambar, video, teks, dan kode, yang disimpan pada komputer khusus yang disebut server. Penyedia layanan hosting bertanggung jawab dalam tempat penyimpanan file digital tersebut. Selain menyediakan infrastruktur penyimpanan, layanan hosting juga mencakup fitur tambahan seperti keamanan jaringan, pencadangan data secara berkala, sertifikat SSL, pemantauan kinerja, serta dukungan teknis.

### 10.3.2 Jenis-Jenis Layanan Hosting

**A. Shared Hosting**  
Shared hosting adalah jenis hosting yang servernya dipakai secara bersama-sama oleh banyak user sekaligus.  

**Kelebihan:**  
1. Harga ekonomis.  
2. Server hosting sepenuhnya dikelola dan dirawat oleh penyedia hosting.  
3. Cocok untuk pemula.  
4. Fasilitas lengkap, mulai dari disk space, unlimited bandwidth, database, hingga SSL.  

**Kekurangan:**  
1. Jika ada user yang menggunakan fasilitas secara berlebihan, website user lain dapat ikut merasakan dampaknya.  
2. Adanya limit penyimpanan file dan fasilitas server.  

**B. VPS Hosting**  
VPS atau Virtual Private Server adalah salah satu jenis hosting pribadi yang resource-nya hanya dipakai oleh satu pengguna saja. Sehingga, server tidak akan terpengaruh oleh pengguna lain. Di jenis hosting ini, pengguna memiliki kebebasan untuk mengatur dan mengelola resource yang tersedia secara mandiri. Artinya, pengguna perlu memiliki kemampuan teknis pengelolaan server.  

**Kelebihan:**  
1. Karena private, resource tidak terpengaruh pengguna lain.  
2. Bebas kustomisasi server VPS.  
3. Dapat mengelola banyak akun hosting.  
4. Bebas memilih sistem operasi (OS).  
5. Harga lebih terjangkau dibanding server dedicated.  

**Kekurangan:**  
1. Melakukan konfigurasi server sendiri.  
2. Perlu memiliki pemahaman teknis tentang server.  

**C. Dedicated Hosting**  
Dedicated hosting adalah server yang hanya digunakan oleh satu pengguna saja. Dengan server yang didedikasikan untuk satu pengguna saja, maka pengguna tidak perlu khawatir website akan mengalami down.  

**Kelebihan:**  
1. Resource sangat besar.  
2. Mampu menampung trafik tinggi.  
3. Dapat menyimpan data yang sangat banyak (big data).  
4. Memiliki akses root untuk mengatur server.  

**Kekurangan:**  
1. Harga yang ditawarkan sangat mahal.  
2. Harus melakukan perawatan server sendiri.  
3. Perlu memiliki pemahaman teknis.  

**D. Cloud Hosting**  
Cloud hosting adalah hosting dengan resource selayaknya VPS, tapi dengan kemudahan penggunaan seperti Shared Hosting. Cloud hosting dapat membagikan beban ke beberapa server sekaligus, sehingga ketika salah satu server mengalami gangguan, website tetap stabil dengan backup server lain.  

**Kelebihan:**  
1. Resource yang tersedia banyak;  
2. Dapat menampung traffic sangat tinggi;  
3. Full managed oleh penyedia hosting;  
4. Tidak perlu pengetahuan teknis yang mendalam.  

**Kekurangan:**  
1. Harga lebih mahal dari VPS dan shared hosting.  

**E. WordPress Hosting**  
WordPress hosting adalah jenis hosting khusus pengguna WordPress yang spesifikasinya kurang lebih mirip shared hosting. Bedanya, server WordPress hosting dikonfigurasi secara khusus untuk pengguna WordPress. Di mana user akan lebih mudah membangun website dengan beberapa klik. seperti shared hosting, jenis hosting ini juga harus berbagai fasilitas penyimpanan dengan pengguna lainnya. Sehingga, ketika pengguna lain memakai resource secara berlebihan, maka user lain yang menggunakan hostingan yang sama akan terkena dampaknya juga.  

**Kelebihan:**  
1. Harga ekonomis seperti shared hosting.  
2. Terintegrasi dengan WordPress.  
3. Ramah untuk pemula.  
4. Full managed oleh penyedia hosting.  
5. Fasilitas seperti disk space, SSL, dan sejenisnya cukup lengkap.  

**Kekurangan:**  
1. Resource terbatas dan dipakai bersamaan.  
2. Jika ada user lain yang memakai resource berlebihan, website Anda juga terkena dampaknya.  

**F. Simple WordPress**  
Simple WordPress hosting adalah jenis hosting khusus untuk user yang ingin membangun website dengan CMS WordPress tappa perlu memusingkan hal teknis. Termasuk tidak perlu akses cPanel untuk edit file website dan pengaturan lainnya. Semua pengaturan dan optimasi website di cPanel, seperti keamanan, kecepatan, dan bandwidth akan diatur oleh penyedia hosting. Hal inilah yang membedakan Simple WordPress hosting dengan WordPress hosting. sehingga user bisa lebih mudah dalam membuat website.  

**Kelebihan:**  
1. Tidak perlu melakukan pengaturan hosting dan domain.  
2. Pengelolaan website mudah, cocok untuk pemula.  
3. Keamanan dan kecepatan website terjamin.  
4. Bebas install plugin dan tema.  
5. Harga terjangkau.  

**Kekurangan:**  
1. Tidak leluasa jika ingin mengubah atau menambah pengaturan hosting.  
2. Resource cukup terbatas seperti shared hosting.  

### 10.3.3 Git  

![git](/modul_10/img/git.png)

Git adalah sebuah sistem kontrol versi (Version Control System) yang digunakan untuk mencatat dan mengelola perubahan yang terjadi pada file, terutama dalam proyek pengembangan perangkat lunak. Git bekerja secara distribusi, artinya setiap pengembang yang terlibat dalam proyek memiliki salinan lengkap dari seluruh rivayat perubahan proyek tersebut.  

### 10.3.4 GitHub  

![GitHub](/modul_10/img/github.png)

GitHub adalah sebuah aplikasi berbasis web dengan Version Control System (VCS) yang menyediakan layanan untuk menyimpan repository dengan gratis. Respository merupakan tempat yang dapat Anda gunakan untuk menyimpan berbagai file berupa source code. dengan aplikasi ini Anda juga dapat melakukan kolaborasi dalam mengerjakan project tertentu agar dapat terus melakukan update secara rutin, termasuk melacak dan menyimpan pertbahan-perubahan yang terjadi dalam project tersebut. Aplikasi ini termasuk sangat populer dan banyak digunakan termasuk oleh perusahaan-perusahaan besar skala dunia seperti Facebook, Google, dan Twitter.  

**Beberapa fungsi GitHub adalah:**  
- Menyimpan dan mengelola souce code dalam bentuk repository.  
- Melacak pertbahan kode secara historis menggunakan sistem version control Git.  
- Mendukung kolaborasi tim melalui fitur branching, pull request, dan merge.  
- Mempermudah identifikasi dan penyelesaian bug melalui fitur issue tracker.  
- Mengintegrasikan workflow pengembangan perangkat lunak dengan CI/CD.  
- Menyediakan dokumentasi proyek melalui GitHub Pages atau README.  
- Mengamankan kode dengan kontrol akses dan manajemen hak pengguna.  

### 10.3.5 GitHub Pages  
GitHub Pages adalah layanan hosting statis yang disediakan oleh platform GitHub untuk menyajikan halaman web langsung dari repositori Git. Layanan ini memungkinkan pengguna untuk menerbitkan konten situs web secara langsung dari repositori mereka dengan menggunakan HTML, CSS, dan JavaScript, tanpa memerlukan server web eksternal atau konfigurasi kompleks. GitHub Pages banyak digunakan untuk dokumentasi proyek, portofolio pribadi, blog statis, serta berbagai situs berbasis generator konten statis seperti Jekyll.  

GitHub Pages bekerja dengan mengambil konten dari branch tertentu dalam repositori GitHub (umumnya main, master, atau gh-pages), kemudian menyajikannya sebagai situs web yang dapat diakses secara publik melalui domain github.io atau domain kustom. Jika pengguna menggunakan Jekyll, GitHub Pages secara otomatis membangun situs dari berkas-berkas Markdown yang telah dikonfigurasi dalam repositori.  

GitHub Pages dirancang untuk menyajikan konten statis dan tidak mendukung backend dinamis secara langsung. Namun, ia dapat diintegrasikan dengan layanan pihak ketiga atau API eksternal untuk menambah fungsionalitas.  

## Credits
- Pengembang modul: [A. Kiflan Jiyaad]()
- Telecommunication Network Laboratory: [Web Design](https://telnetlab.github.io/web-design/index.html)
- SAS Telkom University: [D3 Teknologi Telekomunikasi](https://io.telkomuniversity.ac.id/degree-program/faculty-of-telkom-applied-science/telecommunication-engineering/)