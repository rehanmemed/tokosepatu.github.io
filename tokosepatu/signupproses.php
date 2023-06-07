<?php 
        include 'db.php'; //terhubung ke koneksi.php
        
        $nama_pembeli=$_GET['nama'];
        $email_pembeli=$_GET['email'];
        $telp_pembeli=$_GET['telepon'];
        $address_pembeli=$_GET['alamat'];
        $kode_pos=$_GET['kodepos'];
        $username_pembeli=$_GET['username'];
        $password_pembeli = md5($_GET['password']);

        $sql = "INSERT INTO tb_pembeli (nama_pembeli, email_pembeli, telp_pembeli, address_pembeli, kode_pos, username_pembeli, password_pembeli)
        VALUES('$nama_pembeli', '$email_pembeli', '$telp_pembeli', '$address_pembeli', '$kode_pos', '$username_pembeli', '$password_pembeli')";

        if (mysqli_query($conn, $sql)) {
        header("location:login.php");
        } 
?>