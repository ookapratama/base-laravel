# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.3.0] - 2026-02-05

### Added

-   **User Avatar**: Implemented support for uploading and displaying user avatars across profile and management views.
-   **System Health**: Added system health and maintenance status endpoints (`SystemController`).
-   **Enhanced RBAC**: Added new 'Visitor' role for restricted access.
-   **Audit Documentation**: Completed comprehensive technical audit for PHP 7.4 compatibility.

### Changed

-   **Framework Upgrade**: Upgraded to Laravel 12.x and PHP 8.2+ compatibility.
-   **Activity Log**: Refined log display and statistics.

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
