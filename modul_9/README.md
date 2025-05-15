# Modul 9: LARAVEL

### 9.1 Tujuan Praktikum
1. Praktikan dapat mengetahui dan memahami apa itu Framework Laravel.  
2. Praktikan dapat mengetahui dan memahami konsep dari Framework Laravel.  
3. Praktikan dapat mengetahui dan memahami fitur-fitur pada Framework Laravel.  
4. Praktikan dapat mengetahui dan memahami Arsitektur pada Framework Laravel.  
5. Praktikan dapat mengoperasikan Framework Laravel.  
6. Praktikan dapat membuat halaman CRUD produk/barang.  

### 9.2 Alat dan Bahan
1. Laptop.  
2. Laravel v.12.  
3. Composer.  
4. Xampp.  
5. Text Editor.  

### 9.3 Dasar Teori

#### 9.3.1 Sejarah Framework Laravel
Laravel pertama kali dirilis oleh Taylor Otwell pada 09 Juni 2011 dengan versi beta. Otwell menciptakan Laravel sebagai solusi yang lebih elegan dan ekspresif daripada framework PHP yang populer saat itu seperti CodeIgniter, yang kurang dalam fitur seperti authentikasi, routing yang fleksibel, dan dependency injection. Oleh karena itu, Otwell membuat sendiri framework dengan nama Laravel.  

Perkembangan versi Laravel sebagai berikut:  
- **Laravel 1 (2011)**  
   Versi pertama. Sudah menyediakan fitur routing, model, dan sesi, tapi belum mendukung ORM Eloquent.  

- **Laravel 2 (2011)**  
   Diperkenalkan konsep IoC (Inversion of Control) dan sistem templating Blade. Eloquent ORM mulai digunakan.  

- **Laravel 3 (2012)**  
   Tambahan fitur utama seperti command-line tool "Artisan", event handling, dan bundles (cikal bakal packages).  

- **Laravel 4 (2013)**  
   Rebuild total dengan menggunakan Composer. Lebih modular dan mendukung dependency injection secara lebih baik.  

- **Laravel 5 (2015)**  
   Reorganisasi struktur folder, hadirnya fitur seperti middleware, form requests, dan task scheduling.  

- **Laravel 6 (2019)**  
   Menjadi versi LTS (Long-Term Support). Hadir dengan Laravel UI dan Semantic Versioning.  

- **Laravel 7 dan 8 (2020–2021)**  
   Penambahan fitur Jetstream, Livewire, dan Fortify untuk otentikasi modern.  

- **Laravel 9 & 10 (2022–2023)**  
   Laravel 9 menjadi LTS berikutnya. Laravel 10 dirilis dengan peningkatan performa, fitur query builder baru, dan dukungan native untuk PHP 8.1 ke atas.  

#### 9.3.2 Pengertian Framework Laravel
Laravel adalah framework aplikasi web berbasis PHP open-source yang dirancang untuk memudahkan dan mempercepat proses pengembangan aplikasi web yang elegan dan ekspresif. Laravel menggunakan pola arsitektur Model-View-Controller (MVC), yang memisahkan logika aplikasi, tampilan, dan pengelolaan data agar kode menjadi lebih terstruktur, efisien, dan mudah dipelihara serta menyediakan alat bantu serta pustaka yang memudahkan developer untuk menangani proses seperti routing, session, caching, autentikasi, dan database. Laravel menggunakan GITHUB sebagai tempat untuk berbagai kode.  

Laravel merupakan framework PHP yang mengadopsi pola arsitektur Model-View-Controller (MVC). Arsitektur ini membagi aplikasi menjadi tiga komponen utama, yaitu Model yang bertanggung jawab atas pengelolaan data dan logika bisnis, View yang mengatur tampilan antarmuka pengguna, serta Controller yang menangani alur data antara Model dan View serta interaksi pengguna. Dengan pemisahan ini, pengembangan aplikasi menjadi lebih terstruktur, sehingga memudahkan pengelolaan kode, mempercepat proses development, serta memudahkan pengujian dan pemeliharaan aplikasi website.  

Laravel sendiri bekerja di sisi back-end (server-side) dan menawarkan berbagai fitur bawaan seperti sistem migrasi database, routing yang fleksibel, serta Blade templating engine untuk View. Dengan dukungan arsitektur MVC, pengembang dapat fokus pada salah satu bagian aplikasi tanpa mengganggu bagian lain, misalnya hanya pada Model atau Controller. Hal ini tidak hanya meningkatkan efisiensi dan kualitas pengembangan, tetapi juga memudahkan skalabilitas dan pemeliharaan aplikasi dalam jangka panjang.  

