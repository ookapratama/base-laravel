# 🚀 Base Laravel Feature Guide

This documentation explains the main features available in this template and how to use them to speed up your application development.

---

## 📚 Feature List

1. [Service Repository Pattern](#1-service-repository-pattern)
2. [Activity Log System (Audit Trail)](#2-activity-log-system)
3. [File Upload Manager](#3-file-upload-manager)
4. [Role & Permission Management](#4-role-permission-management)
5. [Standardized API Response](#5-standardized-api-response)
6. [Dynamic Menu System](#6-dynamic-menu-system)
7. [Custom Artisan Generator](#7-custom-artisan-generator)
8. [API Documentation (Swagger)](#8-api-documentation-swagger)
9. [Global Settings Manager](#9-global-settings-manager)
10. [User Profile & Avatar](#10-user-profile-avatar)
11. [Role-Based Dashboards](#11-role-based-dashboards)
12. [User Impersonation](#12-user-impersonation)
13. [System Health & Monitoring](#13-system-health-monitoring)

---

## 1. Service Repository Pattern

Separation of business logic, data access, and presentation layer for cleaner and more testable code.

-   **Repository**: Contains only DB queries (Eloquent).
-   **Service**: Contains business logic and application rules.
-   **Controller**: Handles only request/response (thin controller).

**How to Use:**
Use the artisan command to create the boilerplate all at once:

```bash
php artisan make:feature ModuleName
```

---

## 2. Activity Log System

Automatic audit trail to monitor who changed what and when.

-   **Auto-Tracking**: Add the `LogsActivity` trait to your Model.
-   **Manual Logging**: Use `ActivityLogService` in your Controller.
-   **Audit UI**: Access at `/activity-log` to view data change history (Before vs After).

**Example in Model:**

```php
use App\Traits\LogsActivity;

class Product extends Model {
    use LogsActivity;
}
```

---

## 3. File Upload Manager

Centralized file management with support for image optimization.

-   **Integrated Storage**: Easily switch from Local to S3/Cloudinary without changing business logic code.
-   **Image Processing**: Auto-resize, crop, and compress using Intervention Image.
-   **DB Tracking**: Every uploaded file is recorded in the `media` table.

**Example Usage:**

```php
use App\Services\FileUploadService;

public function store(Request $request, FileUploadService $fileService) {
    $media = $fileService->upload($request->file('avatar'), 'avatars', [
        'width' => 300,
        'height' => 300,
        'crop' => true
    ]);

    $user->update(['avatar_id' => $media->id]);
}
```

---

## 4. Role & Permission Management

A very granular Role-Based Access Control (RBAC) system.

-   **Granular Permission**: Set permissions per menu for actions: `Create`, `Read`, `Update`, `Delete`.
-   **Middleware**: Use `check.permission:menu-slug` in routes.
-   **Blade Directive**: Use `@can('access', ['menu-slug', 'create'])`.

---

## 5. Standardized API Response

Standardized JSON response format to facilitate integration with Frontend (Vue/React/Mobile).

**Example in Controller:**

```php
use App\Helpers\ResponseHelper;

return ResponseHelper::success($data, 'Data retrieved successfully');
return ResponseHelper::error('Failed to process data', 400);
```

---

## 6. Dynamic Menu System

Sidebar navigation menu automatically appears based on the logged-in user's access rights.

-   Automatically hides the menu if the user does not have `Read` permission.
-   Supports infinite nested submenus.

---

## 7. Custom Artisan Generator

Speed up the creation of new features without manual file copying. The `make:feature` command generates all layers of the architecture in seconds.

-   **Logic Layer**: Repository, Service, Controller, and Form Request.
-   **View Layer**: Automatically creates 4 Blade views (`index`, `create`, `edit`, `show`) with ready-to-use table and form templates.
-   **Structure Support**: Supports nested directories/sub-folders (e.g., `Admin/Product`) with automatic namespace adjustment.

```bash
# Basic usage
php artisan make:feature Product

# With subdirectory
php artisan make:feature Admin/Post
```

---

## 8. API Documentation (Swagger)

Automatically generate interactive API documentation to facilitate collaboration.

-   **Endpoint**: Access at `/api/documentation`.
-   **Sanctum Integration**: Supports Bearer Token authentication.

---

## 9. Global Settings Manager

Centralized control for website branding and system behavior.

-   **Branding**: Change App Name, Logo, and Favicon dynamically.
-   **Contact & Socials**: Manage Email, Phone/WA, and social links.
-   **System Flags**: Toggle Maintenance Mode or User Registration.
-   **Performance**: Optimized with caching for extreme speed.

---

## 10. User Profile & Avatar

A self-service portal for users to manage their identity and security.

-   **Personal Info**: Users can update Name and Email.
-   **Avatar Management**: Users can upload profile pictures, which are automatically optimized and resized.
-   **Account Security**: Secure password change mechanism.
-   **Audit Trail**: All profile changes are automatically logged for security monitoring.

---

## 11. Role-Based Dashboards

Optimized experience depending on the user's role.

-   **Admin Dashboard**: Statistical overview and system monitoring.
-   **User Dashboard**: Productivity-focused view with quick access.
-   **Logic**: Managed via `DashboardController` for seamless redirection.

---

## 12. User Impersonation

Allows Super Admins to log in as another user for troubleshooting and support purposes.

-   **Quick Access**: Start impersonation directly from the User Management list.
-   **Visibility**: A clear banner is displayed during impersonation to prevent confusion.
-   **Security**: Restricted solely to Super Admin roles; original admin session is preserved.
-   **Auditing**: Every impersonation start and stop activity is recorded in the activity log.

---

## 13. System Health & Monitoring

Built-in tools to ensure the application is running smoothly.

-   **Health Check**: Endpoint to verify database connectivity, storage permissions, and cache status.
-   **Maintenance Mode**: Toggle maintenance mode with a custom bypass key from the settings menu.

---

## 🛠️ Main Tech Stack

-   **Laravel 12.x**
-   **PHP 8.2+ (Modern Typed Syntax)**
-   **Bootstrap 5 (Sneat Template)**
-   **Intervention Image v3**
-   **SweetAlert2 & Toastr**
-   **DataTables**
-   **Vite**

---

_Base Laravel - Created by Ooka Pratama_
