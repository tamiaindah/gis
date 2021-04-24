<?php
ob_start();
session_start();
if(empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo '
    <center>
    <br><br><br><br><br><br><br><br><br><br><br>
    <b>Maaf, Silahkan Login Kembali</b><br>
    <b>Anda telah keluar dari sistem</b>
    <br>
    <a href="index.php" title="Klik Gambar untuk Kembali ke Halaman LOGIN">
    <img src="img/key-login.png" height="100" width="100"></img>
    </a>
    </center>';
} else {

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:Tambah UMKM:.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    
    <script src="../../js/jquery-1.7.2.min.js"></script>
    <script src="../../js/OpenLayers.js"></script>

    <link href="../../css/jquery-position-picker.css" rel="stylesheet" type="text/css"/>
    <script src="../../js/jquery-position-picker.debug.js"></script>
    <link rel="stylesheet" href="../../css2/style.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../dashboard.php">GIS UMKM JOGJA 039</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../../dashboard.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../kategori/kategori.php">Kategori</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../umkm/umkm.php">UMKM</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Akun
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../password/password.php">Ubah Password</a>
                <a class="dropdown-item" href="../../logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?')">Logout</a>
                </div>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>

        <br/>
        <div class="detail">
        <?php
            require_once "../../koneksi.php";

            $sql = mysqli_query($koneksi, "SELECT * FROM tbumkm_3183111039, tbkategori_3183111039
            where tbumkm_3183111039.kategori_umkm=tbkategori_3183111039.id_kategori");
            $no= 1;
            while($g=mysqli_fetch_array($sql)){
                ?>
            
                
                <h5>No : <?php echo $no++ ?> </h5>
                <h5>Nama UMKM : <?php echo $g['nama_umkm'] ?></h5><br/>
                <h5>Kategori UMKM: <?php echo $g['nama_kategori'] ?></h5><br/>
                <h5>Lokasi UMKM: <?php echo $g['lokasi_umkm'] ?></h5><br/>
                <h5>Latitude: <?php echo $g['latitude'] ?></h5><br/>
                <h5>Longitude: <?php echo $g['longitude'] ?></h5><br/>
                <div class='gllpLatlonPicker'>
                    <div class='gllpMap'></div>
                    &#8627; <font color='red'>Klik 2X Pada Peta Untuk <b>Zoom</b></font> 
                    <br />
                    &#8627; <font color='red'>Klik 1X Pada Peta Untuk Menandai Lokasi Dengan <b>Marker</b></font> 
                </div>
                <br/>
                    
            
            <?php } ?>

            
            
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="../../ckeditor/ckeditor.js" type="text/javascript"></script>
</html>

<?php
    }
?>