# Base Laravel - Service Repository Pattern

Template Laravel dengan Service Repository Pattern untuk pengembangan aplikasi yang terstruktur dan maintainable.

## 📋 Fitur

- **Service Repository Pattern** - Pemisahan business logic, data access, dan presentation
- **Base Classes** - `BaseRepository`, `BaseService`, `BaseRequest` yang reusable
- **Response Helper** - Standarisasi response API
- **Admin Template** - Template Sneat Bootstrap 5

## 📁 Struktur Folder

```
app/
├── Helpers/
│   ├── ResponseHelper.php      # Standarisasi JSON response
│   └── ViewConfigHelper.php    # Konfigurasi view/template
├── Http/
│   ├── Controllers/
│   │   └── UserController.php  # Contoh controller
│   └── Requests/
│       ├── BaseRequest.php     # Base form request
│       └── UserRequest.php     # Contoh request validation
├── Interfaces/
│   └── Repositories/
│       ├── BaseRepositoryInterface.php
│       └── UserRepositoryInterface.php
├── Models/
│   └── User.php
├── Repositories/
│   ├── BaseRepository.php      # Implementasi CRUD dasar
│   └── UserRepository.php      # Contoh repository
├── Services/
│   ├── BaseService.php         # Wrapper CRUD methods
│   └── UserService.php         # Contoh service dengan business logic
└── Providers/
    └── AppServiceProvider.php  # Binding interface ke implementasi
```

## 🚀 Instalasi

```bash
# Clone repository
git clone <repo-url>
cd base-laravel

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Migrate database
php artisan migrate

# Build assets
npm run build

# Run development server
composer dev
```

## 💡 Cara Penggunaan

### 1. Membuat Feature Baru

**Step 1: Buat Model & Migration**
```bash
php artisan make:model Product -m
```

**Step 2: Buat Interface Repository**
```php
// app/Interfaces/Repositories/ProductRepositoryInterface.php
interface ProductRepositoryInterface extends BaseRepositoryInterface
{
    // Tambah method spesifik jika diperlukan
}
```

**Step 3: Buat Repository**
```php
// app/Repositories/ProductRepository.php
class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
}
```

**Step 4: Buat Service**
```php
// app/Services/ProductService.php
class ProductService extends BaseService
{
    public function __construct(ProductRepository $repository)
    {
        parent::__construct($repository);
    }
}
```

**Step 5: Buat Controller**
```php
// app/Http/Controllers/ProductController.php
class ProductController extends Controller
{
    public function __construct(protected ProductService $service) {}
    
    // CRUD methods...
}
```

**Step 6: Daftarkan di AppServiceProvider**
```php
$this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
```

### 2. Response API

Gunakan `ResponseHelper` untuk response yang konsisten:

```php
use App\Helpers\ResponseHelper;

// Success response
return ResponseHelper::success($data, 'Data retrieved successfully');

// Error response
return ResponseHelper::error('Something went wrong', 400);
```

### 3. Form Request Validation

Extend `BaseRequest` untuk validasi dengan error format standar:

```php
class ProductRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ];
    }
}
```

## 🧪 Testing

```bash
# Run all tests
php artisan test

# Run specific test
php artisan test --filter=UserPostTest
```

## 📝 API Endpoints (User)

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/user` | List all users |
| GET | `/user/{id}` | Get user by ID |
| POST | `/user` | Create new user |
| PUT | `/user/{id}` | Update user |
| DELETE | `/user/{id}` | Delete user |

## 🛠 Scripts

```bash
composer setup    # Full setup termasuk npm install & migrate
composer dev      # Jalankan server, queue, pail, dan vite
composer test     # Jalankan tests
```

## 📄 License

MIT License
