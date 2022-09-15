<?php
$conn = mysqli_connect("localhost", "root", "", "db_provider");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $provider = htmlspecialchars($data["provider_name"]);
    $paket = htmlspecialchars($data["customer_paket"]);
    $deskripsi = htmlspecialchars($data["description"]);
    $harga = htmlspecialchars($data["price"]);
    $aktif = htmlspecialchars($data["active_on"]);
    $query = "INSERT INTO tb_provider_internet VALUES('', '$provider', '$paket', '$deskripsi', '$harga', '$aktif')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id_provider"];
    $provider = htmlspecialchars($data["provider_name"]);
    $paket = htmlspecialchars($data["customer_paket"]);
    $deskripsi = htmlspecialchars($data["description"]);
    $harga = htmlspecialchars($data["price"]);
    $aktif = htmlspecialchars($data["active_on"]);
    $query = "UPDATE tb_provider_internet SET provider_name = '$provider', customer_paket = '$paket', description = '$deskripsi', price = '$harga', active_on = '$aktif' WHERE id_provider = '$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_provider_internet WHERE id_provider = $id");
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM tb_provider_internet WHERE provider_name LIKE'%$keyword%'OR customer_paket LIKE '%$keyword%' OR description LIKE '%$keyword%' OR price LIKE '%$keyword%' OR active_on LIKE '%$keyword%'";
    return query($query);
}
?>