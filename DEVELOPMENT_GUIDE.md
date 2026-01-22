# 🛠 Feature Development Guide

This guide explains the detailed steps for adding new features to this **Base Laravel Template**, following the implemented _Service-Repository Pattern_ architecture.

---

## 🚀 1. Using the Generator Command

We have provided a custom command to speed up the creation of new feature boilerplates:

```bash
php artisan make:feature FeatureName
```

**Output of this command:**

-   `app/Models/FeatureName.php`
-   `database/migrations/xxxx_create_feature_name_table.php`
-   `app/Interfaces/Repositories/FeatureNameRepositoryInterface.php`
-   `app/Repositories/FeatureNameRepository.php` (Auto-binding in AppServiceProvider)
-   `app/Services/FeatureNameService.php`
-   `app/Http/Controllers/FeatureNameController.php`
-   `app/Http/Requests/FeatureNameRequest.php`
-   `resources/views/pages/feature-name/` (Empty view folder)

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

## ✅ Final Checklist

-   [ ] `make:feature` command executed.
-   [ ] Migration defined & migrated.
-   [ ] Model uses `LogsActivity`.
-   [ ] Route registered & wrapped in `check.permission` middleware.
-   [ ] Menu added in `RoleAndMenuSeeder`.
-   [ ] UI uses Master Layout & AlertHandler.
