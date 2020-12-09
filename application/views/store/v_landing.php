<?php $this->load->view("template/header") ?>
<?php $this->load->view("template/navbar") ?>


<header>
  <div class="carousel" data-count="3" data-current="1">

    <div class="items">
      <button class="btn btn-control" data-direction="right"> <i class="ion-ios-arrow-right"></i></button>
      <button class="btn btn-control" data-direction="left"> <i class="ion-ios-arrow-left"></i></button>


      <div class="item center" data-marker="1">
        <img src="<?= base_url(); ?>assets/frontend/img/carousel/1.jpg" alt="Background" class="background hidden-xs hidden-sm" />
        <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-2-sm.jpg" alt="Background" class="background visible-sm" />
        <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-2-xs.jpg" alt="Background" class="background visible-xs" />

        <div class="content">
          <div class="outside-content">
            <div class="inside-content">
              <div class="container align-right">

                <h1 class="h3 colorful blue hidden-xs">Erigo hodie</h1>

                <hr class="offset-sm">
                <h2 class="h1 lg upp colorful blue">New brand</h2>
                <hr class="offset-md">
                <hr class="offset-md">
                <a href="./store/" rel="nofollow" class="btn btn-primary btn-lg black"> Lainnya</a>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="item" data-marker="2">
        <img src="<?= base_url(); ?>assets/frontend/img/carousel/2.jpg" alt="Background" class="background hidden-xs hidden-sm" />
        <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-1-sm.jpg" alt="Background" class="background visible-sm" />
        <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-1-xs.jpg" alt="Background" class="background visible-xs" />

        <!-- <img src="<?= base_url(); ?>assets/frontend/img/carousel/newlaptops.jpg" alt="New laptops" title="New laptops" class="item-left hidden-xs"/> -->

        <div class="content">
          <div class="outside-content">
            <div class="inside-content">
              <div class="container">

                <h1 class="h3 colorful blue hidden-xs">NEW BRAND</h1>
                <hr class="offset-sm">

                <h2 class="h1 lg upp colorful blue">ERIGO <br> aparel</h2>
                <hr class="offset-md">
                <hr class="offset-md">
                <a href="./store/" rel="nofollow" class="btn btn-primary btn-lg black"> View products </a>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="item" data-marker="3">
        <img src="<?= base_url(); ?>assets/frontend/img/carousel/3.jpg" alt="Background" class="background hidden-xs hidden-sm" />
        <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-3-sm.jpg" alt="Background" class="background visible-sm" />
        <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-3-xs.jpg" alt="Background" class="background visible-xs" />

        <!-- <img src="<?= base_url(); ?>assets/frontend/img/carousel/ipadair2.jpg" alt="Apple Devices" title="Apple Devices" class="item-right hidden-xs"/> -->

        <div class="content">
          <div class="outside-content">
            <div class="inside-content">
              <div class="container align-right">

                <h1 class="h3 colorful blue hidden-xs"> <br> NEW BRAND</h1>

                <hr class="offset-sm">
                <h2 class="h1 lg upp colorful blue">Brand new day <br class="hidden-xs"> NEW KEMEJA</h2>
                <hr class="offset-md">
                <hr class="offset-md">
                <a href="./blog/" rel="nofollow" class="btn btn-primary btn-lg black"> View article </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <ul class="markers">
      <li data-marker="1" data-style="white" class="active"></li>
      <li data-marker="2" data-style="white"></li>
      <li data-marker="3" data-style="white"></li>
    </ul>

  </div>
</header>
<hr class="offset-lg">
<hr class="offset-lg">

<div class="bars">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4 no-padding padding-xs">
        <div class="bar medium" data-background="<?= base_url(); ?>assets/frontend/img/bars/123.jpg">
          <h3 class="title black">HODIE</h3>

          <div class="wrapper">
            <div class="content">
              <hr class="offset-sm">
              <a href="./store/" rel="nofollow" class="btn btn-default black"> Buy now </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="bar small" data-background="<?= base_url(); ?>assets/frontend/img/bars/1234.jpg">
          <h3 class="title black">HODIE</h3>

          <div class="wrapper">
            <div class="content">
              <hr class="offset-sm">
              <a href="./store/" rel="nofollow" class="btn btn-primary black"> Buy now </a>
            </div>
          </div>
        </div>

        <hr class="offset-xs">
        <hr class="offset-xs">

        <div class="bar small" data-background="<?= base_url(); ?>assets/frontend/img/bars/1234.jpg">
          <h3 class="title">HODIE</h3>

          <div class="wrapper">
            <div class="content">
              <hr class="offset-sm">
              <a href="./store/" rel="nofollow" class="btn btn-primary black"> Buy now </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 no-padding hidden-xs hidden-sm">
        <div class="bar medium" data-background="<?= base_url(); ?>assets/frontend/img/bars/12345.jpg">
          <h3 class="title black">HODIE</h3>

          <div class="wrapper">
            <div class="content">
              <hr class="offset-sm">
              <a href="./store/" rel="nofollow" class="btn btn-primary black"> Buy now </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr class="offset-lg">
