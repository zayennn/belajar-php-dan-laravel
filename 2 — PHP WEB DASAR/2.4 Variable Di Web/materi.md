# 2.4 Variable di Web

## Tujuan Belajar

Di materi ini kamu akan belajar:

- Apa itu variable di web
- Cara memakai ulang variable
- Cara mengganti isi variable
- Operasi variable
- Menggabungkan variable dengan text
- Menampilkan data dynamic ke browser

---

# 1. Apa Itu Variable di Web?

Variable di web sebenarnya sama seperti PHP biasa.

Bedanya:

Sekarang hasilnya ditampilkan ke browser.

Contoh:

```php
<?php

$nama = "Elang";

echo $nama;
```

Browser akan menampilkan:

```text
Elang
```

Artinya:

```text
variable = tempat menyimpan data
```

Data itu nanti bisa dipakai ulang.

---

# 2. Kenapa Variable Penting?

Bayangkan:

```php
echo "Elang";
echo "Halo Elang";
echo "Umur Elang";
```

Kalau nama berubah?

Misalnya:

```text
Elang → Zayen
```

Capek.

Harus ubah semua.

Makanya pakai variable.

Contoh:

```php
<?php

$nama = "Elang";

echo "<h1>$nama</h1>";
echo "<p>Halo $nama</p>";
echo "<p>Umur $nama</p>";
```

Sekarang cukup ubah:

```php
$nama = "Zayen";
```

Semua otomatis berubah.

Ini disebut:

```text
dynamic data
```

---

# 3. Variable Bisa Dipakai Ulang

Contoh:

```php
<?php

$game = "Skyrim";

echo "<h1>$game</h1>";
echo "<p>Saya suka game $game</p>";
echo "<p>Game favorit saya adalah $game</p>";
```

Satu data.

Dipakai berkali-kali.

---

# 4. Variable Bisa Diganti Isinya

Contoh:

```php
<?php

$nama = "Elang";

echo $nama;

$nama = "Zayen";

echo $nama;
```

Output:

```text
Elang
Zayen
```

Kenapa?

Karena variable bisa ditimpa.

PHP membaca dari atas ke bawah.

---

# 5. Operasi Variable

Variable bisa dihitung.

Contoh:

```php
<?php

$harga = 10000;
$jumlah = 3;

$total = $harga * $jumlah;

echo "<p>Total: $total</p>";
```

Output:

```text
Total: 30000
```

---

# 6. Variable + Text

Contoh:

```php
<?php

$nama = "Elang";
$umur = 19;

echo "<p>Nama saya $nama</p>";
echo "<p>Umur saya $umur tahun</p>";
```

---

# 7. Praktik 1 - Variable Reuse

Isi file:

```php
<?php

$nama = "Elang";

echo "<h1>Halo $nama</h1>";
echo "<p>Selamat datang $nama</p>";
echo "<p>Semoga harimu bagus, $nama</p>";
```

Lalu ubah:

```php
$nama = "Capybara Raja";
```

Lihat apa yang berubah.

---

# 8. Praktik 2 - Operasi Variable

Ganti isi file:

```php
<?php

$hargaLaptop = 15000000;
$jumlahLaptop = 2;

$totalHarga = $hargaLaptop * $jumlahLaptop;

echo "<h1>Belanja Laptop</h1>";
echo "<hr>";

echo "<p>Harga laptop: $hargaLaptop</p>";
echo "<p>Jumlah laptop: $jumlahLaptop</p>";
echo "<p>Total harga: $totalHarga</p>";
```

---

# 9. Praktik 3 - Variable Ditimpa

Coba:

```php
<?php

$game = "Skyrim";

echo "<p>Game awal: $game</p>";

$game = "Cyberpunk 2077";

echo "<p>Game baru: $game</p>";
```

---

# Ringkasan

Yang dipelajari:

- variable bisa dipakai ulang
- variable bisa diganti isi
- variable bisa dihitung
- variable membuat data menjadi dynamic
- variable bisa dipakai di HTML output