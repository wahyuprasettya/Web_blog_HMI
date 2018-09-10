<?php
include "koneksi.php";
$id= $_GET['id'];

$query = "SELECT * FROM foto WHERE foto.id='".$id."'";
$sql = mysqli_query($db, $query); 
$data = mysqli_fetch_array($sql);
if(is_file("foto/galeri/".$data['image'])) 
  unlink("foto/galeri/".$data['image']); 
$query2 = "DELETE FROM foto WHERE foto.id ='".$id."'";
$sql2 = mysqli_query($db, $query2);

if($sql2){ 
  
   header("location: index.php"); 
}else{
 
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
  
}
?>