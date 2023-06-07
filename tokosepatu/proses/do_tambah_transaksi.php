<?php
    session_start();
    include "../db.php";
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?> 
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Keranjang Saya</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
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
		</div>
	</header>
        <!--content-->
        <div class="section">
		<div class="container">
        <div class="box">
        <h3>Checkout</h3><br>
        <?php
            if(!empty($_SESSION["cart"])){
               ?>
                <table border="1" cellspacing="0" class="table">
                    <tr>
                        <td width="60px">No.</td>
                        <td>Nama</td>
                        <td>Harga</td>
                        <td>Jumlah</td>
                        <td>Subtotal</td>
                    </tr>
                    <?php
                        $no=1;
                        $grandtotal= 0;
                        foreach($_SESSION["cart"] as $cart => $val){
                            $subtotal = $val["harga"] * $val["jumlah"];
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $val["nama"]; ?></td>
                                <td><?php echo $val["harga"]; ?></td>
                                <td><?php echo $val["jumlah"]; ?> pcs</td>
                                <td><?php echo $subtotal; ?></td>
                            </tr>
                            <?php
                            $grandtotal+=$subtotal;
                        }
                    ?>
                    <tr>
                        <td>
                            <td colspan="3">Grand Total</td>
                            <td colspan="2"><?php echo $grandtotal; ?> </td>
                        </td>
                    </tr>
                </table>
                <br>
                <a href="../cart.php" class="box-tambah" style="float: right;">Batal</a>
                <a href="../pembayaran.php" class="box-tambah" style="float: right;">Bayar</a>
                </div>
		</div>
	</div>
    <?php
            } else{
                echo "Belum ada produk di Keranjang Anda";
            }
        ?>
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