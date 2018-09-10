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
  <!-- =======================================================
    Theme Name: Gp
    Theme URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-templat/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
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

  <section id="portfolio">
    <div class="container">
      <div class="center">
        <h2>Galeri</h2>
        <p class="lead">Galeri ini merupakan dokumentasi  <br> yang kami abadikan dari kegiatan-kegiatan kami di HMI</p>
      </div>

<hr>
<?php
include "koneksi.php";
$has = mysql_query("select * from foto order by id desc");
$num = mysql_num_rows($has);

if($num<1){
	echo'<center>Tidak Ada Foto</center>';
}else{
while($data=mysql_fetch_array($has)){
	
   echo '
   <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="admin/foto/galeri/'.$data['foto'].'" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">'.$data['nama'].'</a> </h3>
                <p>'.$data['keterangan'].'</p>
                <a class="preview" href= "admin/foto/galeri/'.$data['foto'].'" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>
		 ';}
}
?>
      
          <!--/.portfolio-item-->

        </div>
      </div>
    </div>
  </section>
  <!--/#portfolio-item-->

  <section id="bottom">
      <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="widget">
              <h3>Menu</h3>
              <ul>
                <!-- <li><a href="#">About us</a></li>
                <li><a href="#">We are hiring</a></li>
                <li><a href="#">Meet the team</a></li>
                <li><a href="#">Copyright</a></li> -->
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
