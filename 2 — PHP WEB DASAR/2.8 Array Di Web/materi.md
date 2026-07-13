# 2.8 Array di Web

## Tujuan Belajar

Pada materi ini kamu akan belajar:

- Menggunakan array pada website
- Array associative
- Array multidimensi
- Menampilkan data array ke HTML
- Struktur data seperti database
- Best Practice penamaan array

---

# Kenapa Website Selalu Menggunakan Array?

Bayangkan sebuah toko online.

Apakah produknya cuma satu?

Tidak.

Misalnya ada:

- Laptop
- Keyboard
- Mouse
- Monitor

Kalau membuat variable satu-satu:

```php
$product1

$product2

$product3

$product4
```

Program akan cepat berantakan.

Karena itu kita menggunakan Array.

---

# Array Biasa

```php
$buah = [

    "Apel",

    "Jeruk",

    "Mangga"

];
```

Mengambil data:

```php
<?= $buah[0] ?>
```

Output:

```
Apel
```

---

# Associative Array

Ini yang PALING sering dipakai.

Contoh:

```php
$user = [

    "nama" => "Elang",

    "umur" => 19,

    "role" => "Admin"

];
```

Mengambil data:

```php
<?= $user["nama"] ?>
```

Output:

```
Elang
```

Kenapa lebih bagus?

Karena:

```php
$user["nama"]
```

lebih mudah dipahami dibanding:

```php
$user[0]
```

---

# Array Multidimensi

Kalau datanya banyak.

Misalnya daftar user.

```php
$users = [

    [

        "nama"=>"Elang",

        "role"=>"Admin"

    ],

    [

        "nama"=>"Capy",

        "role"=>"Member"

    ]

];
```

Mengambil data:

```php
<?= $users[0]["nama"] ?>
```

Output:

```
Elang
```

---

# Analogi

Bayangkan lemari.

```
Lemari

↓

Laci

↓

Barang
```

Array multidimensi juga begitu.

```
Users

↓

User pertama

↓

Nama
Role
Email
```

---

# Contoh Website

```php
<?php

$product = [

    "nama"=>"Laptop",

    "harga"=>12000000,

    "stok"=>15

];

?>

<h1><?= $product["nama"] ?></h1>

<p>

Rp

<?= number_format($product["harga"],0,",",".") ?>

</p>

<p>

Stok :

<?= $product["stok"] ?>

</p>
```

---

# Contoh Daftar Produk

```php
<?php

$products = [

[
"nama"=>"Laptop",
"harga"=>12000000
],

[
"nama"=>"Mouse",
"harga"=>500000
]

];
```

Sekarang belum memakai loop.

Masih manual.

```php
<h2><?= $products[0]["nama"] ?></h2>

<p><?= $products[0]["harga"] ?></p>

<hr>

<h2><?= $products[1]["nama"] ?></h2>

<p><?= $products[1]["harga"] ?></p>
```

Nanti di level berikutnya kita pakai foreach.

---

# Best Practice

Gunakan nama jamak.

Misalnya:

```php
$product
```

Artinya:

Satu produk.

Sedangkan:

```php
$products
```

Artinya:

Banyak produk.

Begitu juga:

```php
$user

↓

$users
```

```php
$movie

↓

$movies
```

```php
$book

↓

$books
```

Ini kebiasaan programmer Laravel.

---

# Kesalahan Pemula

Salah:

```php
$data

$array

$list
```

Nama terlalu umum.

Lebih baik:

```php
$users

$products

$categories

$movies
```

---

# Ringkasan

Sekarang kamu memahami:

- Array biasa
- Associative Array
- Array multidimensi
- Menampilkan data array ke HTML

Materi ini adalah pondasi sebelum belajar foreach.

---

# Checklist

- Apa itu array?
- Kenapa memakai associative array?
- Apa itu array multidimensi?
- Kenapa nama array sebaiknya jamak?
- Apa bedanya $product dan $products?