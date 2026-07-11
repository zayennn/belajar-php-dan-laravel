# 2.7 Percabangan di Web

## Tujuan Belajar

Pada materi ini kamu akan belajar:

- Apa itu percabangan
- Kenapa percabangan penting
- if
- if else
- if elseif else
- Nested if
- Ternary Operator
- Alternative Syntax
- Best Practice

---

# Apa itu Percabangan?

Percabangan adalah cara program mengambil keputusan berdasarkan suatu kondisi.

Contoh kehidupan nyata:

Kalau hujan:

→ Bawa payung.

Kalau tidak hujan:

→ Tidak perlu bawa payung.

Dalam PHP:

```php
if ($hujan) {

}
```

Program akan mengecek kondisi terlebih dahulu.

---

# Analogi

Bayangkan satpam di sebuah gedung.

Kalau:

```
Punya kartu akses
```

Masuk.

Kalau tidak:

```
Ditolak.
```

Satpam sedang melakukan percabangan.

---

# Kenapa Percabangan Penting?

Tanpa percabangan website hanya bisa menampilkan data.

Dengan percabangan website bisa:

- Login
- Register
- Checkout
- Dashboard
- Admin Panel
- Upload File
- Validasi

Hampir semua website memakai percabangan.

---

# IF

Syntax paling sederhana.

```php
<?php

$umur = 19;

if ($umur >= 17) {

    echo "Dewasa";

}
```

Kalau kondisi TRUE

isi if dijalankan.

Kalau FALSE

dilewati.

---

# IF ELSE

Kalau kondisi salah.

Masuk ke else.

```php
if ($umur >= 17) {

    echo "Dewasa";

} else {

    echo "Belum Dewasa";

}
```

---

# IF ELSEIF ELSE

Kalau kondisinya banyak.

```php
$nilai = 90;

if ($nilai >= 90) {

    echo "A";

} elseif ($nilai >= 80) {

    echo "B";

} elseif ($nilai >= 70) {

    echo "C";

} else {

    echo "D";

}
```

Program mengecek dari atas ke bawah.

Kalau sudah menemukan TRUE

program berhenti.

---

# Nested IF

If di dalam if.

Contoh:

```php
if ($login) {

    if ($isAdmin) {

        echo "Dashboard Admin";

    }

}
```

Biasanya dipakai ketika ada syarat bertingkat.

---

# Ternary Operator

Kalau hanya dua kondisi.

Lebih pendek.

```php
$status =
$umur >= 17
? "Dewasa"
: "Belum Dewasa";
```

Sama seperti:

```php
if($umur >=17){

$status="Dewasa";

}else{

$status="Belum Dewasa";

}
```

---

# Alternative Syntax

Kalau HTML lebih banyak.

Gunakan:

```php
<?php if ($login) : ?>

<h1>Dashboard</h1>

<?php else : ?>

<h1>Silakan Login</h1>

<?php endif; ?>
```

Ini yang nanti sering muncul di Blade Laravel.

---

# Contoh 1

```php
<?php

$stok = 10;

?>

<?php if ($stok > 0) : ?>

<p>Stok tersedia</p>

<?php else : ?>

<p>Stok habis</p>

<?php endif; ?>
```

---

# Contoh 2

```php
<?php

$login = true;

?>

<?php if ($login) : ?>

<h2>Selamat Datang</h2>

<?php else : ?>

<h2>Silakan Login</h2>

<?php endif; ?>
```

---

# Kesalahan Pemula

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

---

## Salah

```php
if($umur >17);

{

}
```

Ada titik koma.

Akibatnya if selesai.

Block di bawahnya akan selalu dijalankan.

---

## Salah

Nested if terlalu dalam.

```php
if(){

 if(){

   if(){

      if(){

      }

   }

 }

}
```

Kalau bisa hindari.

---

# Best Practice

✔ Gunakan Alternative Syntax jika HTML lebih banyak.

✔ Gunakan Ternary jika hanya dua kondisi sederhana.

✔ Hindari Nested IF terlalu banyak.

✔ Beri nama variable boolean dengan jelas.

Contoh:

```php
$isLogin

$isAdmin

$isMember
```

Lebih jelas daripada:

```php
$data

$status

$cek
```

---

# Ringkasan

Sekarang kamu sudah memahami:

- if
- else
- elseif
- nested if
- ternary
- alternative syntax

Ini adalah pondasi login dan dashboard website.

---

# Checklist

- Apa fungsi if?
- Apa bedanya if dan if else?
- Kapan memakai elseif?
- Kapan memakai ternary?
- Kenapa Alternative Syntax lebih cocok untuk HTML?