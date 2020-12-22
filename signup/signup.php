<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Sign Up &middot; RDPVision &middot; Clothing Brand</title>
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Sunrise.Digital">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.png">
    
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link href="../assets/css/carousel.css" rel="stylesheet">
    <link href="../assets/ionicons-2.0.1/css/ionicons.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,100,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../"> <i class="ion-cube"></i> RDPVision</a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="../">Home</a></li>
              <li><a href="../catalog/">Catalog</a></li>
              <li><a href="../blog/">Blog</a></li>
              <li><a href="../gallery/">Gallery</a></li>
              <li class="dropdown">
                <a href="../catalog/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../catalog/product.html">Product</a></li>
                  <li><a href="../cart/">Cart</a></li>
                  <li><a href="../checkout/">Checkout</a></li>
                  <li><a href="../faq/">FAQ</a></li>
                  <li><a href="../contacts/">Contacts</a></li>
                  
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../login/index.html"> <i class="ion-android-person"></i> Login </a></li>
              <li class="active"><a href="../signup/index.html"> Sign Up</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <hr class="offset-lg hidden-xs">
    <hr class="offset-md">

    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 md-padding">
          <h1 class="align-center">BUAT AKUN</h1>
          <br>

          <form class="join" action="index.php" method="post">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <input type="text" name="name" value="" placeholder="Nama" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="text" name="phone" value="" placeholder="Nomor Telepon" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="password" name="password" value="" placeholder="Password" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="password" name="password-confirm" value="" placeholder="Konfirmasi Password" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="password" name="alamat" value="" placeholder="Alamat" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="password" name="pos" value="" placeholder="Kode Pos" required="" class="form-control" /><br>
                </div>
              </div>
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Daftar</button>

            <br><br>
        
          </form>

          <br class="hidden-sm hidden-md hidden-lg">
        </div>
      </div>
    </div>
    <br><br>
    <hr class="hidden-xs">
    <br class="hidden-xs">
    <br class="hidden-xs">

    

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
                    <a href="#Sign-In" data-action="Sign-In" >Back ></a>
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
    <script src="../assets/js/jquery-latest.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/core.js"></script>
    <script src="../assets/js/catalog.js"></script>

    <script type="text/javascript" src="../assets/js/jquery-ui-1.11.4.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.ui.touch-punch.js"></script>

  </body>
</html>