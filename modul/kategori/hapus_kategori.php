<?php

    require_once '../../koneksi.php';
    $id=$_GET['id'];

    mysqli_query($koneksi, "delete from tbkategori_3183111039 where id_kategori='$id'");
    header("location:kategori.php");
?>