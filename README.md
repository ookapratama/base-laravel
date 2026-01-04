# 🚀 Base Laravel - Enterprise Ready Template

Template Laravel modern dengan arsitektur **Service Repository Pattern**, sistem **Audit Trail**, dan **File Management** yang powerful. Dirancang untuk skalabilitas perusahaan dan kemudahan maintenance.

---

## 🌟 Fitur Unggulan

-   🏗️ **Service Repository Pattern** - Arsitektur terstruktur dan testable.
-   🛡️ **Granular Role & Permission** - RBAC (Role Based Access Control) hingga tingkat aksi per menu.
-   🕵️ **Activity Log (Audit Trail)** - Melacak setiap perubahan data otomatis (Before/After).
-   📁 **File Upload Manager** - Upload tersentralisasi dengan auto-resize & optimasi gambar.
-   🎨 **Premium Admin UI** - Menggunakan Sneat Bootstrap 5 Admin Template.
-   🤖 **Custom Code Generator** - Buat modul CRUD lengkap dengan satu perintah.
-   � **API Documentation** - Dokumentasi API interaktif menggunakan Swagger (OpenAPI).
-   �🔔 **Global Alert System** - Terintegrasi dengan SweetAlert2 & Toastr.

---

## 📁 Struktur Proyek & Panduan Detail

Untuk penjelasan mendalam mengenai fitur-fitur di atas, silakan baca dokumentasi khusus berikut:

| Dokumentasi                                           | Deskripsi                                          |
| ----------------------------------------------------- | -------------------------------------------------- |
| 📘 **[FEATURES_GUIDE.md](FEATURES_GUIDE.md)**         | **PANDUAN LENGKAP** semua fitur dan cara pakainya. |
| 🛠 **[DEVELOPMENT_GUIDE.md](DEVELOPMENT_GUIDE.md)**   | **PANDUAN KODING** cara menambah fitur baru.       |
| 🕵️ **[ACTIVITY_LOG_GUIDE.md](ACTIVITY_LOG_GUIDE.md)** | Detail sistem audit trail & monitoring user.       |
| 🔔 **[ALERT_SYSTEM_GUIDE.md](ALERT_SYSTEM_GUIDE.md)** | Cara menggunakan SweetAlert & Toastr global.       |

---

## 🚀 Instalasi Cepat

```bash
# 1. Clone & Install
git clone <repo-url>
cd base-laravel
composer install && npm install

# 2. Setup Environment
cp .env.example .env
php artisan key:generate

# 3. Setup Database & Assets
php artisan migrate:fresh --seed
npm run build

# 4. Run Project
composer dev
```

---

## 💡 Quick Start: Membuat Fitur Baru

Ingin membuat modul baru (misal: Produk)? Cukup jalankan:

```bash
php artisan make:feature Product
```

Untuk langkah detail setelah menjalankan command di atas (Seeder, Route, UI), silakan lihat: **[DEVELOPMENT_GUIDE.md](DEVELOPMENT_GUIDE.md)**.

---

## 📦 Tech Stack

-   **Core**: Laravel 12.x, PHP 8.2+
-   **Frontend**: Bootstrap 5, Vite, jQuery (Sneat Template)
-   **Database**: MySQL / PostgreSQL / SQLite
-   **API Docs**: Swagger (L5-Swagger)
-   **Processing**: Intervention Image v3

---

## 📄 License

MIT License. Free to use for commercial or personal projects.

_Developed with ❤️ by Ooka Pratama_
