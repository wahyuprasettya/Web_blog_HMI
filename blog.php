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
        <a class="navbar-brand" href="index.php">Blog HMI</a>
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
            $has = mysql_query("select * from artikel order by tgl_artikel desc");
            $num = mysql_num_rows($has);

            if($num<1){
              echo'<center><h4 class="my-4-text">Mohon Maaf Belum ada artikel ..<h4></center>';
            }else{
            while($data=mysql_fetch_array($has)){
              $art = substr($data['artikel'],0,100);
              echo '


                      <div class="card mb-4">
                        <img class="card-img-top" src="admin/foto/artikel/'.$data['image'].'" alt="Card image cap">
                        <div class="card-body">
                          <h2 class="card-title">'.$data['judul_artikel'].'</h2>
                          <p>'.$art.'..</p>
                          <a href="single.php?p='.$data['id'].'" class="btn btn-primary">Read More &rarr;</a>
                          <a href="#" class="btn btn-primary">Komentar</a>
                          
                        </div>
                        <div class="card-footer text-muted">
                          Posted on '.$data['tgl_artikel'].' by
                          '.$data['penulis_artikel'].'
                        </div>
                      </div>
                
                ';}
            }
            
            ?>
       

          

          <!-- Pagination -->
          <!-- <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul> -->

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <!-- <div class="card my-4">
            <h5 class="card-header">Pencarian</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div> -->

          <!-- Categories Widget -->
                  
          <div class="card my-4">
            <h5 class="card-header">List berita</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
            <?php
            include "koneksi.php";
            $has = mysql_query("select * from artikel order by tgl_artikel desc");
            $num = mysql_num_rows($has);

            if($num<1){
              echo'<center><h4 class="my-4-text">Maaf Belum ada artikel ..<h4></center>';
            }else{
            while($data=mysql_fetch_array($has)){
              // $art = substr($data['artikel'],0,100);
              echo '
                    <li>
                      <a href="#">'.$data['judul_artikel'].'</a>
                       </li>  
                
                ';}
            }
            
            ?>
       
                     
                    
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Online</h5>
            <div class="card-body">
             Pengunjung online :  <img src="http://hitwebcounter.com/counter/counter.php?page=6963336&style=0025&nbdigits=3&type=ip&initCount=0" title="Hit Web Stats" Alt="Hit Web Stats"   border="0" >                        
             </a> Orang
             <br/>
                        <a href="#" title="" target="_blank" style="font-family: ; font-size: px; color: #; text-decoration:  ;">
              </a>    
            </div>
          </div>

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
