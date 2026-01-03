# 🚀 Base Laravel Feature Guide

Dokumentasi ini menjelaskan fitur-fitur utama yang tersedia dalam template ini dan bagaimana cara menggunakannya untuk mempercepat pengembangan aplikasi Anda.

---

## 📚 Daftar Fitur

1. [Service Repository Pattern](#1-service-repository-pattern)
2. [Activity Log System (Audit Trail)](#2-activity-log-system)
3. [File Upload Manager](#3-file-upload-manager)
4. [Role & Permission Management](#4-role--permission-management)
5. [Standardized API Response](#5-standardized-api-response)
6. [Dynamic Menu System](#6-dynamic-menu-system)
7. [Custom Artisan Generator](#7-custom-artisan-generator)
8. [API Documentation (Swagger)](#8-api-documentation-swagger)

---

## 1. Service Repository Pattern

Pemisahan logika bisnis, akses data, dan presentation layer untuk kode yang lebih bersih dan mudah diuji.

-   **Repository**: Hanya berisi query DB (Eloquent).
-   **Service**: Berisi business logic dan aturan aplikasi.
-   **Controller**: Hanya menangani request/response (tipis).

**Cara Pakai:**
Gunakan artisan command untuk membuat boilerplate sekaligus:

```bash
php artisan make:feature NamaModule
```

---

## 2. Activity Log System

Audit trail otomatis untuk memantau siapa yang mengubah apa dan kapan.

-   **Auto-Tracking**: Tambahkan trait `LogsActivity` pada Model.
-   **Log Manual**: Gunakan `ActivityLogService` di Controller.
-   **Audit UI**: Akses di `/activity-log` untuk melihat riwayat perubahan data (Before vs After).

**Contoh di Model:**

```php
use App\Traits\LogsActivity;

class Product extends Model {
    use LogsActivity;
}
```

---

## 3. File Upload Manager

Manajemen file terpusat dengan dukungan optimasi gambar.

-   **Integrated Storage**: Bisa pindah dari Local ke S3/Cloudinary tanpa ubah kode business logic.
-   **Image Processing**: Auto-resize, crop, dan compress menggunakan Intervention Image.
-   **DB Tracking**: Setiap file yang diupload tercatat di tabel `media`.

**Contoh Penggunaan:**

```php
use App\Services\FileUploadService;

public function store(Request $request, FileUploadService $fileService) {
    $media = $fileService->upload($request->file('avatar'), 'avatars', [
        'width' => 300,
        'height' => 300,
        'crop' => true
    ]);

    $user->update(['avatar_id' => $media->id]);
    // Akses URL: $media->url
}
```

---

## 4. Role & Permission Management

Sistem kontrol akses berbasis peran (RBAC) yang sangat granular.

-   **Granular Permission**: Bisa mengatur izin per menu untuk aksi: `Create`, `Read`, `Update`, `Delete`.
-   **Middleware**: Gunakan `check.permission:menu-slug` di routes.
-   **Blade Directive**: Gunakan `@can('access', ['menu-slug', 'create'])`.

**Contoh di Routes:**

```php
Route::resource('product', ProductController::class)
      ->middleware('check.permission:product.index');
```

---

## 5. Standardized API Response

Standarisasi format JSON response untuk memudahkan integrasi dengan Frontend (Vue/React/Mobile).

**Contoh di Controller:**

```php
use App\Helpers\ResponseHelper;

return ResponseHelper::success($data, 'Berhasil mengambil data');
return ResponseHelper::error('Gagal memproses data', 400);
```

---

## 6. Dynamic Menu System

Menu navigasi di sidebar otomatis muncul berdasarkan hak akses user yang sedang login.

-   Konfigurasi melalui database atau JSON file: `resources/menu/verticalMenu.json`.
-   Otomatis menyembunyikan menu jika user tidak memiliki izin `Read`.

---

## 7. Custom Artisan Generator

Mempercepat pembuatan fitur baru tanpa perlu copy-paste file manual.

```bash
php artisan make:feature Product
```

**Perintah ini akan membuatkan:**

-   `app/Interfaces/Repositories/ProductRepositoryInterface.php`
-   `app/Repositories/ProductRepository.php`
-   `app/Services/ProductService.php`
-   `app/Http/Controllers/ProductController.php`
-   `app/Http/Requests/ProductRequest.php`

---

## 8. API Documentation (Swagger)

Otomatis generate dokumentasi API yang interaktif sehingga memudahkan kolaborasi dengan tim Frontend atau Mobile.

-   **Endpoint**: Akses di `/api/documentation`.
-   **Generator**: Gunakan perintah artisan untuk update dokumentasi setelah menambah tipe @OA annotations.
-   **Sanctum Integration**: Mendukung otentikasi Bearer Token (Sanctum).

**Cara Update Dokumentasi:**

```bash
php artisan l5-swagger:generate
```

**Contoh Annotasi di Controller:**

```php
/**
 * @OA\Get(
 *     path="/api/users",
 *     tags={"Users"},
 *     summary="Get users list",
 *     @OA\Response(response=200, description="OK")
 * )
 */
```

---

## 🛠️ Tech Stack Utama

-   **Laravel 12.x**
-   **L5-Swagger** (OpenAPI Documentation)
-   **Laravel Sanctum** (API Auth)
-   **Bootstrap 5 (Sneat Template)**
-   **Intervention Image v3** (Image Processing)
-   **SweetAlert2 & Toastr** (Alerts)
-   **DataTables** (Table list)
-   **Vite** (Assets Bundling)

---

_Base Laravel - Created by Ooka Pratama_
