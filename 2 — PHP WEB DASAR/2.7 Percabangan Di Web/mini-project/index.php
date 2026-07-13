<?php

/*
===================================================

MINI PROJECT 2.7

===================================================

Buat halaman "Dashboard User"

Data:

Nama
Role

Role bisa:

Admin
Member

Jika:

Admin

Tampilkan:

Panel Admin
Kelola User
Kelola Produk

Jika:

Member

Tampilkan:

Dashboard Member
Riwayat Pembelian
Edit Profile

Gunakan:

- if else
- Alternative Syntax
- HTML

BONUS

Tambahkan:

Status Login

Jika login

Tampilkan:

"Selamat Datang"

Jika tidak

"Tolong Login"

Gunakan boolean.

===================================================
*/

$nama = "Capyking";
$role = "member";
$isLogin = true;

$members = ["Capytanic", "CapyMcD", "CapyObake"];
$products = ["Apel", "Pisang", "Mangga", "Jeruk"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard user</h1>
    <hr>

    <?php if ($isLogin && $role === "admin") : ?>
        <h3>Selamat datang kembali, <?= $nama ?>!</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($members); $i++) :?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= $members[$i] ?></td>
                        <td><?= $role ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>

        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($products); $i++) : ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= $products[$i] ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>

    <?php elseif ($isLogin && $role == "member") : ?>
        <h3>Selamat datang kembali, <?= $nama ?></h3>

        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Product</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    <?php else : ?>
        <p>Silahkan login terlebih dahulu</p>
    <?php endif; ?>
</body>
</html>