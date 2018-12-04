<!DOCTYPE html>

<html>


<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:indexkuy.php'); }
   require_once("koneksi.php");
?>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | K-people</title>

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
          <a class="nav-link js-scroll-trigger" href="#log-in">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#log-in">Komunitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#log-in">Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#log-in">Login</a>
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
      <div class="intro-lead-in">Log in for more experience</div>            
    </div>
  </div>
</header>

<section id="log-in">
<div class="login-box">
<form method ="post" action="cek_log.php">
<h3>Silahkan Log in terlebih dahulu</h3>
<br>
<p>Username:</p>
<input type="text" name="username" placeholder="Enter username"><br/>
<p>Password:</p>
<input type="password" name="password" placeholder="Enter Password"><br/>
<input type="submit" name="btn-login" value="Login">
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