<?php
session_start();
 include "../db.php";

 $id = $_GET["id"];

 $sql = "SELECT * FROM tb_product WHERE product_id =".$id;
 $query = mysqli_query($conn,$sql);
 $hasil = mysqli_fetch_object($query);

 $nama = $hasil->product_name;
 $harga = $hasil->product_price;

 $_SESSION["cart"][$id] = [
    "nama" => $nama,
    "harga" => $harga,
    "jumlah" => 1
 ];

 header("location:../cart.php");
?>