<?php
include "koneksi.php";

session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "select * from tb_admin where username='$username' and password='$password'");

$a = mysqli_fetch_array($query);

$cek = mysqli_num_rows($query);

if($cek > 0) {
    $_SESSION['username'] = $a['username'];
    $_SESSION['password'] = $a['password'];
    $_SESSION['namaadmin'] = $a['nama_admin'];
    $_SESSION['idadmin'] = $a['id_admin'];
    header("location:dashboard.php");
} else {
    header("location:gagal_login.php");
}


?>