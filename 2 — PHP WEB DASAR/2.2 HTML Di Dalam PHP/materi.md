# 2.2 HTML di Dalam PHP

## Tujuan Belajar

Di materi ini kamu akan belajar:

- Kenapa PHP bisa dicampur HTML
- Apa itu tag `<?php ?>`
- Apa itu `<?= ?>`
- Kapan pakai `echo`
- Kapan keluar dari PHP
- Cara menampilkan data ke HTML
- Cara bikin template sederhana

---

# 1. Kenapa HTML Bisa Dicampur PHP?

PHP adalah bahasa backend.

Tugas PHP:

```text
menghasilkan output
```

Biasanya output itu adalah:

```text
HTML
```

Contoh:

```php
<?php

echo "<h1>Hello World</h1>";
```

PHP menghasilkan:

```html
<h1>Hello World</h1>
```

Browser lalu membaca HTML itu.

---

# 2. Cara Lama (Echo HTML)

Contoh:

```php
<?php

echo "<h1>Halo Elang</h1>";
echo "<p>Belajar PHP Web</p>";
```

Hasil:

```html
<h1>Halo Elang</h1>
<p>Belajar PHP Web</p>
```

Ini valid.

Tapi ada masalah.

Kalau HTML mulai banyak:

```php
echo "<div>";
echo "<h1>";
echo "</div>";
```

Mulai bikin mata pengen logout dari kehidupan.

Sulit dibaca.

---

# 3. Cara yang Lebih Normal

Pisahkan PHP dan HTML.

Contoh:

```php
<?php

$nama = "Elang";

?>

<h1>Halo <?= $nama ?></h1>
```

Lebih bersih.

Lebih gampang dibaca.

Dan ini cara yang sering dipakai.

Laravel nanti konsepnya sangat mirip.

---

# 4. Apa Itu `<?php ?>`

Ini tag pembuka PHP.

Contoh:

```php
<?php

$nama = "Elang";
```

Artinya:

```text
"mulai jalankan kode PHP"
```

Kalau ditutup:

```php
?>
```

Artinya:

```text
"selesai menjalankan PHP"
```

Sesudah itu browser membaca HTML biasa.

Contoh:

```php
<?php
$nama = "Elang";
?>

<h1>Halo <?= $nama ?></h1>
```

---

# 5. Apa Itu `<?= ?>`

Ini shortcut dari:

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

Lebih pendek.

Lebih bersih.

Lebih sering dipakai.

---

# 6. Kapan Pakai echo?

Gunakan `echo` kalau masih di dalam blok PHP.

Contoh:

```php
<?php

echo "Halo dunia";
```

Kalau sudah di HTML:

Gunakan:

```php
<?= ?>
```

Contoh:

```php
<h1><?= $nama ?></h1>
```

Rule gampang:

```text
masih di PHP → echo

sudah di HTML → <?= ?>
```

---

# 7. Praktik 1 - Campur HTML dan PHP

Isi file:

```php
<?php

$nama = "Elang";
$umur = 19;
?>

<!doctype html>
<html>
<head>
    <title>Belajar PHP</title>
</head>
<body>

    <h1>Halo <?= $nama ?></h1>

    <p>Umur: <?= $umur ?></p>

</body>
</html>
```

Jalankan di browser.

---

# 8. Praktik 2 - Template Biodata

Ganti isi file:

```php
<?php

$nama = "Elang";
$umur = 19;
$hobi = "Ngoding";
?>

<!doctype html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>

    <h1>Biodata</h1>

    <hr>

    <p>Nama: <?= $nama ?></p>
    <p>Umur: <?= $umur ?></p>
    <p>Hobi: <?= $hobi ?></p>

</body>
</html>
```

Sekarang ubah variabelnya.

Lihat hasil output berubah.

Eksperimen kecil itu penting.

Programming bukan hafalan. Tapi hubungan toxic antara manusia dan bug.

---

# Ringkasan

Yang dipelajari:

- `<?php ?>` → buka tutup PHP
- `<?= ?>` → shortcut echo
- HTML bisa dicampur PHP
- jangan semua pakai echo HTML
- lebih bagus pisah PHP dan HTML