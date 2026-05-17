# 2.1 Struktur Project PHP

## Tujuan Belajar

Di materi ini kamu akan belajar:

- Apa itu htdocs
- Kenapa project PHP harus disimpan di situ
- Apa itu localhost
- Cara kerja PHP di browser
- Kenapa `index.php` otomatis terbuka
- Cara menjalankan project PHP pertama

---

# 1. Apa itu htdocs?

Kalau kamu install XAMPP, biasanya ada folder:

```text
C:\xampp\htdocs
```

Folder ini adalah tempat project PHP dijalankan.

Anggap saja:

```text
htdocs = rumah project PHP
```

Semua project web PHP harus masuk ke sini supaya bisa diakses browser lewat localhost.

Contoh:

```text
C:\xampp\htdocs\belajar-php-dan-laravel
```

Kalau project ditaruh di luar `htdocs`:

```text
Desktop/project-php
```

biasanya browser tidak bisa mengakses project itu.

Kenapa?

Karena Apache hanya membaca folder tertentu.

Dan folder utamanya adalah:

```text
htdocs
```

---

# 2. Apa itu XAMPP?

XAMPP adalah paket software untuk menjalankan web secara lokal.

Di dalamnya ada beberapa tools:

- Apache → server web
- PHP → bahasa backend
- MySQL → database
- phpMyAdmin → GUI database

Untuk sekarang kita fokus ke:

```text
Apache + PHP
```

Karena database belum dipakai.

---

# 3. Apa itu localhost?

`localhost` artinya:

```text
komputer sendiri
```

Secara teknis:

```text
127.0.0.1
```

Jadi:

```text
http://localhost
```

sama dengan:

```text
http://127.0.0.1
```

Artinya browser sedang berbicara dengan komputer sendiri.

Bukan internet.

Contoh:

```text
http://localhost/belajar-php-dan-laravel
```

Artinya:

> "komputer, buka folder belajar-php-dan-laravel"

---

# 4. Cara Kerja PHP di Browser

Misalnya kamu buka:

```text
http://localhost/belajar-php-dan-laravel
```

Yang terjadi:

```text
Browser
    ↓
Apache menerima request
    ↓
PHP dijalankan
    ↓
hasil HTML dikirim
    ↓
Browser menampilkan hasil
```

Penting:

Browser **tidak menjalankan PHP**.

Browser cuma menerima hasil akhirnya.

Misalnya:

```php
<?php

$nama = "Elang";

echo "<h1>Halo $nama</h1>";
```

Yang diterima browser sebenarnya:

```html
<h1>Halo Elang</h1>
```

PHP sudah diproses dulu di server.

---

# 5. Kenapa index.php Otomatis Terbuka?

Misalnya folder:

```text
2.1-struktur-project-php/
└── index.php
```

Kamu buka:

```text
localhost/belajar-php-dan-laravel/2-php-web-dasar/2.1-struktur-project-php
```

Tetap bisa jalan.

Padahal tidak menulis:

```text
/index.php
```

Kenapa?

Karena server otomatis mencari:

```text
index.php
index.html
```

Makanya file awal project biasanya dinamakan:

```text
index.php
```

---

# Praktik 1 - Web PHP Pertama

Buka file:

```text
index.php
```

Isi:

```php
<?php

echo "<h1>Halo Elang</h1>";
echo "<p>Selamat datang di PHP Web</p>";
```

Lalu jalankan:

```text
http://localhost/belajar-php-dan-laravel/2-php-web-dasar/2.1-struktur-project-php
```

Kalau berhasil akan muncul:

```text
Halo Elang
Selamat datang di PHP Web
```

---

# Praktik 2 - Variabel di Browser

Ganti isi file:

```php
<?php

$nama = "Elang";
$umur = 20;
$hobi = "Ngoding";

echo "<h1>Halo $nama</h1>";
echo "<p>Umur: $umur</p>";
echo "<p>Hobi: $hobi</p>";
```

Sekarang coba ubah isi variabelnya.

Misalnya:

```php
$nama = "Capybara Raja";
```

Lihat perubahan output.

Eksperimen penting.

Karena coding itu skill praktik, bukan hafalan.