# 2.1 Struktur Project PHP

## Tujuan Pembelajaran

Di materi ini kita akan belajar:

- Apa itu `htdocs`# 2.1 Struktur Project PHP

## Tujuan Pembelajaran

Di materi ini kita akan belajar:

- Apa itu `htdocs`
- Kenapa project PHP harus disimpan di dalam `htdocs`
- Apa itu `localhost`
- Cara kerja PHP di browser
- Kenapa `index.php` otomatis terbuka
- Struktur project PHP sederhana
- Menjalankan project PHP pertama

---

# Apa Itu PHP Web?

Sebelumnya kita belajar PHP menggunakan terminal (`STDIN`, `fgets()`, dll).

Contoh:

```php
echo "Halo Dunia";
```

Program dijalankan lewat terminal.

Sekarang kita masuk ke **PHP berbasis web**.

Artinya program dijalankan lewat browser.

Contoh:

```text
Browser → Server → PHP → HTML → Browser
```

PHP diproses di server, lalu hasil akhirnya dikirim ke browser.

Browser **tidak menjalankan PHP**, browser hanya menerima hasil akhirnya.

---

# Struktur Folder Project

Buat struktur folder seperti ini:

```text
belajar-php-dan-laravel/
└── 2-php-web-dasar/
    └── 2.1-struktur-project-php/
        └── index.php
```

Jika menggunakan command `tree`:

```text
.
├── 1-dasar-php
└── 2-php-web-dasar
    └── 2.1-struktur-project-php
        └── index.php
```

---

# Apa Itu htdocs?

Lokasi default:

```text
C:\xampp\htdocs
```

Folder `htdocs` adalah tempat semua project web PHP disimpan.

Anggap saja:

```text
htdocs = rumah project web
```

Kalau file PHP tidak disimpan di dalam `htdocs`, browser biasanya tidak bisa mengakses project tersebut.

Contoh salah:

```text
Desktop/project-php/index.php
```

Lalu dibuka:

```text
localhost/project-php
```

Hasilnya tidak akan berjalan.

Kenapa?

Karena server Apache hanya membaca folder tertentu, yaitu:

```text
htdocs
```

---

# Apa Itu XAMPP?

XAMPP adalah software yang berisi beberapa tools untuk development web.

Komponen penting:

- Apache → Web Server
- PHP → Bahasa backend
- MySQL → Database
- phpMyAdmin → GUI database

Untuk materi sekarang kita fokus ke:

```text
Apache + PHP
```

---

# Cara Kerja Request Web

Misalnya kita membuka:

```text
http://localhost/belajar-php-dan-laravel
```

Yang terjadi:

1. Browser meminta halaman
2. Apache menerima request
3. Apache mencari file PHP
4. PHP diproses
5. Hasil dikirim ke browser

Diagram sederhana:

```text
Chrome / Browser
       ↓
Request dikirim
       ↓
Apache (XAMPP)
       ↓
PHP diproses
       ↓
HTML dihasilkan
       ↓
Browser menampilkan hasil
```

---

# Apa Itu localhost?

`localhost` artinya:

```text
komputer sendiri
```

Secara teknis:

```text
127.0.0.1
```

Jadi ini sama:

```text
http://localhost
```

dan:

```text
http://127.0.0.1
```

Keduanya mengarah ke komputer kita sendiri.

---

# Kenapa index.php Otomatis Terbuka?

Misalnya struktur folder:

```text
2.1-struktur-project-php/
└── index.php
```

Lalu membuka URL:

```text
localhost/belajar-php-dan-laravel/2-php-web-dasar/2.1-struktur-project-php
```

Tetap berjalan walaupun tanpa:

```text
/index.php
```

Kenapa?

Karena server otomatis mencari file default.

Biasanya:

```text
index.php
index.html
```

Makanya kebanyakan project menggunakan nama:

```text
index.php
```

---

# Praktik 1 - File PHP Web Pertama

Buat file:

```text
2.1-struktur-project-php/
└── index.php
```

