<?php

include "db.php" ;

$simpan="INSERT into login (email,password,role) values ('$_GET[user]','$_GET[password]','$_GET[role]')" ;

if (mysqli_query($conn, $simpan)) {
    echo "<div class='alert alert-success' role='alert'>
    Berhasil Mendaftar
  </div>
  <meta http-equiv='refresh' content='1;url=login.php'>";
    
    
}
else {
    echo "<div class='alert alert-danger' role='alert'>
    Gagal Mendaftar
  </div>
  <meta http-equiv='refresh' content='1;url=login.php'>";
}

mysqli_close($conn);
?>