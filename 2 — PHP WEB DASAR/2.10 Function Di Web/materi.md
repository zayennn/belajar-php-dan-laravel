# Level 2.10 - Function di Web

---

# Tujuan

Pada materi ini kamu akan belajar:

- Kenapa website membutuhkan function
- Function dengan parameter
- Function dengan return
- Function yang menghasilkan HTML
- Function untuk mengurangi pengulangan kode
- Best Practice membuat function

---

# Kenapa Harus Pakai Function?

Bayangkan kamu mempunyai website toko online.

Di setiap halaman ada card product.

Tanpa function.

```php
<div>

<h3>Laptop</h3>

<p>12000000</p>

</div>

<div>

<h3>Mouse</h3>

<p>300000</p>

</div>

<div>

<h3>Keyboard</h3>

<p>500000</p>

</div>
```

Kalau ada 100 product?

Capek.

Makanya kita bikin function.

---

# Function Sederhana

```php
function halo(){

    echo "Halo Dunia";

}

halo();
```

Output

```
Halo Dunia
```

---

# Function Dengan Parameter

```php
function halo($nama){

    echo "Halo $nama";

}

halo("Elang");
```

Output

```
Halo Elang
```

Parameter adalah data yang dikirim ke function.

---

# Function Dengan Banyak Parameter

```php
function profile($nama,$umur){

    echo $nama;

    echo $umur;

}
```

Dipanggil.

```php
profile("Elang",20);
```

---

# Function Return

Kadang function tidak langsung menampilkan sesuatu.

Tetapi mengembalikan nilai.

```php
function tambah($a,$b){

    return $a+$b;

}
```

Dipanggil.

```php
$total=tambah(10,20);

echo $total;
```

Output

```
30
```

---

# Function Menghasilkan HTML

Misalnya.

```php
function card($nama){

?>

<div>

<h2><?= $nama ?></h2>

</div>

<?php

}
```

Dipanggil.

```php
card("Laptop");

card("Mouse");

card("Keyboard");
```

Output.

```
+-----------+

Laptop

+-----------+

Mouse

+-----------+

Keyboard
```

---

# Kenapa Ini Penting?

Karena nanti di Laravel.

Misalnya.

```blade
<x-product-card>

</x-product-card>
```

Sebenarnya konsepnya hampir sama.

Hanya lebih modern.

---

# Reusable Code

Bayangkan.

Ada tombol.

```html
<button>

Simpan

</button>
```

Dipakai 100 kali.

Daripada copy paste.

Lebih baik.

```php
button("Simpan");
```

---

# Function Dengan Return HTML

Contoh.

```php
function badge($status){

    if($status){

        return "<span>Aktif</span>";

    }

    return "<span>Nonaktif</span>";

}
```

Dipakai.

```php
<?= badge(true) ?>
```

Output.

```
Aktif
```

---

# Best Practice

Nama function harus menjelaskan pekerjaannya.

Bagus.

```php
formatRupiah()

buatCard()

statusUser()
```

Kurang bagus.

```php
abc()

test()

fungsi1()
```

---

# Jangan Membuat Function Seperti Ini

```php
function data(){

}
```

Data apa?

Tidak jelas.

Lebih baik.

```php
ambilUser()

hitungDiskon()

formatTanggal()
```

---

# Laravel

Di Laravel nanti.

Kamu akan sering melihat.

```php
route()

view()

redirect()

auth()

asset()

now()
```

Semuanya adalah function.

---

# Ringkasan

Sekarang kamu memahami.

- function web
- parameter
- return
- reusable code
- menghasilkan HTML

Ini adalah pondasi sebelum belajar Controller Laravel.

---

# Checklist

- Apa fungsi function?
- Apa itu parameter?
- Apa itu return?
- Kapan memakai return?
- Kenapa function membuat code lebih rapi?