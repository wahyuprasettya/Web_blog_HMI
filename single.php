<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home</title>

    <!-- Bootstrap core CSS -->
    <link href="blog-css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog-css/css/blog-home.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">

  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Blog HMI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-us.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.php">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-us.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4-text"><center>Blog<center>
            <hr>
          </h1>
          <!-- Blog Post -->
                <?php
                include "koneksi.php";
                $id = $_GET['p'];
                $hasil = mysql_query("select * from artikel where id='$id'");
                $data=mysql_fetch_array($hasil);
                $file = 'admin/images/'.$data['image'].'';
                if ($file =="admin/images/"){
                echo '

                            <div class="card mb-4">
                            <img class="card-img-top" src="admin/foto/artikel/'.$data['image'].'" alt="Card image cap">
                            <div class="card-body">
                              <h2 class="card-title">'.$data['judul_artikel'].'</h2>
                              <p>'.$data['artikel'].'</p>
                            </div>
                            <div class="card-footer text-muted">
                              Posted on '.$data['tgl_artikel'].' by
                              '.$data['penulis_artikel'].'
                            </div>
                            </div>
                                  
                        

                ';}
                else {
                echo '
                          
                            <div class="card mb-4">
                            <img class="card-img-top" src="admin/foto/artikel/'.$data['image'].'" alt="Card image cap">
                            <div class="card-body">
                              <h2 class="card-title">'.$data['judul_artikel'].'</h2>
                              <p>'.$data['artikel'].'</p>
                            </div>
                            <div class="card-footer text-muted">
                              Posted on '.$data['tgl_artikel'].' by
                              '.$data['penulis_artikel'].'
                              
                            </div>
                            </div> 
                                                   
                ';}
                ?>
                
                <a href="http://www.facebook.com/sharer.php?u=http://http://localhost:8080/pbw/p/advertiser-page.html" target="_blank">Share To Facebook</a>
          <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
              <li class="page-item">
                <a class="page-link" href="blog.php">&larr; Kembali</a>
              </li>          
          </ul>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <!-- <div class="card my-4">
            <h5 class="card-header">Komentar</h5>
            <div class="card-body">
              <div class="input-group">
                </span>
              </div>
            </div>
          </div> -->

          
          <!-- Side Widget
          <div class="card my-4">
            <h5 class="card-header">Online</h5>
            <div class="card-body">
             Pengunjung online : 2 
            </div>
          </div> -->

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; HMI - ESA UNGGUL - BLOG <?php echo date('Y'); ?></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="blog-css/vendor/jquery/jquery.min.js"></script>
    <script src="blog-css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
