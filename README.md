# Praktikum PBO Pertemuan 7: Routing, Controller & Blade

Project Laravel sederhana untuk mata kuliah **Pemrograman Berorientasi Objek (TI033015)**. Aplikasi menampilkan daftar buku dan detail buku menggunakan alur **Route → Controller → Blade**.

| | |
|---|---|
| **Nama** | Arief Fajrussobah |
| **NIM** | 20251020010 |

## Fitur

- **Daftar buku** (`/buku`): menampilkan semua buku dalam bentuk daftar link.
- **Detail buku** (`/buku/{id}`): menampilkan ID dan judul buku yang dipilih. Jika ID tidak ditemukan, akan tampil halaman 404.

Data buku masih berupa array contoh di dalam controller (belum memakai database).

## Daftar Route

| Method | URI | Controller | Nama Route |
|---|---|---|---|
| GET | `/buku` | `BukuController@index` | `buku.index` |
| GET | `/buku/{id}` | `BukuController@show` | `buku.show` |

## Struktur File Utama

```
routes/web.php                          → definisi route
app/Http/Controllers/BukuController.php → data buku, method index() dan show()
resources/views/buku/index.blade.php    → halaman daftar buku
resources/views/buku/show.blade.php     → halaman detail buku
```

## Alur Request

1. Browser membuka URL, misalnya `/buku/2`.
2. **Route** mencocokkan URL lalu memanggil `BukuController@show` dengan `$id = 2`.
3. **Controller** mencari buku dengan id 2 dan mengirimkannya ke view `buku.show`.
4. **Blade** menampilkan data buku menjadi HTML, lalu dikirim kembali ke browser.

## Cara Menjalankan

Kebutuhan: PHP, Composer.

```bash
git clone https://github.com/arifvivobook7-pixel/pbo-p7.git
cd pbo-p7
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Buka `http://127.0.0.1:8000/buku` di browser.

Untuk mengecek route yang aktif:

```bash
php artisan route:list --path=buku
```

## Pengujian

- `/buku` → daftar buku tampil.
- Klik judul buku → pindah ke halaman detail.
- `/buku/2` → tampil ID 2 dengan judul "Apa Aja".
- Klik "Kembali ke daftar" → kembali ke `/buku`.
- `/buku/99` → tampil halaman 404.