# Refactor Backlog

Known tech debt in this base, recorded during the initial cleanup pass. The HIGH-severity bugs and the `make:feature` generator have already been fixed; the items below are the remaining MEDIUM/LOW work, deferred so feature development can continue.

## Medium

- **`SettingController::update` has no upload validation.** Logo/favicon are accepted via `$request->hasFile()` with no mime/size rules — a `.svg` or arbitrary file passes (favicon path stores raw bytes). Add a `SettingRequest` FormRequest with explicit `mimes`/`max` rules.
- **Inconsistent avatar validation rules.** `UserRequest` uses `nullable|image|max:2048`; `ProfileRequest` uses `nullable|image|mimes:jpeg,png,jpg,gif|max:2048`. Standardize (ideally a shared rule constant/trait).
- **Duplicated `failedValidation`.** `UserRequest` and `ProfileRequest` copy the identical JSON-vs-web branching override. `BaseRequest` always returns JSON 422, so `RoleRequest`/`MenuRequest`/`ProductsRequest` return raw JSON on web-form submits — a real UX bug. Move the web/JSON-aware `failedValidation` into `BaseRequest` and delete the copies.
- **Inline validation instead of FormRequests.** `AuthController::login/register`, `ProfileController::updatePassword`, and `ProductsController::importExcel` validate inline. Route them through FormRequests for consistency.
- **No `PermissionService`.** `PermissionController::update` has ~50 lines of permission-mapping + sync + activity-logging duplicated across its two branches. Extract to a `PermissionService` (every other domain has one).
- **Layer violation in `ProductsController::destroy`.** It queries `\App\Models\Media::where('path', ...)` directly from the controller, bypassing the service/repository layers. Move media cleanup behind a service.
- **Hardcoded branding in `AppServiceProvider::boot()`.** `templateAuthor`, `templateDomain = 'localhost'`, the Pixinvent `documentation` URL, and `templateVersion = '1.0.0'` are hardcoded. Move to `config/variables.php` / env.
- **`check.permission` silently defaults to `read`.** Unmapped route-name suffixes fall through to the `read` action — any new non-CRUD route is treated as read-only permission by default. Consider failing closed or requiring an explicit action.

## Low

- **Dead code.** `SettingController::index` assigns `$settings = SettingService::class;` and never uses it — delete.
- **Repeated avatar-URL expression.** `$x->avatar ? asset('storage/'.$x->avatar) : asset('assets/img/avatars/1.png')` appears in 6+ places. Add a `User::getAvatarUrlAttribute()` accessor or an `<x-avatar>` component (note `Media::getUrlAttribute()` already exists).
- **`Products` model is plural.** Laravel convention is singular `Product`; the plural propagates through `ProductsService/Repository/Request`. Cosmetic, but the base sets the example new code copies.
- **`importExcel` leaks raw exception messages** to the UI (`$e->getMessage()`). Log it, show a generic message.
- **Leftover debug.** `console.log(error)` in `resources/js/laravel-user-management.js` (~line 393).
- **Commented-out stubs.** `prepareForValidation` body in `BaseRequest`; `defaultLanguage` config in `ViewConfigHelper`.
- **Generator stub still assumes a single `name` column.** `make:feature` now marks this with TODO comments, but full DB-column introspection (generating views/migration from actual columns) is not implemented. Optional future enhancement.
- **CLI emoji in `make:feature` output** (✅💡📌) can mojibake on legacy Windows `cmd`. Swap for plain `[OK]`/`[INFO]` tags if that matters.
