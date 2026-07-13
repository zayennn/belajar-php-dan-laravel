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
$role = "admin";
$isLogin = true;

$member = ["Capytanic", "CapyMcD", "CapyObake"];

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
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Role</th>
            </tr>
            <?php foreach ($member as $user) :?>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>