#### 9.3.3 Fitur-fitur Laravel
Framework Laravel memiliki banyak sekali fitur-fitur yang tersedia dan dapat digunakan sebagai mana fungsinya, seperti:  

- **Routing**  
   Memungkinkan pengembangan mendefinisikan rute URL dengan mudah untuk mengarahkan permintaan HTTP ke controller yang sesuai. Routing memisahkan logika rute dari aksi yang dilakukan, sehingga kode lebih terstruktur dan mudah dipelihara.  

- **Eloquent ORM (Object-Relational Mapping)**  
   Sistem ORM milik Laravel yang memudahkan interaksi dengan database menggunakan sintaks PHP yang sederhana dan elegan. Eloquent membantu pengembangan emulasi query database dengan cepat dan efisien tanpa harus menggunakan SQL manual.  

- **Blade Templating Engine**  
   Mesin templating yang ringan dan kuat, memungkinkan pembuatan tampilan dinamis dengan sintaks yang mudah dipahami. Blade juga mendukung penggunaan template yang dapat digunakan kembali.  

- **Middleware**  
   Digunakan untuk memfilter HTTP request yang masuk ke aplikasi. Middleware sangat berguna untuk otentikasi, validasi input, dan berbagai tugas lain yang berkaitan dengan keamanan dan pengelolaan request.  

- **Authentication & Authorization**  
   Laravel menyediakan sistem otentikasi dan otorisasi yang mudah digunakan untuk mengelola login, registrasi, dan hak akses pengguna.  

- **Caching**  
   Sistem caching yang efisien untuk meningkatkan performa aplikasi dengan menyimpan data sementara, sehingga proses pengambilan data menjadi lebih cepat dan mengurangi beban server.  

- **Queues and Jobs**  
   Memungkinkan eksekusi tugas berat atau yang memerlukan waktu lama (seperti pengiriman email massal) secara asinkron di background, sehingga aplikasi tetap responsive.  

- **Artisan CLI**  
   Command Line Interface (CLI) bawaan Laravel yang memudahkan berbagai tugas pengembangan seperti pembuatan file, migrasi database, testing, dan lain-lain.  

- **Unit Testing**  
   Laravel mendukung pengujian otomatis (unit testing) untuk memastikan setiap bagian aplikasi berjalan dengan benar setelah dilakukan perubahan atau update.  

- **Migration & Schema Builder**  
   Memudahkan pengelolaan dan perubahan struktur database secara terkontrol menggunakan kode PHP, serta memudahkan migrasi data antar lingkungan pengembangan.  

- **Modularity**  
   Laravel memiliki sistem modular yang memungkinkan pengembangan memisahkan dan menggabungkan komponen aplikasi dengan mudah, sehingga aplikasi lebih fleksibel dan mudah dikembangkan.  

- **Email Sending**  
   Laravel menyediakan antarmuka yang mudah digunakan untuk mengirim email melalui berbagai layanan seperti SMTP, Mailgun, atau Sendmail, yang sangat berguna untuk notifikasi dan komunikasi dengan pengguna.  

- **Security**  
   Laravel dilengkapi fitur keamanan seperti CSRF protection, enkripsi data, dan hashing password untuk melindungi aplikasi dari berbagai ancaman keamanan.  

- **Configuration Management**  
   Memudahkan pengelolaan konfigurasi aplikasi yang berjalan di berbagai lingkungan (development, staging, production) secara konsisten dan efisien.  

#### 9.3.4 Arsitektur Framework Laravel
Setelah memahami bagaimana konsep dan cara kerja dari Framework Laravel dengan MVC, maka terdapat bagian arsitektur yang terbagi menjadi tiga bagian.  

- **Model**  
   1. Mengelola data dan logika bisnis aplikasi.  
   2. Berinteraksi langsung dengan database menggunakan Eloquent ORM.  
   3. Bertanggung jawab untuk mengambil, menyimpan, dan memanipulasi data.  

- **View**  
   1. Menyajikan antarmuka pengguna (UI).  
   2. Menggunakan Blade templating engine untuk membuat tampilan yang dinamis dan mudah dikelola.  
   3. Menampilkan data yang diterima dari Controller kepada pengguna.  