Isi file:

```php
<?php

echo "<h1>Halo Elang</h1>";
echo "<p>Ini project PHP web pertama gua</p>";
```

---

# Menjalankan Project

## 1. Jalankan XAMPP

Buka XAMPP lalu tekan:

```text
Start Apache
```

Status harus hijau.

---

## 2. Jalankan di Browser

Buka:

```text
http://localhost/belajar-php-dan-laravel/2-php-web-dasar/2.1-struktur-project-php
```

Output:

```text
Halo Elang
Ini project PHP web pertama gua
```

---

# Praktik 2 - Menggunakan Variabel di Web

Ganti isi `index.php` menjadi:

```php
<?php

$nama = "Elang";
$umur = 20;
$role = "Junior Fullstack Developer";

echo "<h1>Halo $nama</h1>";
echo "<p>Umur: $umur</p>";
echo "<p>Role: $role</p>";
```

Output:

```text
Halo Elang
Umur: 20
Role: Junior Fullstack Developer
```

---

# Praktik 3 - Menggabungkan HTML dan PHP

Isi file:

```php
<?php

$nama = "Elang";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP</title>
</head>
<body>

    <h1>
        Halo <?= $nama ?>
    </h1>

</body>
</html>
```

---

# Apa Itu <?= ?>

Ini adalah shortcut dari:

```php
<?php echo ?>
```

Contoh:

```php
<?= $nama ?>
```

Sama dengan:

```php
<?php echo $nama; ?>
```

Ini sering dipakai nanti di Laravel.

---

# Kesimpulan

Pada materi ini kita belajar:

- Struktur project PHP
- Folder `htdocs`
- Cara kerja request web
- `localhost`
- `index.php`
- Menjalankan PHP di browser
- Variabel di halaman web
- Kombinasi HTML + PHP

---

# Mini Tugas

Edit praktik 3 agar menampilkan:

- Nama
- Umur
- Hobi
- Cita-cita

Menggunakan:

- Variabel PHP
- HTML
- `<?= ?>`

Contoh output:

```text
Nama: Elang
Umur: 20
Hobi: Ngoding
Cita-cita: Fullstack Developer
```
- Kenapa project PHP harus disimpan di dalam `htdocs`
- Apa itu `localhost`
- Cara kerja PHP di browser
- Kenapa `index.php` otomatis terbuka
- Struktur project PHP sederhana
- Menjalankan project PHP pertama

---

# Apa Itu PHP Web?

Sebelumnya kita belajar PHP menggunakan terminal (`STDIN`, `fgets()`, dll).

Contoh:

```php
echo "Halo Dunia";
```

Program dijalankan lewat terminal.

Sekarang kita masuk ke **PHP berbasis web**.

Artinya program dijalankan lewat browser.

Contoh:

```text
Browser → Server → PHP → HTML → Browser
```

PHP diproses di server, lalu hasil akhirnya dikirim ke browser.

Browser **tidak menjalankan PHP**, browser hanya menerima hasil akhirnya.

---

# Struktur Folder Project

Buat struktur folder seperti ini:

```text
belajar-php-dan-laravel/
└── 2-php-web-dasar/
    └── 2.1-struktur-project-php/
        └── index.php
```

Jika menggunakan command `tree`:

```text
.
├── 1-dasar-php
└── 2-php-web-dasar
    └── 2.1-struktur-project-php
        └── index.php
```

---

# Apa Itu htdocs?

Lokasi default:

```text
C:\xampp\htdocs
```

Folder `htdocs` adalah tempat semua project web PHP disimpan.

Anggap saja:

```text
htdocs = rumah project web
```

Kalau file PHP tidak disimpan di dalam `htdocs`, browser biasanya tidak bisa mengakses project tersebut.

Contoh salah:

```text
Desktop/project-php/index.php
```

Lalu dibuka:

```text
localhost/project-php
```

Hasilnya tidak akan berjalan.

Kenapa?

Karena server Apache hanya membaca folder tertentu, yaitu:

```text
htdocs
```

