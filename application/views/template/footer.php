<hr class="offset-lg">
<hr class="offset-sm">
<footer>
  <div class="about">
    <div class="container">
      <div class="row">
        <hr class="offset-md">


        <hr class="offset-md">
      </div>
    </div>
  </div>

  <div class="subscribe">
    <div class="container align-left">
      <hr class="offset-md">



      <div class="social">
        <a href="#"><i class="ion-social-googleplus-outline"></i></a>
        <a href="#"><i class="ion-social-instagram-outline"></i></a>
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
          <a href="#" class="list-group-item">Terms</a>
          <a href="#" class="list-group-item">How to order</a>
          <a href="#" class="list-group-item">Delivery</a>
        </div>
      </div>
      <div class="col-sm-3 col-md-2">
        <h1 class="h4">Products <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

        <div class="list-group">
          <a href="#" class="list-group-item">Kaos</a>
          <a href="#" class="list-group-item">Kemeja</a>
          <a href="#" class="list-group-item">Jaket</a>
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
            <li><a href="#English"> <img src="<?= base_url(); ?>assets/frontend/img/flags/gb.png" alt="Eng" /> English</a></li>
            <li><a href="#Spanish"> <img src="<?= base_url(); ?>assets/frontend/img/flags/es.png" alt="Spa" /> Spanish</a></li>
            <li><a href="#Deutch"> <img src="<?= base_url(); ?>assets/frontend/img/flags/de.png" alt="De" /> Deutch</a></li>
            <li><a href="#French"> <img src="<?= base_url(); ?>assets/frontend/img/flags/fr.png" alt="Fr" /> French</a></li>
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
        <h1 class="h4">Alamat Store</h1>

        <address>
          kunungan, jakarta selatan<br>
          <abbr title="Phone"></abbr> (082) 230499700
        </address>

        <address>
          <strong>Email</strong><br>
          <a href="mailto:#">faiel0987@gmail.com</a>
        </address>

      </div>
    </div>
  </div>

  <hr>

  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-9 payments">
        <p>Pay your order in the most convenient way</p>

        <div class="payment-icons">
          <img src="<?= base_url(); ?>assets/frontend/img/payments/visa.svg" alt="visa">
          <img src="<?= base_url(); ?>assets/frontend/img/payments/master-card.svg" alt="mc">
        </div>
        <br>

      </div>
      <div class="col-sm-4 col-md-3 align-right align-center-xs">
        <hr class="offset-sm hidden-sm">
        <hr class="offset-sm">
        <p>RDPVision © 2020 <br> Designed By <a href="https://www.instagram.com/febreroaraya/" target="_blank">Febrero Araya K</a></p>
        <hr class="offset-lg visible-xs">
      </div>
    </div>
  </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="Modal-SignIn" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="modal-title text-center">Masuk</h2>
              <br>
              <form class="join" action="<?= base_url('Login/aksi_login') ?>" method="post" enctype="multipart/form-data">
                <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                <br>
                <input type="password" name="password" value="" placeholder="Password" required="" class="form-control" />
                <br>

                <button type="submit" class="btn btn-primary">Login</button>
                <a href="#forgin-password" data-action="Forgot-Password">Lupa Password ></a>
              </form>
              <br>

              <div class="social-login">
                <div class="or">
                  <p>Atau</p>
                </div>
                <a href="#"><i class="icon" data-src="<?= base_url(); ?>assets/frontend/img/icons/facebook.svg"></i></a>
                <p>via</p>
                <a href="#"><i class="icon" data-src="<?= base_url(); ?>assets/frontend/img/icons/google-plus.svg"></i></a>
              </div>
              <br><br>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Modal-Registration" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="modal-title text-center">Daftar</h2>
              <br>

              <form class="join" action="<?= base_url('Login/register') ?>" method="post" enctype="multipart/form-data">
                <input type="text" name="name" value="" placeholder="Nama" required="" class="form-control" />
                <br>

                <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                <br>

                <input type="password" name="password" value="" placeholder="Password" required="" class="form-control" />
                <br>

                <input type="text" name="no_tlp" value="" placeholder="No.Tlp" required="" class="form-control" />
                <br>


                <select name="jk" id="" class="form-control">
                  <option value="laki-laki">Laki-Laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
                <br>

                <input type="text" name="alamat" placeholder="Alamat" required="" class="form-control" />
                <br>

                <input type="text" name="kodepos" placeholder="Kode Pos" required="" class="form-control" />
                <br>

                <button type="submit" class="btn btn-primary btn-sm">Daftar</button> &nbsp;&nbsp;

                <br><br>
                <p>
                  By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

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
              <h4 class="modal-title">Lupa Password</h4>
              <br>

              <form class="join" action="index.php" method="post">
                <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                <br>

                <button type="submit" class="btn btn-primary btn-sm">Lanjut</button>
                <a href="#Sign-In" data-action="Sign-In">Kembali ></a>
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

<!-- <div class="modal fade" id="Modal-Gallery" tabindex="-1" role="dialog">
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
    </div> -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>assets/frontend/js/jquery-latest.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/core.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/store.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/carousel.js"></script>
<script src="<?= base_url(); ?>assets/frontend/js/carousel-product.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/jquery.touchSwipe.min.js"></script>

<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/custom-scroll/jquery.mCustomScrollbar.concat.min.js"></script>


<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/jquery-ui-1.11.4.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/jquery.ui.touch-punch.js"></script>

<script type="text/javascript">
  $(document).ready(function() {});
</script>
</body>

</html>