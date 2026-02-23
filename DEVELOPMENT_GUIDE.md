# 🛠 Feature Development Guide

This guide explains the detailed steps for adding new features to this **Base Laravel Template**, following the implemented _Service-Repository Pattern_ architecture.

---

## 🚀 1. Using the Generator Command

We have provided a custom command to speed up the creation of new feature boilerplates:

```bash
php artisan make:feature FeatureName

# Atau dengan sub-folder (contoh: Admin/Product)
php artisan make:feature SubFolder/FeatureName
```

**Output of this command:**

-   `app/Models/FeatureName.php`
-   `database/migrations/xxxx_create_feature_name_table.php`
-   `app/Interfaces/Repositories/FeatureNameRepositoryInterface.php`
-   `app/Repositories/FeatureNameRepository.php` (Auto-binding in AppServiceProvider)
-   `app/Services/FeatureNameService.php`
-   `app/Http/Controllers/FeatureNameController.php`
-   `app/Http/Requests/FeatureNameRequest.php`
-   `resources/views/pages/feature-name/index.blade.php` (List table with AJAX delete)
-   `resources/views/pages/feature-name/create.blade.php` (Creation form)
-   `resources/views/pages/feature-name/edit.blade.php` (Editing form)
-   `resources/views/pages/feature-name/show.blade.php` (Detail view)

---

## 🗄 2. Database & Model

### Step A: Migration

Open the newly created migration file and define your table fields:

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

Then run: `php artisan migrate`

### Step B: Model Setup

Add the **`LogsActivity`** trait for automatic auditing and define `$fillable` & `$casts`. This is crucial for maintaining the system's Audit Trail.

```php
use App\Traits\LogsActivity;

class Product extends Model {
    use LogsActivity; // Enable automatic Audit Trail

    protected $fillable = ['name', 'price', 'is_active'];
    protected $casts = ['is_active' => 'boolean'];
}
```

---

## 📂 3. Logic Implementation (Service-Repository)

### Repository

Use this for database queries. If you only need standard CRUD, you don't need to change anything as it already extends `BaseRepository`.

### Service

This is where you put your Business Logic. Avoid putting heavy logic in the Controller.

```php
// Example: processing data before saving
public function create(array $data) {
    $data['slug'] = Str::slug($data['name']);
    return parent::create($data);
}
```

---

## 🌐 4. Routing & Controller

### Update Route

Register the resource in `routes/web.php` (or `api.php`):

```php
Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductsController::class)
         ->middleware('check.permission:products.index');
});
```

### Controller Implementation

Accept the request, call the service, and direct the view:

```php
public function store(ProductsRequest $request) {
    $data = $request->validated();
    $this->service->create($data);

    return redirect()->route('products.index')
        ->with('success', 'Product added successfully!');
}
```

---

## 🎨 5. Frontend & UI Tools

### Notifications (SweetAlert2 & Toastr)

The system already has a global `AlertHandler`.

**A. Success (Toastr):**
Automatically appears if you send `->with('success', '...')` from the controller.

**B. Delete Confirmation (SweetAlert2):**
Use the `.delete-record` selector in your view:

```javascript
$(".delete-record").on("click", function () {
    window.AlertHandler.confirm(
        "Delete?",
        "Are you sure?",
        "Yes, Delete!",
        () => {
            // Execute AJAX delete here
        },
    );
});
```

### File Upload

Use `FileUploadService` in the Controller:

```php
if ($request->hasFile('cover')) {
    $media = $this->fileUploadService->upload($request->file('cover'), 'target-folder');
    $data['cover'] = $media->path;
}
```

---

## ☰ 6. Sidebar Menu Integration

To make the menu appear in the sidebar with the permission system:

1. Open `database/seeders/RoleAndMenuSeeder.php`.
2. Add the menu array to the `$menus` variable:
    ```php
    ['name' => 'Product Catalog', 'slug' => 'products.index', 'path' => '/products', 'icon' => 'ri-shopping-bag-line', 'order_no' => 5],
    ```
3. Run: `php artisan db:seed --class=RoleAndMenuSeeder`.
4. The dashboard will automatically render the menu based on the user's role access.

---

## 📝 7. Versioning & Changelog Standards

This project adheres to [Semantic Versioning](https://semver.org/) and follows the [Keep a Changelog](https://keepachangelog.com/) format.

### A. Semantic Versioning (Major.Minor.Patch)

We use the standard **MAJOR.MINOR.PATCH** versioning strategy:

-   **MAJOR (1.0.0 → 2.0.0)**: Breaking Changes.
    -   _Example_: Significant database structure changes, framework upgrades that break backward compatibility, or removal of core features.
-   **MINOR (1.1.0 → 1.2.0)**: New Features (Backward-compatible).
    -   _Example_: Adding a new module (e.g., Notification Center), adding new API routes, or UI updates that do not break existing functionality.
-   **PATCH (1.0.0 → 1.0.1)**: Bug Fixes.
    -   _Example_: Fixing typos, correcting filter logic, CSS style fixes, or minor security patches.

### B. Changelog Categories

Use the following categories when adding entries to `CHANGELOG.md`:

-   **Added**: For new features.
-   **Changed**: For changes in existing functionality.
-   **Deprecated**: For features that will be removed soon.
-   **Removed**: For features that have been removed.
-   **Fixed**: For bug fixes.
-   **Security**: For security-related updates.

### C. Update Workflow

1.  During development (In Progress), add your feature notes under the `## [Unreleased]` header.
2.  When ready to release/merge to production:
    -   Determine the new version number based on the type of changes (Major/Minor/Patch).
    -   Change the `[Unreleased]` header to `## [Version Number] - YYYY-MM-DD`.

---

## 🧪 8. Testing with Pest PHP

Proyek ini menggunakan **Pest PHP** untuk testing karena lebih modern, terbaca, dan scalable.

### Menjalankan Test

-   Menjalankan semua test: `php artisan test`
-   Menjalankan file tertentu: `php artisan test tests/Feature/NamaTest.php`

### Membuat Test Baru

Gunakan artisan command untuk membuat file test:

```bash
# Membuat Feature Test (Rekomendasi)
php artisan pest:test Feature/NamaFiturTest

# Membuat Unit Test (Untuk logic murni)
php artisan pest:test Unit/NamaLogicTest --unit
```

### Contoh Feature Test (Best Practice)

Gunakan pola **Arrange-Act-Assert** agar test mudah dibaca:

```php
<?php

use App\Models\User;
use App\Models\Role;

test('admin can access product index', function () {
    // 1. Arrange: Siapkan data
    $role = Role::firstOrCreate(['slug' => 'admin'], ['name' => 'Admin']);
    $user = User::factory()->create(['role_id' => $role->id]);

    // 2. Act: Lakukan tindakan
    $response = $this->actingAs($user)->get(route('products.index'));

    // 3. Assert: Verifikasi hasil
    $response->assertStatus(200);
});
```

### Tips Testing Scalable:

1. **Bypass Super Admin**: User dengan role `super-admin` memiliki akses ke semua fitur tanpa perlu setting permission satu per satu di test.
2. **Gunakan `firstOrCreate`**: Untuk data master (Role, Menu), gunakan `firstOrCreate` agar menghindari error _Unique Constraint_ jika data sudah ada.
3. **Database in Memory**: Sistem secara otomatis menggunakan SQLite `:memory:` saat testing agar sangat cepat.
4. **Service Testing**: Jika fitur memiliki logic rumit, buatlah test khusus untuk Service Class tersebut di `tests/Unit`.
