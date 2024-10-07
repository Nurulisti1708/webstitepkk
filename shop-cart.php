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
            <li class="nav-item ">
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




			<!-- CART -->
			<section>
				<div class="container">

				
					<!-- EMPTY CART -->
					<div class="panel panel-default">
						<div class="panel-body">
							<strong>Shopping cart is empty!</strong><br />
							You have no items in your shopping cart.<br />
							Click <a href="index.html">here</a> to continue shopping. <br />
							<span class="label label-warning">this is just an empty cart example</span>
						</div>
					</div>
					<!-- /EMPTY CART -->

					<!-- CART -->
					<div class="row">

						<!-- LEFT -->
						<div class="col-lg-9 col-sm-8">

							<!-- CART -->
							<form class="cartContent clearfix" method="post" action="#">

								<!-- cart content -->
								<div id="cartContent">
									<!-- cart header -->
									<div class="item head clearfix">
										<span class="cart_img"></span>
										<span class="product_name size-13 bold">PRODUCT NAME</span>
										<span class="remove_item size-13 bold"></span>
										<span class="total_price size-13 bold">TOTAL</span>
										<span class="qty size-13 bold margin-top-5 margin-right-150">QUANTITY</span>
									</div>
									<!-- /cart header -->
									<?php
@include('db.php');

if (!isset($_GET['pil']) ) { $_GET['pil']="";  }
$qy = "SELECT * FROM toko where kode like '%$_GET[pil]%' ";

$rlt = mysqli_query($conn, $qy);

$data = mysqli_fetch_array($rlt); {
    //echo "<a href=?pil=$data[0]>$data[1]</a> <br>";

?>
									<!-- cart item -->
									<div class="item">
										<div class="cart_img pull-left width-100 padding-10 text-left"><img src="img/<?php echo $data[6];?>" alt="" width="80" /></div>
										<a href="index.php" class="product_name">
											<span id="qty" ><?php echo $data[2];?></span>
											<small><?php echo $data[3];?></small>
										</a>
									    <a href="#" class="remove_item"><i class="fa fa-times"></i></a>
										<div class="total_price"><span> <b id="total"></b> </span></div>
                   
                    <h5 class="fw-normal mb-0"><input type="number" id="jumlah" onclick="sayHalo();"value="" name="qty" maxlength="3" max="999" min="1"  /> &times; <?php echo $data[5];?></h5>
										<div class="clearfix"></div>
									</div>


                  <script>
var hg = <?php echo $data[5] ;?>;


document.getElementById('total').innerHTML = hg;

function sayHalo(){
  var na = document.getElementById('jumlah').value;

  var nh = parseInt(na*hg) ;
  var nh2 = parseInt(na*hg) ;
  var nh3 = parseInt(na*hg) ;

  document.getElementById("total").innerHTML =nh;
  document.getElementById("total2").innerHTML =nh2;
  document.getElementById("total3").innerHTML =nh3;
}
</script>

									<!-- /cart item -->

									<!-- update cart -->
									
									
									<!-- /update cart -->

									<div class="clearfix"></div>
								</div>
								<!-- /cart content -->

							</form>
							<!-- /CART -->

						</div>


            <div class="col-lg-3 col-sm-4">

<div class="toggle">
<label>Shipping tax calculator</label>

<div class="toggle">
<p>To get a shipping estimate, please enter your destination.</p>

<form action="thankyou.php" method="post" class="nomargin">
<label>Nama</label>
<input type="text" id="name" name="name" class="form-control margin-bottom-20">

<span class="clearfix">
<span class="pull-right"><div class="subtotal-container"></div>
</span>
<label>Email</label>
<input type="text" id="email" name="email" class="form-control margin-bottom-20">

<span class="clearfix">
<span class="pull-right"><div class="subtotal-container"></div>
</span>
<label>Phone</label>
<input type="text" id="notelp" name="notelp" class="form-control margin-bottom-20">
<span class="clearfix">
<span class="pull-right"><div class="subtotal-container"></div>
</span>


<strong class="pull-left">Subtotal: Rp. <b id="total2"></b><span class="total"></span></strong>
</span>
<span class="clearfix">
<span class="pull-right">$0.00</span>
<span class="pull-left">Discount:</span>
</span>
<span class="clearfix">
<span class="pull-right">$0.00</span>
<span class="pull-left">Shipping:</span>
</span>
<hr />

<span class="clearfix">
<span class="pull-right size-20 total"></span>
<strong class="pull-left">TOTAL: Rp. <b id="total3"></b>
</strong>

<button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-block btn-lg">
<div class="d-flex justify-content-between">
<span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
</div>
</button>
</a>
</div>
</div>

</div>
</form>
</div>
</div>




</div>
</div>
</div>

</div>

</div>
<!-- /CART -->
<?php } ?>
</div>
</section>
<!-- /CART -->





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