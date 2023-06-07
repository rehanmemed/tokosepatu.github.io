<?php  
session_start();
include 'db.php';
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';
}

    $jenis_pembayaran= $_POST['pembayaran'];
    $kode_pembayaran = $_POST['kode'];
    $tanggal = date('Y-m-d');

    $query=mysqli_query($conn, "INSERT INTO tb_detailpembayaran
            VALUES('','$jenis_pembayaran','$kode_pembayaran','$tanggal')")
            or die(mysqli_error($conn));
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
				<li><a href="index.php"><i data-feather="home"></i></a></li>
			</ul>
		</div>
	</header>
    <!--detail pembayran-->
    <div class="section">
		<div class="container">
			<div class="box">
            <h3>Detail Pembayaran</h3>
        <br><br>
       <h4> Jenis Pembayaran :
        <?php echo $jenis_pembayaran;  ?></h4>
        <br><br>
        <h4>Kode Pembayaran :
        <?php echo $kode_pembayaran; ?></h4>
        <br><br>
        <h4>Tanggal Pembayaran :
        <?php echo $tanggal; ?></h4>
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
    