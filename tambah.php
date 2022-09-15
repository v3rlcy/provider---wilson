<?php
require 'function.php';

if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "<script>alert('Data berhasil ditambah'); document.location.href = 'index.php';</script>";
    }
    else{
        echo "<script>alert('Data gagal ditambah'); document.location.href = 'index.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="provider">Provider: </label>
                <input type="text" name="provider_name" id="provider" required>
            </li>
            <li>
                <label for="paket">Paket: </label>
                <input type="text" name="customer_paket" id="paket">
            </li>
            <li>
                <label for="deskripsi">Deskripsi: </label>
                <input type="text" name="description" id="deskripsi">
            </li>
            <li>
                <label for="harga">Harga: </label>
                <input type="text" name="price" id="harga">
            </li>
            <li>
                <label for="aktif">Tanggal Aktif: </label>
                <input type="text" name="active_on" id="aktif">
            </li>
            <button type="submit" name="submit">Tambah Data</button>
        </ul>
    </form>
</body>
</html>