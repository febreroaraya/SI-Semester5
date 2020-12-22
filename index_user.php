<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> RDPVision &middot; Clothing Brand</title>

    <meta name="description" content="Bootstrap template for you store - E-Commerce Bootstrap Template">
    <meta name="keywords" content="unistore, e-commerce bootstrap template, premium e-commerce bootstrap template, premium bootstrap template, bootstrap template, e-commerce, bootstrap template, sunrise digital">
    <meta name="author" content="Sunrise Digital">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/carousel.css" rel="stylesheet">
    <link href="assets/css/carousel-recommendation.css" rel="stylesheet">
    <link href="assets/ionicons-2.0.1/css/ionicons.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,100,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
    <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./"> <i class="ion-cube"></i> RDPVision</a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="./">Home</a></li>
              <li><a href="./catalog/">Catalog</a></li>
              <li><a href="./blog/">Blog</a></li>
              <li><a href="./gallery/">Gallery</a></li>
              <li class="dropdown">
                <a href="./catalog/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="./catalog/product.html">Product</a></li>
                  <li><a href="./cart/">Cart</a></li>
                  <li><a href="./checkout/">Checkout</a></li>
                  <li><a href="./faq/">FAQ</a></li>
                  <li><a href="./contacts/">Contacts</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../SI-Semester5/login/logout/logout.php"> <i class="ion-android-person"></i> Logout </a></li>
    
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <header>
      <div class="carousel" data-count="3" data-current="2">
        <!-- <button class="btn btn-control"></button> -->

        <div class="items">
          <div class="item" data-marker="1">
            <img src="../SI-Semester5/assets/img/carousel/4.jpg" alt="Background" class="background"/>

            <div class="content">
              <div class="outside-content">
                <div class="inside-content">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 align-center">
                        <h1>New amazing T-Shirt</h1>
                        <p>Provide lightweight and powerull</p>
                        <a href="../catalog/">More ></a>
                        <br><br>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item active" data-marker="2">
            <img src="../SI-Semester5/assets/img/carousel/3.jpg" alt="Background" class="background"/>

            <div class="content">
              <div class="outside-content">
                <div class="inside-content">
                  <div class="container">
                    <div class="row">
                      
                      <div class="col-sm-12 align-center">
                        <h1>BIG SALE</h1>
                        <p>CHINO PANTS SALE</p>
                        <p>Discount Up To 50%</p>
                        <a href="../catalog/">More ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item" data-marker="3">
            <img src="../SI-Semester5/assets/img/carousel/1.jpg" alt="Background" class="background"/>

            <div class="content">
              <div class="outside-content">
                <div class="inside-content">
                  <div class="container">
                    <div class="row">
                      
                      <div class="col-sm-4 align-left">
                        <br class="hidden-xs hidden-sm"><br class="hidden-xs hidden-sm"><br class="hidden-xs hidden-sm">
                        <br class="hidden-xs hidden-sm"><br class="hidden-xs hidden-sm"><br class="hidden-xs hidden-sm">
                        <h1>Luxury T-Shirt</h1>
                        <br>
                        
                        <p>
                          Luxury watches, business tablets and 3D touch: How Apple plans to stay ahead in mobile.
                          When it comes to the brand’s latest iPhones, the biggest excitement isn’t focused on the addition of a rose gold coloured device but the new 3D touch sensors.
                        </p>
                        <a href="../SI-Semester5/blog/item-photo.html">More ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <ul class="markers">
          <li data-marker="1"><img src="../SI-Semester5/assets/img/carousel/bckg.jpg" alt="Background"/></li>
          <li data-marker="2"><img src="../SI-Semester5/assets/img/carousel/bckg.jpg" alt="Background"/></li>
          <li data-marker="3"><img src="../SI-Semester5/assets/img/carousel/bckg.jpg" alt="Background"/></li>
        </ul>
      </div>
    </header>
    <br><br>

    <div class="container">
      <div class="row">
        <div class="col-sm-3 align-center">
          <a href="../blog/">
            <img src="../SI-Semester5/assets/img/tiles/3.jpg" alt="Blog" class="image"/>
          </a>
          <br><br>

          <a href="../blog/">Blog headlines</a>
        </div>
        <div class="col-sm-3 align-center">
          <a href="#video" data-gallery="#video" data-source="vimeo" data-id="110691368" data-id="110691368" data-title="Apple iPad Air" data-description="So capable, you won’t want to put it down. So thin and light, you won’t have to.">
            <img src="../SI-Semester5/assets/img/tiles/4.jpg" alt="New devices" class="image"/>
          </a>
          <br><br>

          <a href="#video" data-gallery="#video" data-source="vimeo" data-id="110691368" data-title="Apple iPad Air" data-description="So capable, you won’t want to put it down. So thin and light, you won’t have to.">New T-Shirt</a>
        </div>
        <div class="col-sm-3 align-center">
          <a href="#video" data-gallery="#video" data-source="youtube" data-id="6g-ZIm0wge4" data-title="Best New Dell Laptops" data-description="Best of dell's laptops that you can consider buying in 2016. 4 Laptops are featured in the video and all of them has equal importance and there is no order that #1 is better than #2">
            <img src="../SI-Semester5/assets/img/tiles/6.jpg" alt="Del XPS" class="image"/>
          </a>
          <br><br>

          <a href="#video" data-gallery="#video" data-source="youtube" data-id="6g-ZIm0wge4" data-title="Best New Dell Laptops" data-description="Best of dell's laptops that you can consider buying in 2016. 4 Laptops are featured in the video and all of them has equal importance and there is no order that #1 is better than #2">Brand New</a>
        </div>
        <div class="col-sm-3 align-center">
          <a href="../blog/">
            <img src="../SI-Semester5/assets/img/tiles/7.jpg" alt="Gallery" class="image"/>
          </a>
          <br><br>
          
          <a href="../blog/">Products gallery</a>
        </div>
      </div>
    </div>
    <br><br>

    <footer>
      <div class="about">
        <div class="container">
          <div class="row">
            <hr class="offset-md">

            <div class="col-xs-6 col-sm-3">
              <div class="item">
                <i class="ion-ios-telephone-outline"></i>
                <h1>24/7 free <br> <span>support</span></h1>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="item">
                <i class="ion-ios-star-outline"></i>
                <h1>Low price <br> <span>guarantee</span></h1>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="item">
                <i class="ion-ios-gear-outline"></i>
                <h1> Manufacturer’s <br> <span>warranty</span></h1>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="item">
                <i class="ion-ios-loop"></i>
                <h1> Full refund <br> <span>guarantee</span> </h1>
              </div>
            </div>

            <hr class="offset-md">
          </div>
        </div>
      </div>

      <div class="subscribe">
        <div class="container align-center">
            <hr class="offset-md">

            
            <hr class="offset-lg">
            <hr class="offset-md">

            <div class="social">
              <a href="#"><i class="ion-social-facebook"></i></a>
              <a href="#"><i class="ion-social-twitter"></i></a>
              <a href="#"><i class="ion-social-googleplus-outline"></i></a>
              <a href="#"><i class="ion-social-instagram-outline"></i></a>
              <a href="#"><i class="ion-social-linkedin-outline"></i></a>
              <a href="#"><i class="ion-social-youtube-outline"></i></a>
            </div>


            <hr class="offset-md">
            <hr class="offset-md">
        </div>
      </div>


      <div class="container">
        <hr class="offset-md">

        <div class="row menu">
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Information <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
              <a href="#" class="list-group-item">About</a>
              <a href="#" class="list-group-item">How to order</a>
            </div>
          </div>
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Products <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
              <a href="#" class="list-group-item">T-shirt</a>
              <a href="#" class="list-group-item">Shirt</a>
              <a href="#" class="list-group-item">Jacket</a>
            </div>
          </div>
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Support <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
              <a href="#" class="list-group-item">Returns</a>
              <a href="#" class="list-group-item">FAQ</a>
              <a href="#" class="list-group-item">Contacts</a>
            </div>
          </div>
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Location</h1>

            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Language
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#English"> <img src="assets/img/flags/gb.png" alt="Eng"/> English</a></li>
                <li><a href="#Spanish"> <img src="assets/img/flags/es.png" alt="Spa"/> Spanish</a></li>
                <li><a href="#Deutch"> <img src="assets/img/flags/de.png" alt="De"/> Deutch</a></li>
                <li><a href="#French"> <img src="assets/img/flags/fr.png" alt="Fr"/> French</a></li>
              </ul>
            </div>
            <hr class="offset-xs">

            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Currency
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="#Euro"><i class="ion-social-euro"></i> Euro</a></li>
                <li><a href="#Dollar"><i class="ion-social-usd"></i> Dollar</a></li>
                <li><a href="#Yen"><i class="ion-social-yen"></i> Yen</a></li>
                <li><a href="#Bitcoin"><i class="ion-social-bitcoin"></i> Bitcoin</a></li>
              </ul>
            </div>

          </div>
          <div class="col-sm-3 col-md-3 col-md-offset-1 align-right hidden-sm hidden-xs">
            <h1 class="h4">RDPVision</h1>

              <address>
                Jl. Tebet Utara II F<br>
                Tebet Barat, Jakarta<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
              </address>

              <address>
                <strong>Support</strong><br>
                <a href="mailto:#">sup@example.com</a>
              </address>

          </div>
        </div>
      </div>

      <hr>

      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-9 payments">
            
            <br>

          </div>
          <div class="container align-center">
            <hr class="offset-sm hidden-sm">
            <hr class="offset-sm">
            <p>RDPVision © 2020 <br> Designed By <a href="#" target="_blank">Indocraft</a></p>
            <hr class="offset-lg visible-xs">
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="Modal-ForgotPassword" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <h4 class="modal-title">Forgot Your Password?</h4>
                  <br>

                  <form class="join" action="index.php" method="post">
                    <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                    <br>

                    <button type="submit" class="btn btn-primary btn-sm">Continue</button>
                    <a href="#Sign-In" data-action="Sign-In">Back ></a>
                  </form>
                </div>
                <div class="col-sm-6">
                  <br><br>
                  <p>
                    Enter the e-mail address associated with your account. Click submit to have your password e-mailed to you.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="Modal-Gallery" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
            <h4 class="modal-title">Title</h4>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-latest.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/core.js"></script>
    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/carousel-recommendation.js"></script>
    
  </body>
</html>