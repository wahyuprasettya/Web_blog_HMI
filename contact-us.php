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
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
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
  <center><h1>Lokasi HMI indonesia</h1></center>
  <br>
  <section>
  <center><script>
  function initialize() {
  
  var locations = [
    // ['<h5>Ibukota Provinsi Aceh</h5>', 6.9175, 107.6191],
    // ['<h5>Ibukota yogyakarta </h5>', 7.7956, 110.3695],
     ['<h5>HMI  </h5>',-6.5950181,106.7218509],
     ['<h5>HMI </h5>', -6.9032739, 107.5731164],
     ['<h5>HMI</h5>', -7.803164, 110.3398252],
    ['<h5>HMI</h5>', -6.179261, 106.811727]  
  
  ];
  var infowindow = new google.maps.InfoWindow();
 
  var options = {
    zoom: 8, 
    center: new google.maps.LatLng(-6.1870123,106.7735431),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
 
    // Pembuatan petanya
  var map = new google.maps.Map(document.getElementById('map_canvas'), options);
 
    var marker, i;
 // proses penambahan marker pada masing-masing lokasi yang berbeda
    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
   
      });
   
   // Menampilkan informasi pada masing-masing marker yang diklik 
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  
  };
 </script>
 

<body onload="initialize()">
  <div class="container" style="margin-top:10px"> 
      <div id="map_canvas" style="width: 700px; height: 600px;"></div>


       <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
    </script>
    
    </div>
  </div>
</div>
</section>
</center>
  <section id="contact-page">
    <div class="container">

      <div class="center">
      <style>
      h2 {
    color: black;
      }
  p{
    color:black;
  }
}
      </style>
      <br>
        <h2>Masukan permintaan informasi</h2>
        <p class="lead">Anda dapat mengirimi pesan untuk kami dalam memperoleh informasi !</p>
      </div>
      <div class="row contact-wrap">
        <div class="col-sm-8 col-sm-offset-2">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <?php
          
                $db = mysqli_connect('localhost', 'root', '', 'projekpbw');
                                    if(isset($_POST['kirim'])){
        
                                            $subjek = $_POST['subjek'];
                                            $pesan= $_POST['isi_pesan'];
                                            $pengirim = $_POST['pengirim'];
                                            $email = $_POST['email'];
                                $query = "INSERT INTO pesan (subjek,isi_pesan, pengirim, email)  VALUES('".$subjek."','".$pesan."', '".$pengirim."', '".$email."')";
                                $sql = mysqli_query($db,$query); 
                                if($sql){ 
                                  echo "<h2> <center> Pesan anda telah di kirim ! </center></h2>";
                                }else{
                                 
                                  echo "<h2><center>Maaf,sistem sedang Maintenance</center></h2>";
                                }
                              }
                        ?>  
          <form action="" method="post" role="form">
            <div class="form-group">
              <input type="text" name="pengirim" class="form-control" id="name" placeholder="Your Name"data-msg="Please enter at least 4 chars"/>
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subjek" id="subject" placeholder="Subject"  data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="isi_pesan" rows="5" data-msg="Please write something for us" placeholder="Message"></textarea name="pesan">
              <div class="validation"></div>
            </div>

            <div class="text-center"><button type="submit" class="btn btn-primary btn-lg" name ="kirim">Send Message</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  
  <!--/#contact-page-->

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
            &copy; Gp Theme. All Rights Reserved.
            <div class="credits">
             
              <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="js/main.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
