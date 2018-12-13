<!DOCTYPE html>

<html lang="en">

<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php');} 
 else { 
   $username = $_SESSION['username']; 
}
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>K-people</title>

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
    <header class="masthead" id="beranda">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Community!</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
        </div>
      </div>
    </header>

    <!-- Komunitas -->
    <section class="bg-light" id="komunitas">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Komunitas</h2>
            <h3 class="section-subheading text-muted">Lets have fun !.</h3>
        <h3 class="minor-subheading">Mau Komunitas kamu di posting? Klik tombol di bawah ini</h3>
        <input type='button' value='Daftarkan Komunitasmu' onClick='top.location="form_komunitas.php"'>
       <br>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1komunitas">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">    
            </a>
            <div class="portfolio-caption">
              <h4>ADDHAMEDA NATION</h4>
              <p class="text-muted">Dance Cover</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2komunitas">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/07-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>STRAY KIDS SURABAYA</h4>
              <p class="text-muted">Fandom</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3komunitas">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>IFLS CULTURE</h4>
              <p class="text-muted">Management</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4komunitas">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>IXORA DC</h4>
              <p class="text-muted">Dance Cover</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5komunitas">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>VALKYRIE DC</h4>
              <p class="text-muted">Dance Cover</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6komunitas">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>FLAWLESS DANCE ENTERTAIMENT</h4>
              <p class="text-muted">Management</p>
            </div>
          </div>
        </div>
      </div>
    </section>

        <!-- Event -->
    <section class="bg-light" id="event">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Event</h2>
            <h3 class="section-subheading text-muted">Lets have fun again!</h3>
            <h3 class="minor-subheading">Mau promosi event kamu? Klik tombol di bawah ini</h3>
        <input type='button' value='Daftarkan Eventmu' onClick='top.location="form_event.php"'>
          <br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/08-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>KCF AWARDS 2018</h4>
              <p class="text-muted">Competition</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/09-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>INEFFABLE MOMENT</h4>
              <p class="text-muted">Gathering</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/10-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>KOREAN DANCE CHAMPIONSHIP ROOKIE WAR</h4>
              <p class="text-muted">Competition</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/11-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>DUO KIM DAY</h4>
              <p class="text-muted">Gathering</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/12-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>THE K-COLLOSAL</h4>
              <p class="text-muted">Competition</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/13-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>4TH GATHERING NCTZEN MALANG</h4>
              <p class="text-muted">Gathering</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  <section class="bg-light" id="kontak">
  <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Punya pertanyaan?</h3>
        <h3 class="minor-subheading">Hubungi kami lewat media sosial berikut, atau tinggalkan pesan <a href="kontak.php">disini</a></h3>
          <br>
          <div class="row">
          <div class="col-md-3 col-sm-5 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-icon" src="img/portfolio/index.png" alt="">   
            <h6>@lalala</h6>
          </div>
          <div class="col-md-3 col-sm-5 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
          <img class="img-icon" src="img/portfolio/index2.png" alt="">   
            <h6>@lalala</h6>
          </div>
          <div class="col-md-3 col-sm-5 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
          <img class="img-icon" src="img/portfolio/index3.jpg" alt="">   
            <h6>@lalala</h6>
          </div>
          <div class="col-md-3 col-sm-5 portfolio-item">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
          <img class="img-icon" src="img/portfolio/index4.jpg" alt="">   
            <h6>@lalala</h6>
          </div>
          </div>
          </div>
        </div>
        </div>
  </section>

    <!-- Footer -->
    <footer>
      <div class="container">
            <span class="copyright">Copyright &copy; K-People 2018</span>
          </div>
    </footer>
  </body>
</html>