<hr class="offset-md">


<section class="products">
  <div class="container">
    <h2 class="h2 upp align-center"> t-shirt </h2>
    <hr class="offset-lg">

    <div class="row">

      <div class="col-sm-6 col-md-3 product">
        <div class="body">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/1.jpg" alt="Apple iMac 27 Retina" /></a>

          <div class="content align-center">
            <p class="price">Rp 150.000</p>
            <h2 class="h3">t-shirt</h2>
            <hr class="offset-sm">

            <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
            <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-3 product">
        <div class="body">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/2.jpg" alt="Microsoft Surface Studio" /></a>

          <div class="content align-center">
            <p class="price">Rp 160.000</p>
            <h2 class="h3">t-shirt</h2>
            <hr class="offset-sm">

            <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
            <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-3 product">
        <div class="body">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/3.jpg" alt="Dell Inspion 23" /></a>

          <div class="content align-center">
            <p class="price">Rp 170.000</p>
            <h2 class="h3">t-shirt</h2>
            <hr class="offset-sm">

            <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
            <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>
      </div>


      <div class="col-sm-6 col-md-3 product">
        <div class="body">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/4.jpg" alt="Lenovo IdeaCenter" /></a>

          <div class="content align-center">
            <p class="price">Rp 200.000</p>
            <h2 class="h3">t-shirt</h2>
            <hr class="offset-sm">

            <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
            <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>
      </div>


    </div>

    <div class="align-right align-center-xs">
      <hr class="offset-sm">
      <a href="./store/">
        <h5 class="upp">Lainnya </h5>
      </a>
    </div>
  </div>
</section>

<section class="products">
  <div class="container">
    <h2 class="h2 upp align-center"> Kemeja</h2>
    <hr class="offset-lg">

    <div class="row">

      <div class="col-sm-6 col-md-4 product">
        <div class="body">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/5.jpg" alt="Lenovo Yoga 900" /></a>

          <div class="content align-center">
            <p class="price">$1899.99</p>
            <h2 class="h3">Lenovo Yoga 900</h2>
            <hr class="offset-sm">

            <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
            <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 product">
        <div class="body">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/6.jpg" alt="Surface Pro" /></a>

          <div class="content align-center">
            <p class="sale">Rp 200.000</p>
            <p class="price through">Rp 200.000</p>
            <h2 class="h3">kemeja</h2>
            <hr class="offset-sm">

            <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
            <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 product">
        <div class="body">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/7.jpg" alt="HP Spectre x360" /></a>

          <div class="content align-center">
            <p class="price">Rp 200.000</p>
            <h2 class="h3">kemeja</h2>
            <hr class="offset-sm">

            <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
            <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 product visible-sm">
        <div class="body">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/dell-inspiron-2in1.jpg" alt="Dell Inspiron 7000 2-in-1s" /></a>

          <div class="content align-center">
            <p class="price">Rp 200.000</p>
            <h2 class="h3">kemeja</h2>
            <hr class="offset-sm">

            <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
            <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>
      </div>


    </div>
    <div class="align-right align-center-xs">
      <hr class="offset-sm">
      <a href="./store/">
        <h5 class="upp">Lainnya </h5>
      </a>
    </div>
  </div>
</section>


<section class="products">
  <div class="container">
    <h2 class="h2 upp align-center"> Jaket</h2>
    <hr class="offset-lg">

    <div class="row">

      <div class="col-sm-6 col-md-4 product">
        <div class="body">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/8.jpg" alt="Xiamomi Mi Pad 2" /></a>

          <div class="content align-center">
            <p class="price">Rp 240.000</p>
            <h2 class="h3">jaket</h2>
            <hr class="offset-sm">

            <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
            <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 product">
        <div class="body">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/9.jpg" alt="Apple iPad Air" /></a>

          <div class="content align-center">
            <p class="price">Rp 250.000</p>
            <h2 class="h3">jaket</h2>
            <hr class="offset-sm">

            <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
            <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 product">
        <div class="body">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/10.jpg" alt="Asus Transformer" /></a>

          <div class="content align-center">
            <p class="price">Rp 260.000</p>
            <h2 class="h3">jaket</h2>
            <hr class="offset-sm">

            <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
            <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 product visible-sm">
        <div class="body">
          <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
          <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/ipad-mini.jpg" alt="iPad Mini" /></a>

          <div class="content align-center">
            <p class="price">$399.99</p>
            <h2 class="h3">iPad Mini</h2>
            <hr class="offset-sm">

            <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
            <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
          </div>
        </div>
      </div>


    </div>
    <div class="align-right align-center-xs">
      <hr class="offset-sm">
      <a href="./store/">
        <h5 class="upp">Lainnya </h5>
      </a>
    </div>
  </div>
</section>




<?php $this->load->view("template/footer") ?>