---

# Apa Itu XAMPP?

XAMPP adalah software yang berisi beberapa tools untuk development web.

Komponen penting:

- Apache → Web Server
- PHP → Bahasa backend
- MySQL → Database
- phpMyAdmin → GUI database

Untuk materi sekarang kita fokus ke:

```text
Apache + PHP
```

---

# Cara Kerja Request Web

Misalnya kita membuka:

```text
http://localhost/belajar-php-dan-laravel
```

Yang terjadi:

1. Browser meminta halaman
2. Apache menerima request
3. Apache mencari file PHP
4. PHP diproses
5. Hasil dikirim ke browser

Diagram sederhana:

```text
Chrome / Browser
       ↓
Request dikirim
       ↓
Apache (XAMPP)
       ↓
PHP diproses
       ↓
HTML dihasilkan
       ↓
Browser menampilkan hasil
```

---

# Apa Itu localhost?

`localhost` artinya:

```text
komputer sendiri
```

Secara teknis:

```text
127.0.0.1
```

Jadi ini sama:

```text
http://localhost
```

dan:

```text
http://127.0.0.1
```

Keduanya mengarah ke komputer kita sendiri.

---

# Kenapa index.php Otomatis Terbuka?

Misalnya struktur folder:

```text
2.1-struktur-project-php/
└── index.php
```

Lalu membuka URL:

```text
localhost/belajar-php-dan-laravel/2-php-web-dasar/2.1-struktur-project-php
```

Tetap berjalan walaupun tanpa:

```text
/index.php
```

Kenapa?

Karena server otomatis mencari file default.

Biasanya:

```text
index.php
index.html
```

Makanya kebanyakan project menggunakan nama:

```text
index.php
```

---

# Praktik 1 - File PHP Web Pertama

Buat file:

```text
2.1-struktur-project-php/
└── index.php
```

Isi file:

```php
<?php

echo "<h1>Halo Elang</h1>";
echo "<p>Ini project PHP web pertama gua</p>";
```

---

# Menjalankan Project

## 1. Jalankan XAMPP

Buka XAMPP lalu tekan:

```text
Start Apache
```

Status harus hijau.

---

## 2. Jalankan di Browser

Buka:

```text
http://localhost/belajar-php-dan-laravel/2-php-web-dasar/2.1-struktur-project-php
```

Output:

```text
Halo Elang
Ini project PHP web pertama gua
```

---

# Praktik 2 - Menggunakan Variabel di Web

Ganti isi `index.php` menjadi:

```php
<?php

$nama = "Elang";
$umur = 20;
$role = "Junior Fullstack Developer";

echo "<h1>Halo $nama</h1>";
echo "<p>Umur: $umur</p>";
echo "<p>Role: $role</p>";
```

Output:

```text
Halo Elang
Umur: 20
Role: Junior Fullstack Developer
```

---

# Praktik 3 - Menggabungkan HTML dan PHP

Isi file:

```php
<?php

$nama = "Elang";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP</title>
</head>
<body>

    <h1>
        Halo <?= $nama ?>
    </h1>

</body>
</html>
```

---

# Apa Itu <?= ?>

Ini adalah shortcut dari:

```php
<?php echo ?>
```

Contoh:

```php
<?= $nama ?>
```

Sama dengan:

```php
<?php echo $nama; ?>
```

Ini sering dipakai nanti di Laravel.

---

# Kesimpulan

Pada materi ini kita belajar:

- Struktur project PHP
- Folder `htdocs`
- Cara kerja request web
- `localhost`
- `index.php`
- Menjalankan PHP di browser
- Variabel di halaman web
- Kombinasi HTML + PHP

---

# Mini Tugas

Edit praktik 3 agar menampilkan:

- Nama
- Umur
- Hobi
- Cita-cita

Menggunakan:

- Variabel PHP
- HTML
- `<?= ?>`

Contoh output:

```text
Nama: Elang
Umur: 20
Hobi: Ngoding
Cita-cita: Fullstack Developer
```