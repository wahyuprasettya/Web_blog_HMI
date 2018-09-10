<?php
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "anda harus login dahulu";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<?

session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin HMI - ESA UNGGUL</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../images/admin.ico">
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
font-size: 16px;"> Last access :<?php echo date('d F Y');?> &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                    <!-- <li>
                    <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Daftar User</a>
                    </li> -->
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




</style>
<script type="text/javascript">
$(document).ready(function(){
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();
    
    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function(){
        if(this.checked){
            checkbox.each(function(){
                this.checked = true;                        
            });
        } else{
            checkbox.each(function(){
                this.checked = false;                        
            });
        } 
    });
    checkbox.click(function(){
        if(!this.checked){
            $("#selectAll").prop("checked", false);
        }
    });
});
</script>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin</h2>   
                        <h5>Selamat datang Bpk. <?php echo $_SESSION['username'];?> </h5>
                       
                    </div>
                </div>
     <div class="row">
         <div class="col-md-12">
                    <!-- Advanced Tables -->
             <div class="panel panel-default">
                 <div class="panel-heading">
                    Galeri
                   </div>
                 <div class="panel-body">
                    <div class="table-title">
                    <div class="row">
                    <div class="col-sm-6">    

                  <?php
                                include('koneksi.php');
                                    if(isset($_POST['simpan'])){
                                            $nama = $_POST['nama'];
                                            $keterangan = $_POST['keterangan'];
                                            $foto = $_FILES['foto']['name'];
                                            $tmp = $_FILES['foto']['tmp_name'];
                                            
                                            $fotobaru = date('dmYHis').$foto;

                                            $path = "foto/galeri/".$fotobaru;
                            if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
                                // Proses simpan ke Database
                                $query = "INSERT INTO foto (nama, foto , keterangan)  VALUES('".$nama."', '".$fotobaru."', '".$keterangan."')";
                                $sql = mysqli_query($db,$query); // Eksekusi/ Jalankan query dari variabel $query
                                if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                                   echo"<script> alert('Data berhasil di simpan');
                                   window.location='index.php'; </script>";
                                //   header("location: index.php"); // Redirect ke halaman index.php
                                }else{
                                  // Jika Gagal, Lakukan :
                                  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                                }
                              }else{
                                // Jika gambar gagal diupload, Lakukan :
                                echo "Maaf, Gambar gagal untuk diupload.";
                                
                              }
                            }
                         
                        ?>  
                    <form method="POST" action="index.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                        <label>Nama Foto</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Masukan gambar</label>
                                        <input type="file"  name="foto" id="foto" />
                                        </div>
                                        <div class="form-group">
                                        <textarea name="keterangan" id="keterangan" cols="" rows="8" class="form-control"></textarea>
                                        </div>
                                        <button type="Submit" class="btn btn-primary" name="simpan">Simpan</button>
                                    </form>    
                        </div>
                    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
     <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Galeri
                            </div>
                                <div class="panel-body">
                                 <div class="row">
                                    <div class="col-md-6">
                                     <table class="table table-bordered">                 
                                                <thead class="thead-dark">
                                                    <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Foto</th>
                                                    <th scope="col">keterangan</th>
                                                    <th scope="col">Aksi_hapus</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                include "koneksi.php";
                                                $query = "SELECT * FROM foto"; 
                                                $sql = mysqli_query($db, $query); 
                                                while($data = mysqli_fetch_array($sql)){ 
                                                    echo "<tr>";
                                                    echo "<td>".$data['id']."</td>";
                                                    echo "<td>".$data['nama']."</td>";
                                                    echo "<td><img src='foto/galeri/".$data['foto']."' width='100' height='100'></td>";
                                                    echo "<td>".$data['keterangan']."</td>";
                                                    echo "<td><a href='hapus_foto.php?id=".$data['id']."'>Hapus</a></td>";
                                                    echo "</tr>";
                                                    
                                                }?>


                </div>

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