- **Controller**  
   1. Menghubungkan Model dan View.  
   2. Menerima input dari pengguna dan memprosesnya.  
   3. Mengatur alur data antara Model dan View.  
   4. Menentukan tampilan yang akan ditampilkan berdasarkan logika aplikasi.  

#### 9.3.5 Kelebihan dan Kekurangan Framework Laravel  
- **Kelebihan**  
   1. **Open Source dan Gratis**  
      Laravel bersifat open source, sehingga dapat digunakan dan dikembangkan secara bebas oleh siapa saja tanpa biaya.  
   2. **Keamanan Terintegrasi**  
      Fitur proteksi terhadap serangan umum seperti CSRF, XSS, dan SQL Injection sudah tersedia secara default.  
   3. **Performa Baik di Beban Tinggi**  
      Laravel mampu menangani traffic tinggi dengan baik, menjaga kecepatan aplikasi tetap optimal.  

- **Kekurangan**  
   1. **Kebutuhan Resource Server yang Relatif Tinggi**  
      Laravel memerlukan resource server yang cukup besar dibandingkan framework PHP lain, sehingga kurang optimal untuk hosting dengan spesifikasi rendah.  
   2. **Kurva Pembelajaran untuk Pemula**  
      Meskipun mudah dipelajari, beberapa konsep Laravel seperti Eloquent ORM dan arsitektur MVC bisa menjadi tantangan bagi pemula tanpa pengalaman sebelumnya.  
   3. **Ukuran Framework yang Besar**  
      Laravel memiliki ukuran file dan dependensi yang cukup besar, sehingga aplikasi yang dibangun bisa menjadi lebih berat dan mempengaruhi waktu loading.  

### 9.4 Pengertian Bootstrap  
Bootstrap adalah framework front-end open source yang berisi kumpulan HTML, CSS, dan JavaScript untuk memudahkan pengembangan website yang responsif dan mobile-friendly. Dikembangkan oleh Mark Otto dan Jacob Thornton dari Twitter pada tahun 2011, Bootstrap menyediakan berbagai komponen siap pakai seperti tombol, navigasi, form, dan sistem grid yang membantu membuat tampilan website modern dan konsisten di berbagai perangkat. Dengan menggunakan Bootstrap, pengembangan dapat mempercepat proses pembuatan website tanpa perlu menulis kode CSS dari awal, sehingga menghasilkan desain yang menarik dan fungsional dengan lebih efisien. Laravel, sebagai framework PHP, sangat luas dan fleksibel, memungkinkan integrasi dengan layanan eksternal seperti GitHub. Dengan package seperti Laravel Socialite, aplikasi dapat mengambil data dari GitHub melalui OAuth, sementara GitHub Actions dapat mengotomatisasi CI/CD. Integrasi ini memungkinkan pengembangan aplikasi Laravel yang terhubung dengan GitHub menjadi lebih efisien dan andal. Dengan kata lain, Bootstrap menjamin tampilan website Anda akan tetap rapi dan konsisten di berbagai perangkat pengunjung. Baik melalui smartphone, tablet, atau laptop.  

## Praktikum: Pembuatan Halaman CRUD Produk/Barang dengan Laravel

**CRUD (Create, Read, Update, Delete)** merupakan operasi dasar dalam pengembangan aplikasi web untuk mengelola data. Dokumentasi ini menjelaskan implementasi CRUD produk/barang menggunakan framework PHP Laravel.

## Implementasi
### 1. Instalasi dan Konfigurasi Awal
Buat projek Laravel baru dengan perintah berikut:
```bash
composer create-project laravel/laravel modul-laravel && cd modul-laravel
```

Konfigurasi koneksi basis data pada file `.env`:

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=modul_laravel
DB_USERNAME=phpmyadmin
DB_PASSWORD=phpmyadmin
```

### 2. Pembuatan Model dan Migrasi
Generate model, migrasi, dan controller sekaligus menggunakan `artisan`:
```bash
php artisan make:model Product -mcr
```

Definisikan skema tabel pada file migrasi `database/migrations/xxx_create_products_table.php`:
```php
public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->decimal('price', 10, 2);
        $table->integer('stock');
        $table->timestamps();
    });
}
```

### 3. Eksekusi Migrasi
```bash
php artisan migrate
```

### 4. Konfigurasi Routing
Tambahkan resource route di `routes/web.php`:
```php
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
```

### 5. Implementasi Controller
Method utama dalam `app/Http/Controllers/ProductController.php`:
```php
public function index()
{
    $products = Product::latest()->paginate(5);
    return view('products.index', compact('products'));
}

