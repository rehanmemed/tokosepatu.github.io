<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}

	$query = mysqli_query($conn, "SELECT * FROM tb_pembeli WHERE id_pembeli = '".$_SESSION['id']."' ");
	$d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
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

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Profil</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->nama_pembeli ?>" required>
					<input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username_pembeli ?>" required>
					<input type="text" name="hp" placeholder="No Hp" class="input-control" value="<?php echo $d->telp_pembeli ?>" required>
					<input type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $d->email_pembeli ?>" required>
					<input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->address_pembeli ?>" required>
                    <input type="text" name="kodepos" placeholder="Kode Pos" class="input-control" value="<?php echo $d->kode_pos ?>" required>
					<input type="submit" name="submit" value="Ubah Profil" class="btn">
				</form>
				<?php 
					if(isset($_POST['submit'])){

						$nama 	= ucwords($_POST['nama']);
						$user 	= $_POST['user'];
						$hp 	= $_POST['hp'];
						$email 	= $_POST['email'];
						$alamat = ucwords($_POST['alamat']);
                        $kodepos 	= $_POST['kodepos'];

						$update = mysqli_query($conn, "UPDATE tb_pembeli SET 
										nama_pembeli = '".$nama."',
										username_pembeli = '".$user."',
										telp_pembeli = '".$hp."',
										email_pembeli = '".$email."',
										address_pembeli = '".$alamat."',
                                        kode_pos = '".$kodepos."'
										WHERE id_pembeli = '".$d->id_pembeli."' ");
						if($update){
							echo '<script>alert("Ubah data berhasil")</script>';
							echo '<script>window.location="profiluser.php"</script>';
						}else{
							echo 'gagal '.mysqli_error($conn);
						}

					}
				?>
			</div>

			<h3>Ubah Password</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
					<input type="password" name="pass2" placeholder="Konfirmasi Password Baru" class="input-control" required>
					<input type="submit" name="ubah_password" value="Ubah Password" class="btn">
				</form>
				<?php 
					if(isset($_POST['ubah_password'])){

						$pass1 	= $_POST['pass1'];
						$pass2 	= $_POST['pass2'];

						if($pass2 != $pass1){
							echo '<script>alert("Konfirmasi Password Baru tidak sesuai")</script>';
						}else{

							$u_pass = mysqli_query($conn, "UPDATE tb_pembeli SET 
										password_pembeli = '".MD5($pass1)."'
										WHERE id_pembeli = '".$d->id_pembeli."' ");
							if($u_pass){
								echo '<script>alert("Ubah data berhasil")</script>';
								echo '<script>window.location="profiluser.php"</script>';
							}else{
								echo 'gagal '.mysqli_error($conn);
							}
						}

					}
				?>
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