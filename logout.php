<?php

//Memulai Session
session_start();

//Mengakhiri/Mematikan Session
session_destroy();

//Direct Link (index.php/form login)
//header("location:index.php");

echo "<script>alert('Succefully Logout'); window.location = 'index.php'</script>";
?>