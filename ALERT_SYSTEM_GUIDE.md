# Panduan Sistem Notifikasi & Alert Global

Sistem ini menyediakan cara standar untuk menampilkan notifikasi menggunakan **SweetAlert2** dan **Toastr**. Sistem ini menangani respon dari interaksi Server-Side (Redirect/Flash Message) maupun Client-Side (AJAX/Axios) secara otomatis.

---

## 1. Penggunaan di Controller (PHP)

### A. Untuk Request Standar (Form Submit & Redirect)
Gunakan `with()` standar Laravel. Sistem akan mendeteksi session `success` atau `error` dan menampilkan alert yang sesuai secara otomatis.

```php
// Sukses (Menampilkan SweetAlert Success)
return redirect()->route('users.index')->with('success', 'Data pengguna berhasil disimpan.');

// Gagal (Menampilkan SweetAlert Error)
return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');

// Validasi
// Laravel otomatis mengirim errors ke session. Sistem akan menangkapnya dan menampilkan detail error.
$request->validate([...]);
```

### B. Untuk Request AJAX / API
Gunakan `App\Helpers\ResponseHelper` untuk mengembalikan format JSON yang standar. Frontend akan otomatis parsing response ini.

```php
use App\Helpers\ResponseHelper;

// Sukses
return ResponseHelper::success($data, 'Berhasil menghapus data');

// Gagal (Custom Error)
return ResponseHelper::error('Gagal memproses data', 500);

// Gagal (Validasi Manual - jarang dipakai jika pakai FormRequest)
return ResponseHelper::validationError($errors);
```

---

## 2. Penggunaan di Frontend (Javascript)

Class utility `AlertHandler` sudah didaftarkan secara global sebagai `window.AlertHandler`.

### A. Menangani Response Axios (AJAX)
Cukup lempar response dari Axios ke `handle()`. Helper ini akan otomatis menentukan apakah harus menampilkan sukses atau error (termasuk validasi).

```javascript
axios.post('/some-url', payload)
    .then(response => {
        // Otomatis menampilkan SweetAlert Sukses
        window.AlertHandler.handle(response);
        
        // Opsional: Reload halaman jika sukses
        if (response.data.success) {
            location.reload();
        }
    })
    .catch(error => {
        // Otomatis menampilkan SweetAlert Error (termasuk list validasi jika ada)
        window.AlertHandler.handle(error.response);
    });
```

### B. Konfirmasi Delete (atau Aksi Destruktif)
Gunakan method `confirm()` untuk menampilkan dialog konfirmasi standar.

```javascript
window.AlertHandler.confirm(
    'Apakah Anda yakin?',           // Judul
    'Data yang dihapus tidak bisa dikembalikan!', // Pesan
    'Ya, Hapus!',                   // Teks Tombol Konfirmasi
    () => {                         // Callback jika dikonfirmasi
        // Lakukan aksi delete di sini (misal panggil AJAX)
        axios.delete(url)...
    }
);
```

### C. Menampilkan Alert Manual
Anda bisa memanggil alert kapan saja tanpa request server.

```javascript
// Tampilkan SweetAlert Success
window.AlertHandler.showSuccess('Operasi berhasil!');

// Tampilkan Toastr Success (Notifikasi kecil di pojok)
// Parameter kedua 'true' mengaktifkan mode Toast
window.AlertHandler.showSuccess('Data disimpan', true);

// Tampilkan Error
window.AlertHandler.showError('Terjadi kesalahan fatal');
```

---

## 3. Struktur Standar

### Response Helper (`App\Helpers\ResponseHelper.php`)
Pastikan semua respon JSON API menggunakan helper ini agar formatnya konsisten:
```json
{
    "success": true,
    "message": "Pesan sukses",
    "data": { ... }
}
```

### Alert Handler (`resources/js/utils/alert-handler.js`)
File ini mengatur konfigurasi dasar SweetAlert dan Toastr. Jika ingin mengubah warna tombol, durasi animasi, atau posisi toast, edit file ini.
