<?php
echo "Email :" . $_GET['email'] ."<br>";
echo "PASS : " . $_GET['password'] ."<br>";

include "db.php" ;

$log="SELECT * FROM login where email='$_GET[email]'  and password='$_GET[password]' " ;
$logry=mysqli_query($conn, $log) ; 
$lq=mysqli_num_rows($logry) ;

 if($lq > 0){ 
      $data= mysqli_fetch_assoc($logry);
      if($data['role']=="admin"){
      $_SESSION['user']=$_GET['user'] ;
      $_SESSION['role']= "admin";
      echo "<script> window.location.href='webonlineshop/index.php' </script>";
      echo "<script> alert('user dan password ditemukan') </script> "; 
      } else if($data['role']=="client"){
            $_SESSION['user']=$_GET['email'] ;
            $_SESSION['role']= "client" ;
            echo "<script> window.location.href='index.php' </script>";
            echo "<script> alert('user dan password ditemukan') </script> "; 
      }else {
      echo "user dan password tidak ditemukan";}
     
      }else {
      echo "user tidak ditemukan";}

?>