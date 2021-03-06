<!DOCTYPE HTML>  
<html>

<?php
include 'koneksi.php';

	// Membuat variabel
	$username="";
	$password = "";
	$pass_komfrim = "";
	$usernameErr = "";
	$passErr = "";
	$username_valid = true;
	$username_valid_msg = "";
	$valid_panjang_pass = true;
	$valid_pass_konfirm = true;
	$valid_panjang_pass_msg = "";
	$valid_pass_konfirm_msg = "";
	$email = "";
	$emailErr = "";
	$email_valid = true;
	$valid_email_konfirm_msg = "";
	
	// Cek form sudah di klik submit/belum
	if(isset($_POST['btn-signup'])){
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
		$password = trim($_POST['password']);
		
		// Cek input kosong
		if(empty($username)){
			$usernameErr = "Username masih kosong.<br>";
    }
    if(strlen($password) < 8){
			$valid_panjang_pass = false;
			$valid_panjang_pass_msg = "Password minimal 8 digit.<br>";
		}
    if(empty($email)){
			$emailErr = "Email masih kosong.<br>";
		}
		if(empty($password)){
			$passErr = "Password masih kosong.<br>";
		}

		// cek input email, apakah sesuai atau tidak
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$email_valid = false;
			$valid_email_konfirm_msg = "Format email salah.<br>"; 
		}
		
		// Cek semua input sudah diisi apa belum
		if(!empty($username) and !empty($password) and $email_valid){
    $insert=mysqli_query($connect, "INSERT INTO login (username,email,password) VALUES ('$username','$email','$password')");
    if($insert){
      header('Location:login.php');
  }
}
  }
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sign Up | K-people</title>

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
          <a class="nav-link js-scroll-trigger" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Komunitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="form.php">Sign Up</a>
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

<section id="sign-up">
<div class="login-box">
<form method="post" action="form.php">
  <h3>Silahkan Daftar di sini</h3>
  <br>
  <p>Username: <input type="text" name="username" value="<?php echo $username; ?>"><br>
		<?php echo $usernameErr.$username_valid_msg; ?>
  <br></p>
  <p>E-mail: <input type="text" name="email" value="<?php echo $email; ?>"><br>
		<?php echo $emailErr.$valid_email_konfirm_msg; ?>
  <br></p>
  <p>Password: <input type="password" name="password" value="<?php echo $password; ?>"><br>
		<?php echo $passErr.$valid_panjang_pass_msg; ?>
  <br></p>
  <br>
  <input type="submit" name="btn-signup" value="Sign up">
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
