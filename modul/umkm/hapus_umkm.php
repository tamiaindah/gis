<?php
	require_once "../../koneksi.php";

	$id = $_GET['id'];

	$sql = mysqli_query($koneksi, "SELECT * FROM tbumkm_3183111039 WHERE id_umkm='$id'");

	$x = mysqli_fetch_array($sql);

	$img_name = $x['foto_umkm'];
	$loc= "../../img_test/$img_name";
	@unlink($loc);

	mysqli_query($koneksi, "DELETE FROM tbumkm_3183111039 WHERE id_umkm='$id'");

	header("location:umkm.php");
?>