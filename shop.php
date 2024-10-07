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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
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
            <a href="">
              <i class="fa fa-search" aria-hidden="true"></i>
            </a>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->

  </div>
  <!-- end hero area -->

  <section>
    	<!-- /ITEM -->
      <div class="container">
      <div class="heading-title heading-dotted text-center">
						<h2 class="size-20">FEATURED</h2>
					</div>

  <div class="row">
    <?php
    @include('db.php');
    if (!isset($_GET['pil']) ) { $_GET['pil']="";  }
    $qy = "SELECT * FROM toko where kode like '%$_GET[pil]%' ";
    
    $rlt = mysqli_query($conn, $qy);
    
    while($data = mysqli_fetch_array($rlt)) {
      //echo"<a href=?pil=$data[0]>$data[1] </a> <br>";
    ?>
    <div class="col-md-3 mb-3">
      <div class="card h-100">
        <img src="img/<?php echo $data[6]?>" class="card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text></svg>
        <div class="card-body">
          <h5 class="card-title text-center"><?php echo $data[2]?></h5>
          <div class="shop-item-rating-line text-center">
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="shop-item-price">
                        Rp <?php echo $data[5] ?>
                    </div>
          <p class="card-text"><span class="line-through"><?php echo $data[4]?></span></p>
          
          <a href="shop-cart.php?pil=<?php echo $data[1]?>" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>	
</section>
  <!-- end shop section -->

 
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