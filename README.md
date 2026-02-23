# 🚀 Base Laravel - Enterprise Ready Template

A modern Laravel starter template designed with **Service Repository Pattern**, **Audit Trail**, and **Powerful File Management**. Optimized for enterprise scalability and developer productivity.

---

## 🌟 Key Features

-   🏗️ **Service Repository Pattern** - Clean, structured, and testable codebase.
-   🛡️ **Granular Role & Permission** - Robust RBAC (Role Based Access Control) down to per-menu actions (Create, Read, Update, Delete).
-   🕵️ **Activity Log (Audit Trail)** - Automatically track every data change with Before/After snapshots via Trait.
-   ⚙️ **Global Settings & Branding** - Manage App Name, Logo, Favicon, and System settings from the UI.
-   👤 **Personal Profile & Avatar** - Dedicated page for users to manage info, passwords, and profile pictures.
-   📊 **Role-Based Dashboards** - Specific views tailored for Administrators and regular Users.
-   �️‍♂️ **User Impersonation** - Super Admin can login as any user to troubleshoot issues without needing their password.
-   �📁 **File Upload Manager** - Centralized file handling with auto-resize and optimization.
-   🎨 **Premium Admin UI** - Powered by Sneat Bootstrap 5 with Dark/Light mode support.
-   🏥 **System Health Monitoring** - Built-in endpoints to monitor application and database status.
-   🤖 **Custom Code Generator** - Scaffold complete CRUD modules with a single command.
-   📖 **API Documentation** - Interactive Swagger (OpenAPI) docs out of the box.
-   🔔 **Global Alert System** - Pre-configured SweetAlert2 & Toastr integration.

---

## 📁 Documentation Guide

For in-depth explanations of the features and how to use them, please refer to the following guides:

| Guide                                                 | Description                                           |
| ----------------------------------------------------- | ----------------------------------------------------- |
| 📘 **[FEATURES_GUIDE.md](FEATURES_GUIDE.md)**         | **FULL OVERVIEW** of all available features.          |
| 🛠 **[DEVELOPMENT_GUIDE.md](DEVELOPMENT_GUIDE.md)**   | **CODING STANDARDS** and how to add new modules.      |
| 🕵️ **[ACTIVITY_LOG_GUIDE.md](ACTIVITY_LOG_GUIDE.md)** | Detailed audit trail & user monitoring documentation. |
| 🔔 **[ALERT_SYSTEM_GUIDE.md](ALERT_SYSTEM_GUIDE.md)** | How to use the global SweetAlert & Toastr system.     |
| 📊 **[AUDIT_REPORT.md](AUDIT_REPORT.md)**             | Technical Audit & PHP 7.4 Compatibility Analysis.     |

---

## 🚀 Quick Start

### 1. Clone & Install

```bash
git clone https://github.com/ookapratama/base-laravel.git
cd base-laravel
composer install && npm install
```

### 2. Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

### 3. Setup Database & Assets

```bash
php artisan migrate:fresh --seed
npm run build
```

### 4. Run the Project

```bash
# Using the built-in shortcut
composer dev
```

---

## 💡 Pro Tip: Creating a New Feature

Want to create a new module (e.g., Product)? Use our custom generator:

```bash
php artisan make:feature Product
```

This scaffolding includes Repository, Service, Controller, Request, and View folder. See **[DEVELOPMENT_GUIDE.md](DEVELOPMENT_GUIDE.md)** for details.

---

## 📦 Tech Stack

-   **Backend**: Laravel 12.x, PHP 8.2+
-   **Frontend**: Bootstrap 5, Vite, jQuery (Sneat Template)
-   **Database**: MySQL / PostgreSQL / SQLite
-   **API Docs**: Swagger (L5-Swagger)
-   **System**: PHP 8.2+ Type Safety & Modern Features

---

## 💖 Support & Sponsoring

If you find this project useful, please consider supporting its development. Your support helps keep the project active and allows me to create more open-source tools.

-   **GitHub Sponsors**: [Sponsor @ookapratama](https://github.com/sponsors/ookapratama)
-   **Buy Me a Coffee**: [buymeacoffee.com/ookapratama](https://www.buymeacoffee.com/ookapratama)

For Indonesian supporters:

-   **Trakteer**: [trakteer.id/ookapratama](https://trakteer.id/ookapratama)

---

## 📄 License

This project is open-sourced software licensed under the [MIT license](LICENSE).

_Developed with ❤️ by [Ooka Pratama](https://github.com/ookapratama)_
