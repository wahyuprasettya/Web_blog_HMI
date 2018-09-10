<?php
include "koneksi.php";
$id= $_GET['id'];

$query = "SELECT * FROM baner WHERE baner.id='".$id."'";
$sql = mysqli_query($db, $query); 
$data = mysqli_fetch_array($sql);
if(is_file("foto/baner/".$data['image'])) 
  unlink("foto/baner/".$data['image']); 
$query2 = "DELETE FROM baner WHERE baner.id ='".$id."'";
$sql2 = mysqli_query($db, $query2);

if($sql2){ 
  
   header("location: baner.php"); 
}else{
 
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
  
}
?>
