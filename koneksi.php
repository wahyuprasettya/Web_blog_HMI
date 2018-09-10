<?php  
$server= "finaltugaspbw.000webhostapp.com";  
$username = "id6299777_wahyuadjie";   
$password = "wahyuadjie";   
$database = "id6299777_final";  


// ini_set('display_errors',FALSE);
// $tanggal=date("Y-m-d H:i:s");
$koneksi= mysql_connect($server,$username,$password) or die ("Koneksi Gagal");  
mysql_select_db($database) or die ("Database Tidak Bisa Di Buka " );  
  
?>