<?php
include "koneksi.php";
$id= $_GET['id'];

$query = "SELECT * FROM artikel WHERE artikel.id='".$id."'";
$sql = mysqli_query($db, $query); 
$data = mysqli_fetch_array($sql);
if(is_file("foto/artikel/".$data['image'])) 
  unlink("foto/artikel/".$data['image']); 
$query2 = "DELETE FROM artikel WHERE artikel.id ='".$id."'";
$sql2 = mysqli_query($db, $query2);

if($sql2){ 
  
   header("location: berita.php"); 
}else{
 
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
  
}
?>
