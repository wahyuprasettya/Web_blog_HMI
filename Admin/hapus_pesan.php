<?php
include "koneksi.php";
$id= $_GET['id'];

$query = "SELECT * FROM pesan WHERE pesan.id_pesan='".$id."'";
$sql = mysqli_query($db, $query); 
$data = mysqli_fetch_array($sql);

$query2 = "DELETE FROM pesan WHERE pesan.id_pesan ='".$id."'";
$sql2 = mysqli_query($db, $query2);

if($sql2){ 
  
   header("location: pesan.php"); 
}else{
 
  echo "Data gagal dihapus. <a href='pesan.php'>Kembali</a>";
  
}
?>
