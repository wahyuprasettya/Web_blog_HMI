<?php

include "koneksi.php";
$id = $_GET['id'];

$judulartikel = $_POST['judul_artikel'];
$artikel = $_POST['artikel'];
$penulisartikel = $_POST['penulis_artikel'];

if(isset($_POST['ubah_foto'])){ 
  $foto = $_FILES['image']['name'];
  $tmp = $_FILES['image']['tmp_name'];
  
 
  $fotobaru = date('dmYHis').$foto;
  
  
  $path = "foto/artikel/".$fotobaru;
  
  if(move_uploaded_file($tmp, $path)){ 
    $query = "SELECT * FROM artikel WHERE id='".$id."'";
    $sql = mysqli_query($db, $query); 
    $data = mysqli_fetch_array($sql); 
   
    if(is_file("foto/artikel/".$data['image'])) 
      unlink("foto/artikel/".$data['image']); 
    
   
    $query = "UPDATE artikel SET judul_artikel='".$judulartikel."', artikel='".$artikel."', penulis_artikel='".$penulisartikel."', image='".$fotobaru."' WHERE id='".$id."'";
    $sql = mysqli_query($db, $query); 
    if($sql){ 
      header("location: berita.php"); 
    }else{
     
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='update_artikel.php'>Kembali Ke Form</a>";
    }
  }else{
   
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='update_artikel.php'>Kembali Ke Form</a>";
  }
}else{ 
$query = "UPDATE artikel SET judul_artikel='".$judulartikel."', artikel='".$artikel."', penulis_artikel='".$penulisartikel."' WHERE id='".$id."'";
  $sql = mysqli_query($db, $query);
  if($sql){ 
    header("location: berita.php"); 
  }else{
    
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='update_artikel.php'>Kembali Ke Form</a>";
  }
}
?>