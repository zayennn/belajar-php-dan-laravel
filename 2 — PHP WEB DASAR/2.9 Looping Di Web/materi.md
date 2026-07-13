# 2.9 Looping di Web

## Tujuan Belajar

Pada materi ini kamu akan belajar:

- Kenapa website membutuhkan looping
- for
- foreach
- Kapan memakai for
- Kapan memakai foreach
- Menampilkan data array ke HTML
- Best Practice looping

---

# Kenapa Website Membutuhkan Looping?

Bayangkan kamu punya data:

```php
$products = [

    [
        "nama"=>"Laptop",
        "harga"=>12000000
    ],

    [
        "nama"=>"Mouse",
        "harga"=>300000
    ],

    [
        "nama"=>"Keyboard",
        "harga"=>500000
    ]

];
```

Kalau tanpa looping...

Kamu harus menulis:

```php
<?= $products[0]["nama"] ?>

<?= $products[1]["nama"] ?>

<?= $products[2]["nama"] ?>
```

Kalau produknya 1000?

Capek.

Makanya dibuat looping.

---

# FOR

Biasanya dipakai ketika kita membutuhkan index.

Contoh:

```php
for($i=0;$i<5;$i++){

    echo $i;

}
```

Output

```
0
1
2
3
4
```

---

# FOREACH

Ini yang PALING sering dipakai di website.

```php
foreach($products as $product){

}
```

Artinya:

Ambil satu-persatu isi dari array.

Misalnya:

Loop pertama

```
Laptop
```

Loop kedua

```
Mouse
```

Loop ketiga

```
Keyboard
```

---

# Analogi

Bayangkan rak minimarket.

Ada:

```
100 barang
```

Kasir tidak akan bilang:

```
Barang ke-0

Barang ke-1

Barang ke-2
```

Kasir cukup mengambil:

```
Satu barang

↓

Barang berikutnya

↓

Barang berikutnya
```

Itulah foreach.

---

# Menampilkan Data

```php
<ul>

<?php foreach($products as $product): ?>

<li>

<?= $product["nama"] ?>

</li>

<?php endforeach; ?>

</ul>
```

Output

```
Laptop

Mouse

Keyboard
```

---

# Menampilkan Table

```php
<table>

<tbody>

<?php foreach($products as $product): ?>

<tr>

<td>

<?= $product["nama"] ?>

</td>

<td>

<?= number_format($product["harga"]) ?>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>
```

---

# FOREACH DENGAN INDEX

Kalau butuh nomor.

```php
foreach($products as $index => $product){

}
```

Contoh.

```php
<td>

<?= $index+1 ?>

</td>
```

Output

```
1

2

3
```

---

# Kapan Pakai FOR?

Gunakan kalau:

- Butuh index
- Butuh angka tertentu
- Butuh lompat angka
- Butuh mundur

Misalnya

```php
10

9

8

7
```

---

# Kapan Pakai FOREACH?

Kalau sedang membaca array.

99%

Website menggunakan foreach.

Laravel juga.

---

# Kesalahan Pemula

Salah

```php
for(

$i<count(...)

)
```

untuk associative array.

Padahal cukup

```php
foreach(...)
```

---

Salah

```php
foreach($products as $i)
```

Padahal

```php
foreach($products as $product)
```

lebih jelas.

---

# Best Practice

Gunakan nama singular.

Misalnya

```php
$products

↓

$product
```

```php
$users

↓

$user
```

```php
$movies

↓

$movie
```

Jangan:

```php
foreach($products as $i)
```

Karena tidak jelas.

---

# Laravel

Nanti syntax berubah sedikit.

PHP

```php
<?php foreach($products as $product): ?>

<?= $product["nama"] ?>

<?php endforeach; ?>
```

Laravel Blade

```blade
@foreach($products as $product)

{{ $product->nama }}

@endforeach
```

Konsepnya sama.

---

# Ringkasan

Sekarang kamu memahami:

- for
- foreach
- menampilkan data ke HTML
- kapan memakai foreach
- foreach dengan index

Ini adalah pondasi Blade Laravel.

---

# Checklist

- Apa bedanya for dan foreach?
- Kapan memakai foreach?
- Kenapa foreach lebih sering dipakai?
- Kapan memakai index?
- Kenapa nama variabel foreach sebaiknya singular?