public function create()
{
    return view('products.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'stock' => 'required|numeric'
    ]);

    Product::create($request->all());
    return redirect()->route('products.index')->with('success','Produk berhasil dibuat');
}

public function show(Product $product)
{
    return view('products.show', compact('product'));
}

public function edit(Product $product)
{
    return view('products.edit', compact('product'));
}

public function update(Request $request, Product $product)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'stock' => 'required|numeric'
    ]);

    $product->update($request->all());
    return redirect()->route('products.index')->with('success','Produk berhasil diupdate');
}

public function destroy(Product $product)
{
    $product->delete();
    return redirect()->route('products.index')->with('success','Produk berhasil dihapus');
}
```

### 6. Pembuatan View
Buat folder `resources/views/products`. Struktur file:
```
/resources/views/products
├── index.blade.php
├── create.blade.php
├── edit.blade.php
├── show.blade.php
```

- `index.blade.php`:
    ```php
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Daftar Produk</h1>
                <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
                
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>Rp{{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Detail</a>
                                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $products->links() !!}
            </div>
        </div>
    </div>
    @endsection
    ``` 
- `create.blade.php`:
    ```php
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tambah Produk Baru</h1>
                
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama Produk:</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama Produk">
                        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label>Deskripsi:</label>
                        <textarea class="form-control" name="description" placeholder="Deskripsi"></textarea>
                        @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label>Harga:</label>
                        <input type="number" step="0.01" name="price" class="form-control" placeholder="Harga">
                        @error('price') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label>Stok:</label>
                        <input type="number" name="stock" class="form-control" placeholder="Stok">
                        @error('stock') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    @endsection
    ```
- `edit.blade.php` (mirip dengan create, tapi dengan value dan method PUT):
    ```php
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Produk</h1>
                
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama Produk:</label>
                        <input type="text" name="name" class="form-control" 
                            value="{{ $product->name }}">
                        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label>Deskripsi:</label>
                        <textarea class="form-control" name="description">{{ $product->description }}</textarea>
                        @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label>Harga:</label>
                        <input type="number" step="0.01" name="price" class="form-control" 
                            value="{{ $product->price }}">
                        @error('price') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label>Stok:</label>
                        <input type="number" name="stock" class="form-control" 
                            value="{{ $product->stock }}">
                        @error('stock') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    @endsection
    ```

- `show.blade.php`:
    ```php
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Detail Produk</h1>
                
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text"><strong>Harga:</strong> Rp{{ number_format($product->price, 2) }}</p>
                        <p class="card-text"><strong>Stok:</strong> {{ $product->stock }}</p>
                        <a href="{{ route('products.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    ```

### 7. Layout Utama
Buat `resources/views/layouts/app.blade.php`:
```php
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
```

### 8. Menjalankan Aplikasi
```bash
php artisan serve
```

Akses melalui browser di [http://localhost:8000/products](http://localhost:8000/products).

## Troubleshoting
### Mass Assignment Protection
**Error**: Illuminate\Database\Eloquent\MassAssignmentException

Error ini terjadi karena Laravel memiliki fitur mass assignment protection. Saat kita menggunakan `create()` atau `update()` dengan array data dari request, kita harus menentukan field mana saja yang boleh diisi secara massal.

**Solusi**:
Tambahkan properti `$fillable` pada model Product: (`app/Models/Product.php`)
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description', 
        'price', 
        'stock'
    ];
}
```

### Variabel Tidak Terdefinisi
**Error**: Undefined variable `$i`

Variabel `$i` yang digunakan untuk nomor urut tidak didefinisikan/dikirim dari controller ke view. 

**Solusi**: Ganti `<td>{{ ++$i }}</td>` dengan `<td>{{ $loop->iteration }}</td>` pada view `index.blade.php`:

## Credits
- Pengembang modul: [Feby Christiani Purba]() & [Risnanda Pascal](https://tel-u.ac.id/ricalnet)
- Telecommunication Network Laboratory: [Web Design](https://telnetlab.github.io/web-design/index.html)
- SAS Telkom University: [D3 Teknologi Telekomunikasi](https://io.telkomuniversity.ac.id/degree-program/faculty-of-telkom-applied-science/telecommunication-engineering/)
