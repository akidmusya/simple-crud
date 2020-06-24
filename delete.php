<?php
include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM produk WHERE id_produk=$id");

header("Location:index.php");
?>