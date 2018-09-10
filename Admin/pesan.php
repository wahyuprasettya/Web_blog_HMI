<?php
session_start();
?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin HMI - ESA UNGGUL</title>
	
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../images/admin.ico">
    
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
                <a class="navbar-brand" href="index.php">Admin</a> 
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
                    <li>
                        <a  href="index.php"><i class="fa fa-camera fa-3x"></i> Tambah Foto </a>
                    </li>
                    <li>
                    <a  href="artikel.php"><i class="fa fa-edit fa-3x"></i> Tambah Artikel </a>
                    </li>
                    <li>
                        <a href="baner.php"><i class="fa fa-image fa-3x"></i>Tambah baner</a>
                    </li> 
                    <li>
                    <a href="berita.php"><i class="fa fa-newspaper-o fa-3x"></i>Daftar Berita</a>
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
                        <h5>Selamat datang Bpk. <?php echo $_SESSION['username'];?> </h5>

                       
                    </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                           Berita
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    
                                    
                                                <table class="table table-bordered">
                                                
                                                   
                                                    <thead class="thead-dark">
                                                        <tr>
                                                        <th scope="col">pengirim</th>
                                                        <th scope="col">subjek</th>
                                                        <th scope="col">pesan</th>
                                                        <th scope="col">waktu</th>
                                                        <th scope="col">Aksi_Hapus</th>
                                                        </tr>
                                                    </thead>
                                                    <?php
                                                    include "koneksi.php";
                                                    $query = "SELECT * FROM pesan"; 
                                                    $sql = mysqli_query($db, $query); 
                                                    while($data = mysqli_fetch_array($sql)){ 
                                                        echo "<tr>";
                                                        echo "<td>".$data['pengirim']."</td>";
                                                        echo "<td>".$data['subjek']."</td>";
                                                        echo "<td>".$data['isi_pesan']."</td>";
                                                        echo "<td>".$data['tanggal']."</td>";
                                                        echo "<td><a href='hapus_pesan.php?id=".$data['id_pesan']."'>Hapus</a></td>";
                                                        echo "</tr>";
                                                        
                                                    }
                                                    ?>          
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