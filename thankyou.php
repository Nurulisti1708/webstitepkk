<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>giftos</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout-shop.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

 

  <title>
    Giftos
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <?php
@session_start();
?>
 
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <span>
            Giftos
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.php">
                Why Us
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="testimonial.php">
                Testimonial
              </a>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            KODE
          </a>
          <ul class="dropdown-menu">
          <?php
include "db.php";
$ba ="SELECT * FROM katagori" ;

$result =mysqli_query($conn,$ba);

while ($data = mysqli_fetch_array($result)){
    // echo "<a href=?pil=$data[1]> $data[2] </a> <br>";

?>
											
												
											<li><a href="?pil=<?php echo $data['kategori'];?>"><?php echo $data['kode']?></a></li>
<?php } ?>								
          </ul>
        </li>
           
          </ul>
          <div class="user_option">
            <a href="login.php">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>
            <a href="register.php">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Register
              </span>
            </a>
            <a href="">
              <i class="fa fa-search" aria-hidden="true"></i>
            </a>
            
          </div>
        </div>
      </nav>
    </header>
 
    <!-- end header section -->
     <br>
     <br>


     <form method="post" action="shop-cart.php">
    <!-- Form inputs -->



    <?php

include "db.php";

$simpan = "INSERT INTO pembelian (user_email, qty, harga) VALUES ('$_POST[email]', '$_POST[name]', '$_POST[notelp]')";

if (mysqli_query($conn, $simpan)) {
    echo "<div class='alert alert-success' role='alert'>
  Pesanan Berhasil 
    </div>
";
    
}
else {
    echo "<div class='alert alert-danger' role='alert'>
    Data Tidak Tersimpan
 </div>" ;
}

mysqli_close($conn);
?>
<!-- card -->
<?php
// define variables and set to empty values
$nameErr = $emailErr = $notelpErr = "";
$name = $email = $notelp  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
  }

  if (empty($_POST["notelp"])) {
    $notelpErr = "Notelp is required";
  } else {
    $notelp = $_POST["notelp"];
  }

}
?>

<div class="container">
        <h2>THANK YOU, <?php echo $name; ?> !!</h2>
        <h3>Customer Information</h3>
        <p>Email: <?php echo $email; ?></p>
        <p>Phone Number: <?php echo $notelp; ?></p>
</div>

<?php echo $nameErr;?>

<?php echo $emailErr;?>

<?php echo $notelpErr;?>

<!--card-->

</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
   <!-- copyright section start -->
   <!-- Awal Footer -->
  <hr class="footer">
      <div class="container">
        <div class="row footer-body">
          <div class="col-md-6">
          <div class="copyright">
            <strong>Copyright</strong> <i class="far fa-copyright"></i> 2024 -  Designed by NurulIsti</p>
          </div>
          </div>

          <div class="col-md-6 d-flex justify-content-end">
          <div class="icon-contact">
          <label class="font-weight-bold">Follow Us </label>
          <a href="#"><img src="img/fb.jpg" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="#"><img src="img/ig.jpg" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="#"><img src="img/twitter.jpg" class="" data-toggle="tooltip" title="Twitter"></a>
        </div>
          </div>
        </div>
      </div>
  <!-- Akhir Footer -->	

</body>

</html>