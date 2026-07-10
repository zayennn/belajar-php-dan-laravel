# 2.5 Operator di Web

## Tujuan Belajar

Pada materi ini kamu akan belajar:

- Apa itu operator
- Kenapa operator penting
- Operator aritmatika
- Operator assignment
- Operator perbandingan
- Operator logika
- Operator increment & decrement
- Menggunakan operator pada website
- Best Practice penggunaan operator

---

# Apa itu Operator?

Operator adalah simbol yang digunakan untuk melakukan suatu operasi terhadap data.

Contoh sederhana:

```php
5 + 5
```

Operatornya adalah:

```text
+
```

Sedangkan:

```text
5
```

disebut operand.

Jadi:

```text
Operand + Operand
```

menjadi

```text
5 + 5
```

Operator bukan cuma untuk menghitung.

Operator juga digunakan untuk:

- membandingkan data
- mengecek kondisi
- menggabungkan data
- mengubah nilai variable

Hampir setiap program menggunakan operator.

---

# Analogi

Bayangkan operator seperti tombol pada kalkulator.

Misalnya:

```
+
-
×
÷
=
```

Tanpa tombol itu kalkulator hanya menjadi pajangan mahal.

Begitu juga PHP.

Tanpa operator PHP tidak bisa menghitung apa pun.

---

# Jenis Operator

PHP mempunyai banyak operator.

Yang paling sering digunakan:

- Operator Aritmatika
- Operator Assignment
- Operator Perbandingan
- Operator Logika
- Increment & Decrement

Kita akan belajar semuanya.

---

# 1. Operator Aritmatika

Operator yang digunakan untuk berhitung.

| Operator | Fungsi |
|----------|---------|
| + | Penjumlahan |
| - | Pengurangan |
| * | Perkalian |
| / | Pembagian |
| % | Sisa bagi |
| ** | Pangkat |

Contoh:

```php
<?php

$a = 10;
$b = 3;

echo $a + $b;
echo "<br>";

echo $a - $b;
echo "<br>";

echo $a * $b;
echo "<br>";

echo $a / $b;
echo "<br>";

echo $a % $b;
echo "<br>";

echo $a ** 2;
```

Output:

```
13
7
30
3.333333
1
100
```

---

# Penjelasan

```
10 % 3
```

Bukan:

```
10 dibagi 3
```

Tetapi:

```
SISA pembagian
```

Karena:

```
10 ÷ 3 = 3
```

Sisa:

```
1
```

Makanya hasilnya:

```
1
```

Operator `%` sangat sering dipakai.

Contoh:

Mengecek angka ganjil-genap.

```php
if ($angka % 2 == 0)
```

---

# 2. Operator Assignment

Assignment artinya:

```
memberikan nilai
```

Operator:

```php
=
```

Contoh:

```php
$nama = "Elang";
```

Artinya:

Masukkan nilai:

```
Elang
```

ke dalam variable:

```
$nama
```

---

Ada juga assignment gabungan.

Contoh:

```php
$total = 10;

$total += 5;
```

Sama dengan:

```php
$total = $total + 5;
```

Operator lain:

```php
+=
-=
*=
/=
%=
```

---

# Contoh

```php
$uang = 10000;

$uang += 5000;

echo $uang;
```

Output:

```
15000
```

---

# 3. Operator Perbandingan

Digunakan untuk membandingkan data.

Hasilnya selalu:

```
true
```

atau

```
false
```

Operator:

| Operator | Arti |
|----------|------|
| == | Sama dengan |
| != | Tidak sama |
| > | Lebih besar |
| < | Lebih kecil |
| >= | Lebih besar sama dengan |
| <= | Lebih kecil sama dengan |

Contoh:

```php
$umur = 19;

var_dump($umur >= 17);
```

Output:

```
bool(true)
```

---

Kenapa pakai `var_dump()`?

Karena:

```php
echo true;
```

hasilnya membingungkan.

Sedangkan:

```php
var_dump(true);
```

langsung terlihat:

```
bool(true)
```

Nanti kita bahas `var_dump()` lebih dalam.

---

# 4. Operator Logika

Operator logika digunakan untuk menggabungkan kondisi.

| Operator | Arti |
|----------|------|
| && | DAN |
| || | ATAU |
| ! | TIDAK |

Contoh:

```php
$umur = 20;
$punyaKtp = true;

var_dump($umur >= 17 && $punyaKtp);
```

Output:

```
bool(true)
```

---

# 5. Increment dan Decrement

Increment:

menambah 1.

```php
$angka++;
```

Sama dengan:

```php
$angka = $angka + 1;
```

---

Decrement:

```php
$angka--;
```

Mengurangi satu.

---

# Praktik 1

```php
<?php

$harga = 15000;
$jumlah = 3;

$total = $harga * $jumlah;

echo "<h1>Toko</h1>";
echo "<hr>";

echo "<p>Harga : Rp " . number_format($harga,0,",",".") . "</p>";
echo "<p>Jumlah : $jumlah</p>";
echo "<p>Total : Rp " . number_format($total,0,",",".") . "</p>";
```

---

# Praktik 2

```php
<?php

$umur = 19;

echo "<h2>Cek Umur</h2>";

var_dump($umur >= 17);
```

---

# Kesalahan Yang Sering Dilakukan

## Salah

```php
$total =+ 5;
```

Banyak pemula mengira ini sama dengan:

```php
$total += 5;
```

Padahal berbeda.

---

## Salah

```php
if($umur = 17)
```

Ini assignment.

Bukan perbandingan.

Yang benar:

```php
if($umur == 17)
```

Ini bug yang sangat sering terjadi.

---

# Best Practice

✔ Gunakan nama variable yang jelas.

```php
$totalHarga
```

lebih baik daripada

```php
$x
```

---

✔ Gunakan `number_format()` saat menampilkan uang.

Lebih mudah dibaca user.

---

✔ Jangan menghitung berkali-kali.

Salah:

```php
echo $harga * $jumlah;
echo $harga * $jumlah;
echo $harga * $jumlah;
```

Benar:

```php
$total = $harga * $jumlah;

echo $total;
```

---

# Ringkasan

Sekarang kamu sudah memahami:

- operator aritmatika
- assignment
- perbandingan
- logika
- increment
- decrement

Semua operator ini akan sering digunakan ketika membuat website.

---

# Checklist

Kalau semua pertanyaan ini bisa dijawab tanpa melihat materi, berarti kamu sudah siap lanjut.

- Apa itu operator?
- Apa fungsi `%`?
- Apa perbedaan `=` dan `==`?
- Apa fungsi `&&`?
- Apa fungsi `+=`?
- Apa fungsi `++`?