<?php
require 'function.php';
$internet = query("SELECT * FROM tb_provider_internet");

if(isset($_POST["cari"])){
    $internet = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provider Internet</title>
</head>
<body>
    <a href="tambah.php">Tambah Data</a>
    <br>
<form action="" method="POST">
<input type="text" name="keyword" size="30" autofocus placeholder="Masukkan Keyword Pencarian" autocomplete="off">
<button type="submit" name="cari">Cari</button>
</form>
    <table border="1" cellpadding="5" cellspasing="0">
        <tr>
            <th>Nomor</th>
            <th>Aksi</th>
            <th>Provider</th>
            <th>Paket</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Tanggal Aktif</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($internet as $rows):?>
        <tr>
            <td><?= $i?></td>
            <td>
                <a href="ubah.php?id_provider=<?= $rows["id_provider"];?>">Ubah Data</a> |
                <a href="hapus.php?id_provider=<?= $rows["id_provider"];?>" onclick="return confirm('apakah anda yakin?')">Hapus Data</a>
            </td>
            <td><?= $rows["provider_name"]?></td>
            <td><?= $rows["customer_paket"]?></td>
            <td><?= $rows["description"]?></td>
            <td><?= $rows["price"]?></td>
            <td><?= $rows["active_on"]?></td>
        </tr>
        <?php $i++?>
        <?php endforeach;?>
    </table>
</body>
</html>