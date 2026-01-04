# 🛠 Panduan Pengembangan Fitur (Development Guide)

Panduan ini menjelaskan langkah-langkah detail untuk menambahkan fitur baru ke dalam **Base Laravel Template** ini, mengikuti standar arsitektur _Service-Repository Pattern_ yang telah diimplementasikan.

---

## 🚀 1. Menggunakan Command Generator

Kami telah menyediakan custom command untuk mempercepat pembuatan boilerplate fitur baru:

```bash
php artisan make:feature NamaFitur
```

**Hasil dari perintah ini:**

-   `app/Models/NamaFitur.php`
-   `database/migrations/xxxx_create_nama_fitur_table.php`
-   `app/Interfaces/Repositories/NamaFiturRepositoryInterface.php`
-   `app/Repositories/NamaFiturRepository.php` (Binding otomatis di AppServiceProvider)
-   `app/Services/NamaFiturService.php`
-   `app/Http/Controllers/NamaFiturController.php`
-   `app/Http/Requests/NamaFiturRequest.php`
-   `resources/views/pages/nama-fitur/` (Folder view kosong)

---

## 🗄 2. Database & Model

### Step A: Migration

Buka file migration yang baru dibuat, tentukan field tabel Anda:

```php
public function up(): void {
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->integer('price');
        $table->boolean('is_active')->default(true);
        $table->timestamps();
    });
}
```

Lalu jalankan: `php artisan migrate`

### Step B: Model Setup

Tambahkan trait `LogsActivity` untuk audit otomatis dan tentukan `$fillable` & `$casts`:

```php
class Product extends Model {
    use LogsActivity; // Aktifkan Audit Trail otomatis

    protected $fillable = ['name', 'price', 'is_active'];
    protected $casts = ['is_active' => 'boolean'];
}
```

---

## 📂 3. Implementasi Logic (Service-Repository)

### Repository

Gunakan untuk query database. Jika hanya CRUD standar, Anda tidak perlu mengubah apa pun karena sudah extend `BaseRepository`.

### Service

Tempat meletakkan Business Logic. Jangan letakkan logika berat di Controller.

```php
// Contoh memproses data sebelum simpan
public function create(array $data) {
    $data['slug'] = Str::slug($data['name']);
    return parent::create($data);
}
```

---

## 🌐 4. Routing & Controller

### Update Route

Daftarkan resource di `routes/web.php` (atau `api.php`):

```php
Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductsController::class)
         ->middleware('check.permission:products.index');
});
```

### Controller Implementation

Terima request, panggil service, arahkan view:

```php
public function store(ProductsRequest $request) {
    $data = $request->validated();
    $this->service->create($data);

    return redirect()->route('products.index')
        ->with('success', 'Produk berhasil ditambahkan!');
}
```

---

## 🎨 5. Frontend & UI Tools

### Notifikasi (SweetAlert2 & Toastr)

Sistem sudah memiliki `AlertHandler` global.

**A. Sukses (Toastr):**
Otomatis muncul jika Anda mengirim `->with('success', '...')` dari controller.

**B. Konfirmasi Hapus (SweetAlert2):**
Gunakan selector `.delete-record` di view Anda:

```javascript
$(".delete-record").on("click", function () {
    window.AlertHandler.confirm("Hapus?", "Yakin?", "Ya, Hapus!", () => {
        // Jalankan AJAX delete disini
    });
});
```

### Upload File

Gunakan `FileUploadService` di Controller:

```php
if ($request->hasFile('cover')) {
    $media = $this->fileUploadService->upload($request->file('cover'), 'folder-tujuan');
    $data['cover'] = $media->path;
}
```

---

## ☰ 6. Integrasi Sidebar Menu

Agar menu muncul di sidebar dan memiliki sistem permission:

1. Buka `database/seeders/RoleAndMenuSeeder.php`.
2. Tambahkan array menu ke dalam variabel `$menus`:
    ```php
    ['name' => 'Katalog Produk', 'slug' => 'products.index', 'path' => '/products', 'icon' => 'ri-shopping-bag-line', 'order_no' => 5],
    ```
3. Jalankan: `php artisan db:seed --class=RoleAndMenuSeeder`.
4. Dashboard akan otomatis merender menu tersebut berdasarkan hak akses role user.

---

## ✅ Checklist Terakhir

-   [ ] Command `make:feature` dijalankan.
-   [ ] Migration diisi & dijalankan.
-   [ ] Model menggunakan `LogsActivity`.
-   [ ] Route terdaftar & dibungkus middleware `check.permission`.
-   [ ] Menambahkan menu di `RoleAndMenuSeeder`.
-   [ ] UI menggunakan Layout Master & AlertHandler.
