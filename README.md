## Test Case: Full Stack Engineer

Disini saya membuat Aplikasi POS (Point Of Sales) Mini menggunakan framework Laravel.

![Dashboard](/../dev/screenshot/dashboard.png?raw=true "Dashboard")

### Fitur Utama
- Master Data (Kategori, Produk, Pelanggan, Suplier, User)
- Transaksi (Pembelian, Penjualan)
- Laporan (Pembelian, Penjualan)

### Instalasi

Sebelum melakukan instalasi pastikan sudah terpasang `composer` dan `php`.

```php
// Setup library yang dibutuhkan
$ composer install

// Setup Database
$ php artisan migrate --seed

// Menjalankan Aplikasi
$ php artisan serve
```

### Akses Login

| Email                      | Password | Role   |
|----------------------------|----------|--------|
| damasamirulkarim@gmail.com | rahasia  | user   |
| admin@kodedasar.com        | rahasia  | admin  |

### Screenshot

Berikut merupakan sedikit gambaran aplikasi pos mini yang saya buat.

Halaman Daftar Produk:

![Daftar Produk](/../dev/screenshot/daftar-produk.png?raw=true "Daftar Produk")

Halaman Login:

![Login](/../dev/screenshot/login.png?raw=true "Login")

Master Data:

![Master](/../dev/screenshot/tabel-produk.png?raw=true "Master")
