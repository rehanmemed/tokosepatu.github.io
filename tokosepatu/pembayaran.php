<?php  
session_start();
include 'db.php';
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';
}

?>
<html>
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>TokoSepatu</title>
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
	    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    </head>
    <body>
        <!-- header -->
	<header>
		<div class="container">
			<h1><a href="index.php">TokoSepatu</a></h1>
			<ul>
            <li><a href="cart.php"><i data-feather="shopping-cart"></i></a></li>
				<li><a href="produk.php">Produk</a></li>
				<li><a href="profiluser.php">Profil</a></li>
				<li><a href="keluar.php">Keluar</a></li>
			</ul>
		</div>
	</header>
    <!--pembayaran-->
    <div class="section">
        <div class="container">
            <div class="box">
        <form action="proses-pembayaran.php" method="POST">
            <input type="hidden" name="pembayaran" value="<?php echo isset($_POST['pembayaran']) ? $_POST['pembayaran'] : ''; ?>">
            <b class="ukuran-text">Pilih metode pembayaran</b> <br>
            <input type="radio" name="pembayaran" value="cash"><img src="img/cash.png" style="width: 4%;"><b>Cash&nbsp;&nbsp;</b>
            <input type="radio" name="pembayaran" value="card">&nbsp;&nbsp;<img src="img/card.png" style="width: 3%;"><b>Card&nbsp;&nbsp;</b>
            <input type="radio" name="pembayaran" value="other"><img src="img/cart.jpg" style="width: 4%;"><b>other&nbsp;&nbsp;</b><br><br>
            <br><br>
            <h3>Masukkan kode pembayaran
            <!-- tambahin hiasan kek tulisan kode pembayaran di dapat dari WA -->
            <!-- terus tambahin gambar WA -->
            <input type="number" name="kode" placeholder="Masukkan Kode Pembayaran">
            <input type="submit" name="submit" value="verifikasi" class="box-tambah"></h3> 
            <p>*kode pembayaran bisa didapatkan dengan menghubungi WhatsApp pada detail produk</p>
            <a href="cart.php" class="box-tambah" style="float: right;">Batal</a>
        </form>
            </div>
        </div>
    </div>
    <!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2023 - TokoSepatu.</small>
		</div>
	</footer>
    <script>
  feather.replace();
</script>

    </body>
</html>