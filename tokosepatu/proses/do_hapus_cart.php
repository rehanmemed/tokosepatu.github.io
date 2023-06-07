<?php
session_start();
    include "../db.php";
    $id = $_GET["id"];

    unset($_SESSION["cart"][$id]);

    header("location:../cart.php")
?>