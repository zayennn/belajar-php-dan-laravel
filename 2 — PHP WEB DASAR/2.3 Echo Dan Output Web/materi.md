# 2.3 Echo dan Output Web

## Tujuan Belajar

Di materi ini kamu akan belajar:

- Apa itu `echo`
- Cara menampilkan output di browser
- Perbedaan kutip `" "` dan `' '`
- Apa itu string interpolation
- Apa itu concatenation (`.`)
- Cara menggabungkan text dengan variable
- Cara menampilkan HTML menggunakan PHP

---

# 1. Apa Itu echo?

`echo` dipakai untuk menampilkan output.

Contoh:

```php
<?php

echo "Halo dunia";
```

Output:

```text
Halo dunia
```

Kalau di web:

```php
<?php

echo "<h1>Halo Dunia</h1>";
```

Browser akan membaca:

```html
<h1>Halo Dunia</h1>
```

Jadi:

```text
echo = menampilkan sesuatu
```

---

# 2. Echo Bisa Menampilkan HTML

Contoh:

```php
<?php

echo "<h1>Belajar PHP</h1>";
echo "<p>PHP itu backend</p>";
```

Output browser:

Belajar PHP

PHP itu backend

PHP sebenarnya menghasilkan HTML.

Browser cuma membaca hasil akhirnya.

---

# 3. Double Quote vs Single Quote

Ini penting.

Karena perilakunya beda.

## Double Quote `" "`

Bisa membaca variable.

Contoh:

```php
<?php

$nama = "Elang";

echo "Halo $nama";
```

Output:

```text
Halo Elang
```

Kenapa bisa?

Karena PHP membaca isi variable.

Ini namanya:

```text
string interpolation
```

---

## Single Quote `' '`

Tidak membaca variable.

Contoh:

```php
<?php

$nama = "Elang";

echo 'Halo $nama';
```

Output:

```text
Halo $nama
```

Lah kok ga berubah?

Karena single quote menganggap:

```text
$nama = text biasa
```

Bukan variable.

---

# 4. String Interpolation

Nama kerennya:

```text
string interpolation
```

Bahasa gampangnya:

```text
memasukkan variable ke dalam string
```

Contoh:

```php
<?php

$nama = "Elang";
$umur = 19;

echo "Halo nama saya $nama";
echo "Umur saya $umur tahun";
```

Output:

```text
Halo nama saya Elang
Umur saya 19 tahun
```

---

# 5. Concatenation (`.`)

Kadang kita mau gabung text.

PHP pakai:

```php
.
```

Namanya:

```text
concatenation
```

Contoh:

```php
<?php

$nama = "Elang";

echo "Halo " . $nama;
```

Output:

```text
Halo Elang
```

---

# 6. Mana Lebih Bagus?

Ini:

```php
echo "Halo $nama";
```

atau:

```php
echo "Halo " . $nama;
```

Dua-duanya benar.

Tapi:

Kalau sederhana:

```php
echo "Halo $nama";
```

lebih enak dibaca.

Kalau gabungan banyak data:

```php
echo "Nama: " . $nama . " umur: " . $umur;
```

kadang concatenation dipakai.

---

# 7. Praktik 1 - Echo Dasar

Isi file:

```php
<?php

echo "<h1>Belajar Echo</h1>";
echo "<p>Ini output pertama saya</p>";
```

Jalankan.

---

# 8. Praktik 2 - Variable di Echo

Ganti isi file:

```php
<?php

$nama = "Elang";
$umur = 19;

echo "<h1>Halo $nama</h1>";
echo "<p>Umur saya $umur tahun</p>";
```

Perhatikan:

Variable otomatis terbaca.

Karena memakai:

```text
double quote
```

---

# 9. Praktik 3 - Single Quote vs Double Quote

Coba:

```php
<?php

$nama = "Elang";

echo "<h1>Halo $nama</h1>";

echo '<h1>Halo $nama</h1>';
```

Lihat perbedaannya.

Output pertama:

```text
Halo Elang
```

Output kedua:

```text
Halo $nama
```

Kenapa?

Karena single quote tidak membaca variable.

---

# 10. Praktik 4 - Concatenation

Coba:

```php
<?php

$nama = "Elang";
$umur = 19;

echo "<p>Nama: " . $nama . "</p>";
echo "<p>Umur: " . $umur . "</p>";
```

---

# Ringkasan

Yang dipelajari:

- `echo` = menampilkan output
- HTML bisa ditampilkan lewat PHP
- `" "` membaca variable
- `' '` tidak membaca variable
- interpolation = variable di string
- concatenation = menggabungkan text