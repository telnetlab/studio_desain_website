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
