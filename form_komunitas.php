<!DOCTYPE HTML>  
<html>

<?php
include 'koneksi.php';


$emailErr = "";
$email_valid = true;
$valid_email_konfirm_msg = "";

if (@$_POST['btn-kom']) {

  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_valid = false;
    $valid_email_konfirm_msg = "Format email salah.<br>"; 
  }
  $line = $_POST['line'];
  $instagram = $_POST['instagram'];
  $twitter = $_POST['twitter'];
  $deskripsi = $_POST['deskripsi'];
  $folder = './img_komunitas/';
  $name_p = $_FILES['foto']['name'];
  $sumber_p = $_FILES['foto']['tmp_name'];
  move_uploaded_file($sumber_p,$folder.$name_p);
  if($email_valid){
  mysqli_query($connect, "INSERT INTO komunitas (nama,alamat,email,line,instagram,twitter,deskripsi,foto) VALUES ('$nama','$alamat','$email','$line','$instagram','$twitter','$deskripsi','.$name_p.')");
  unset($_POST);
  unset($_POST['email']);
}
  }
 ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Daftar Komunitas | K-people</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="agency.css" rel="stylesheet">
</head>
<body id="page-top">
<!-- Navigation -->
<nav class="p-1 navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">K-people</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="indexkuy.php #beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="indexkuy.php #komunitas">Komunitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="indexkuy.php #event">Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="indexkuy.php #kontak">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<header class="masthead">
  <div class="container">
    <div class="intro-text">
      <div class="intro-heading text">Welcome To Our Community!</div>
      <div class="intro-lead-in">Haven't an Account? Sign up here</div>            
    </div>
  </div>
</header>

<section id="form-komunitas">
<div class="login-box">
<form method ="post" enctype="multipart/form-data">
<h3>Isi formulir di bawah ini untuk mendaftarkan komunitasmu</h3>
<br>Jangan sampai ada yang kosong ya :)
<br>
<br>
<p>Nama Komunitas :</p>
<input type="text" name="nama"><br/>
<p>Alamat :</p>
<input type="text" name="alamat"><br/>
<p>Email :</p>
<input type="text" name="email" value="<?php echo $email; ?>"><br>
		<?php echo $emailErr.$valid_email_konfirm_msg; ?><br/>
<p>ID LINE :</p>
<input type="text" name="line"><br/>
<p>Instagram :</p>
<input type="text" name="instagram"><br/>
<p>Twitter :</p>
<input type="text" name="twitter"><br/>
<p>Deskripsi :</p>
<input type="text" name="deskripsi"><br/>
<p>Foto:</p>
<input type="file" name="foto"><br/>
<input type="submit" name="btn-kom" value="Kirim">
</form>

</div>
</section>
</body>

    <!-- Footer -->
    <footer>
      <div class="container">
            <span class="copyright">Copyright &copy; K-People 2018</span>
          </div>
          </footer>
</html>
