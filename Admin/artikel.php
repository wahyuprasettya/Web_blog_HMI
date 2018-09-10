<?php
session_start();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../images/admin.ico">
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access :<?php echo date('d F Y');?> &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li  >
                        <a  href="index.php"><i class="fa fa-camera fa-3x"></i> Tambah Foto </a>
                    </li>
                    <li  >
                        <a  href="artikel.php"><i class="fa fa-edit fa-3x"></i> Tambah Artikel </a>
                    </li>
                    <li>
                        <a href="baner.php"><i class="fa fa-image fa-3x"></i>Tambah baner</a>
                    </li> 
                    <li>
                    <a href="berita.php"><i class="fa fa-newspaper-o fa-3x"></i>Daftar Berita</a>
                </li>	
                <li>
                    <a href="pesan.php"><i class="fa fa-envelope-o fa-3x"></i>Pesan</a>
                </li>						
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin</h2>   
                        <h5>Selamat datang  <?php echo $_SESSION['username'];?> </h5>
                       
                    </div>
                </div>
                 <div class="panel panel-default">
                        <div class="panel-heading">
                            Posting berita
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                       
                                <?php
                                include('koneksi.php');
                                    if(isset($_POST['upload'])){
                                            $judulartikel = $_POST['judul_artikel'];
                                            $penulis_artikel = $_POST['penulis_artikel'];
                                            $artikel = $_POST['artikel'];
                                            $foto = $_FILES['image']['name'];
                                            $tmp = $_FILES['image']['tmp_name'];
                                            
                                            $fotobaru = date('dmYHis').$foto;

                                            $path = "foto/artikel/".$fotobaru;
                            if(move_uploaded_file($tmp, $path)){ 
                                
                                $query = "INSERT INTO artikel (judul_artikel,artikel, penulis_artikel, image)  VALUES('".$judulartikel."','".$artikel."', '".$penulis_artikel."', '".$fotobaru."')";
                                $sql = mysqli_query($db,$query); 
                                if($sql){ 
                                   echo"<script> alert('Data berhasil di simpan');
                                   window.location='berita.php'; </script>";
                                
                                }else{
                                 
                                  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                                }
                              }else{
                                
                                echo "Maaf, Gambar gagal untuk diupload.";
                                
                              }
                            }
                         
                        ?>  
                        <form method="POST" action="artikel.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                        <label>Judul Artikel</label>
                                        <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Masukan gambar</label>
                                        <input type="file"  name="image" id="image" />
                                        </div>
                                        <div class="form-group">
                                        <textarea name="artikel" id="artikel" cols="" rows="8" class="form-control"></textarea>
                                        </div>
                                        <label>Nama anda</label>
                                        <input type="text" id="penulis_artikel" class="form-control" name="penulis_artikel" required>
                                        <br>
                                        <button type="Submit" class="btn btn-primary" name="upload">Simpan</button>
                                    </form>    
                            </div>
                            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
