
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TokoSepatu || Registrasi</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!--header-->
    <header>
      <div class="container">
        <h1><a>TokoSepatu</a></h1>
      </div>
    </header>
    <!--content-->
    <div class="section">
      <div class="container">
        <h3>Registrasi Akun</h3>
        <div class="box">
          <form action="signupproses.php" method="GET">
              Nama Pembeli
              <input type="text" name="nama" size="20" placeholder="Nama Lengkap" class="input-control"/>
              Email Pembeli    
              <input type="email" name="email" size="20" placeholder="Email Anda" class="input-control" />
              No Telepon
              <input type="number" name="telepon" size="20" placeholder="No Telepon" class="input-control"/>
              Alamat
              <input type="text" name="alamat" cols="30" rows="10" placeholder="Alamat" class="input-control">
              Kode Pos
              <input type="text" name="kodepos" size="20" placeholder="Kode Pos" class="input-control"/>
              Masukkan Username
              <input type="text" name="username" size="20" placeholder="Username" class="input-control"/>
              Masukkan Password
              <input type="password" name="password" size="20" placeholder="Password" class="input-control"/>
              <input type="submit" name="submit" size="20" class="btn" />
            </td>
          </form>
        </div>
      </div>
    </div>
    <!-- footer -->
<footer>
		<div class="container">
			<small>Copyright &copy; 2023 - TokoSepatu.</small>
		</div>
  </body>
</html>
