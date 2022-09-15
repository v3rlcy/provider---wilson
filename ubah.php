<?php
require 'function.php';
$id = $_GET["id_provider"];
$internet = query("SELECT * FROM tb_provider_internet WHERE id_provider = $id")[0];

if(isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo "<script>alert('Data berhasil diubah'); document.location.href = 'index.php';</script>";
    }
    else{
        echo "<script>alert('Data gagal diubah'); document.location.href = 'index.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <input type="hidden" name="id_provider" value="<?= $internet["id_provider"];?>">
            <li>
                <label for="provider">Provider: </label>
                <input type="text" name="provider_name" id="provider" value="<?= $internet["provider_name"];?>">
            </li>
            <li>
                <label for="paket">Paket: </label>
                <input type="text" name="customer_paket" id="paket"
                value="<?= $internet["customer_paket"];?>">
            </li>
            <li>
                <label for="deskripsi">Deskripsi: </label>
                <input type="text" name="description" id="deskripsi" value="<?= $internet["description"];?>">
            </li>
            <li>
                <label for="harga">Harga: </label>
                <input type="text" name="price" id="harga" value="<?= $internet["price"];?>">
            </li>
            <li>
                <label for="aktif">Tanggal Aktif: </label>
                <input type="text" name="active_on" id="aktif" value="<?= $internet["active_on"];?>">
            </li>
            <button type="submit" name="submit">Ubah Data</button>
        </ul>
    </form>
</body>
</html>