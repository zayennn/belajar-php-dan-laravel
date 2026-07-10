# 2.6 Embedded PHP (Best Practice)

## Tujuan Belajar

Pada materi ini kamu akan belajar:

- Apa itu Embedded PHP
- Kenapa PHP bisa dicampur HTML
- Kapan memakai `<?php ?>`
- Kapan memakai `<?= ?>`
- Kapan memakai `echo`
- Alternative Syntax (`if`, `foreach`, `for`, `while`)
- Best Practice membuat View
- Kesalahan yang sering dilakukan pemula

---

# Apa itu Embedded PHP?

Embedded PHP adalah teknik mencampurkan kode PHP dengan HTML dalam satu file.

Contoh:

```php
<?php

$nama = "Elang";

?>

<h1><?= $nama ?></h1>
```

Browser akan menerima:

```html
<h1>Elang</h1>
```

PHP dijalankan terlebih dahulu.

Setelah itu browser hanya menerima HTML.

---

# Kenapa Tidak Semua Pakai echo?

Misalnya:

```php
echo "<h1>Nama</h1>";
echo "<p>Umur</p>";
echo "<p>Alamat</p>";
echo "<table>";
echo "<tr>";
echo "<td>";
```

Program memang jalan.

Tetapi sulit dibaca.

Bandingkan dengan:

```php
<?php

$nama = "Elang";

?>

<h1><?= $nama ?></h1>

<p>Belajar PHP</p>
```

Jauh lebih bersih.

---

# Kapan Pakai echo?

Gunakan `echo` ketika:

- Menghasilkan output sederhana.
- Menghasilkan string pendek.
- Menghasilkan data di dalam blok PHP.

Contoh:

```php
<?php

echo "Halo Dunia";
```

---

# Kapan Pakai <?= ?>

Gunakan ketika sedang berada di HTML.

Contoh:

```php
<p>Nama : <?= $nama ?></p>
```

Ini sama dengan:

```php
<p>Nama :
<?php echo $nama; ?>
</p>
```

Tetapi lebih pendek.

---

# Kapan Pakai <?php ?>

Gunakan ketika:

- membuat variable
- if
- loop
- function
- operasi matematika

Contoh:

```php
<?php

$total = $harga * $jumlah;

?>
```

---

# Alternative Syntax

PHP mempunyai syntax khusus untuk template HTML.

## If

```php
<?php if ($umur >= 17) : ?>

<p>Dewasa</p>

<?php endif; ?>
```

Lebih rapi dibanding:

```php
<?php

if($umur >=17){

}
```

Kalau HTML berada di dalam kondisi.

---

## Foreach

```php
<ul>

<?php foreach ($buah as $item) : ?>

<li><?= $item ?></li>

<?php endforeach; ?>

</ul>
```

---

## For

```php
<?php for ($i = 1; $i <= 5; $i++) : ?>

<p><?= $i ?></p>

<?php endfor; ?>
```

---

## While

```php
<?php while ($angka <= 5) : ?>

<p><?= $angka ?></p>

<?php $angka++; ?>

<?php endwhile; ?>
```

---

# Best Practice

Misalnya:

```php
<?php

$nama = "Elang";
$umur = 19;
$alamat = "Depok";

?>

<h1><?= $nama ?></h1>

<p><?= $umur ?></p>

<p><?= $alamat ?></p>
```

Lebih baik dibanding:

```php
<?php

echo "<h1>$nama</h1>";
echo "<p>$umur</p>";
echo "<p>$alamat</p>";
```

---

# Kapan echo Lebih Cocok?

Misalnya:

```php
<?php

echo "Data berhasil disimpan.";
```

atau

```php
echo json_encode($data);
```

Masih sangat cocok.

---

# Kesalahan Pemula

## Salah

```php
<p>

<?php

echo $nama;

?>

</p>
```

Lebih baik:

```php
<p><?= $nama ?></p>
```

---

## Salah

```php
echo "<li>";
echo $nama;
echo "</li>";
```

Lebih baik:

```php
<li><?= $nama ?></li>
```

---

## Salah

HTML 100% ditulis dengan echo.

Susah dibaca.

Gunakan Embedded PHP.

---

# Ringkasan

Sekarang kamu memahami:

- Embedded PHP
- Echo
- Short Echo Tag
- Alternative Syntax
- Best Practice membuat View

Materi ini adalah pondasi sebelum belajar Blade Laravel.

Nanti Blade hanya membuat cara ini menjadi lebih nyaman.

---

# Checklist

- Apa itu Embedded PHP?
- Kenapa tidak semua HTML memakai echo?
- Kapan memakai <?= ?> ?
- Kapan memakai echo?
- Apa keuntungan Alternative Syntax?