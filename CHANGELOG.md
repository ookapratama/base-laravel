# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased] - 2026-01-23

### Added

-   **User Impersonation**: Ability for Super Admin to login as other users for troubleshooting (`ImpersonateService`, `ImpersonateController`).
-   **Seeders**: Added `SettingSeeder` and `ExtraMenuSeeder` for rapid deployment and default configurations.

### Fixed

-   **UI & Filters**: Fixed pagination styling (forced Bootstrap 5) and corrected Activity Log date range filtering logic to cover the full end-day.
-   **Layout**: Adjusted Impersonation Banner `z-index` to prevent overlapping with navbar dropdowns.

## [1.2.0] - 2026-01-20

### Added

-   **Global Settings**: Comprehensive management system for website configuration (Logo, App Name, etc.) with dedicated UI.
-   **User Profile**: Dedicated page for users to manage their profile and password.
-   **Alerts**: Added new "warning" type to the Alert system.

### Changed

-   **Activity Logging**: Refactored logging logic for better maintainability and reliability.
-   **Authorization**: improved redirect logic for admin vs non-admin users and set default application timezone.
-   **UI/UX**: Redesigned Roles & Permissions interface.

### Fixed

-   **Sidebar**: Fixed active menu highlighting issues when navigating sub-menus.

## [1.1.0] - 2026-01-12

### Documentation

-   **Translation**: Translated all documentation (README, Guides) to English.
-   **Sponsorship**: Added sponsorship and license information.

### Removed

-   **Sponsor**: Removed Ko-fi link integration.

## [1.0.0] - 2026-01-04

### Added

-   **Base Template**: Finalized base Laravel template with RBAC (Role-Based Access Control).
-   **Product Management**: Module for managing products with CRUD operations.
-   **API Docs**: Integrated Swagger/OpenAPI for API documentation with Sanctum authentication.
-   **Seeders**: Multi-role seeders and default menu configurations.

### Fixed

-   **Auth**: Refined exception handler to correctly handle unauthenticated redirects for web routes.
-   **Validation**: Updated menu request validation logic.

### Documentation

-   Created step-by-step Development Guide.
-   Updated Creator information and project documentation.
