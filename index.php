<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HMI-Esaunggul</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/favicon.ico">

</head>

<body class="homepage">
  <header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                  <img src="images/logo.png" width="40" height="70" class="d-inline-block align-top" alt=""></a>
                  <a class="navbar-brand" href="index.php"><h2>Esa unggul</h2></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
              
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="portfolio.php">Galeri</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact-us.php">Contact</a></li>
          </ul>
          
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->

  </header>
  <!--/header-->

  <div class="slider">
    <div class="container">
      <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators visible-xs">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="images/slide1.jpeg" class="img-responsive" alt="">
            </div>
            <div class="item">
              <img src="images/slide2.jpeg" class="img-responsive" alt="">
            </div>
            <div class="item">
              <img src="images/slide3.jpeg" class="img-responsive" alt="">
            </div>
          </div>

          <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>

          <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
        </div>
         <!--/#carousel-slider-->
      </div>
      <!--/#about-slider-->
    </div>
  </div>

  <section id="feature">
    <div class="container">
      <div class="center wow fadeInDown">
        <h2>HMI ESA UNGGUL</h2>
        <hr>
        <p class="lead">Organisasi kemahasiswaan islam indonesia yang berada di universitas esa unggul</p>
      </div>

      <div class="row">
        <div class="features">
          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="feature-wrap">
              <i class="fa fa-gears"></i>
              <h2>Menjalin Silaturahmi</h2>
              <h3>Menjalin silaturahmi dan ukhuwah islamiyah antar anggota</h3>
            </div>
          </div>
          <!--/.col-md-4-->

          <!--/.col-md-4-->

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="feature-wrap">
              <i class="fa fa-gears"></i>
              <h2>Visi & misi </h2>
              <h3>Ikut membangun nusantara dalam ukuwah islamiyah</h3>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="feature-wrap">
              <i class="fa fa-mortar-board"></i>
              <h2>Mahasiswa</h2>
              <h3>Peran kami yang sebagai mahasiswa yang ikut membangun nusantara</h3>
            </div>
          </div>
    </div>
  </section>
  <!--/#feature-->

  <section id="recent-works">
    <div class="container">
      <div class="center wow fadeInDown">
        <h2>Foto Populer</h2>
        <hr>
      </div>

<?php
include "koneksi.php";
$has = mysql_query("select * from baner order by id desc");
$num = mysql_num_rows($has);

if($num<1){
	echo'<center>Tidak Ada Foto</center>';
}else{
while($data=mysql_fetch_array($has)){
	
   echo '
   <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="admin/foto/baner/'.$data['foto'].'" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">'.$data['nama'].'</a> </h3>
                <p>'.$data['keterangan'].'</p>
                <a class="preview" href= "admin/foto/baner/'.$data['foto'].'" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>
		
		 ';}
}
?>
      
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#recent-works-->

  <section id="middle">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 wow fadeInDown">
          <!--  -->
          </div>

        </div>
        <!--/.col-sm-6-->
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#middle-->

  <section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Menu</h3>
            <ul>
              <li><a href="#">About us</a></li>
              <li><a href="#">We are hiring</a></li>
              <li><a href="#">Meet the team</a></li>
              <li><a href="#">Copyright</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Tugas</h3>
            <ul>
              <li><a href="#">Tugas 1</a></li>
              <li><a href="#">Tugas 2</a></li>
              <li><a href="#">Tugas 3</a></li>
              <li><a href="#">Tugas 4</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Pengembang</h3>
            <ul>
              <li><a href="#">Front developer</a></li>
              <li><a href="#">Database Enginer</a></li>
              <li><a href="#">Backend Developer</a></li>
              <li><a href="#">Pengunjung Hari ini :<? echo $visit." Orang"?></a></li>
              <h3></h3>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Anggota Kelompok</h3>
            <ul>
              <li><a href="#">Wahyu adjie prasetyo</a></li>
              <li><a href="#">Andre Kurniawan</a></li>
              <li><a href="#">Gihfar pramadan</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->
      </div>
    </div>
  </section>
  <!--/#bottom-->

  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="social">
            <ul class="social-share">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </div>
  <!--/.top-bar-->

  <footer id="footer" class="midnight-blue">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          &copy; HMI-ESA UNGGUL <?php echo date('Y'); ?>. All Rights Reserved.
          <div class="credits">     
          </div>
        </div>
  </footer>
  <!--/#footer-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
