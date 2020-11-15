<?php $this->load->view("template/header") ?>
<?php $this->load->view("template/navbar") ?>
 

    <header>
      <div class="carousel" data-count="3" data-current="1">

        <div class="items">
          <button class="btn btn-control" data-direction="right"> <i class="ion-ios-arrow-right"></i></button>
          <button class="btn btn-control" data-direction="left"> <i class="ion-ios-arrow-left"></i></button>


          <div class="item center" data-marker="1">
            <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-2.jpg" alt="Background" class="background hidden-xs hidden-sm"/>
            <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-2-sm.jpg" alt="Background" class="background visible-sm"/>
            <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-2-xs.jpg" alt="Background" class="background visible-xs"/>

            <div class="content">
              <div class="outside-content">
                <div class="inside-content">
                  <div class="container align-right">

                    <h1 class="h3 colorful blue hidden-xs">Provide lightweight and powerull</h1>

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
            <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-1.jpg" alt="Background" class="background hidden-xs hidden-sm"/>
            <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-1-sm.jpg" alt="Background" class="background visible-sm"/>
            <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-1-xs.jpg" alt="Background" class="background visible-xs"/>

            <!-- <img src="<?= base_url(); ?>assets/frontend/img/carousel/newlaptops.jpg" alt="New laptops" title="New laptops" class="item-left hidden-xs"/> -->

            <div class="content">
              <div class="outside-content">
                <div class="inside-content">
                  <div class="container">

                    <h1 class="h3 colorful blue hidden-xs">Device is designed for the creative people</h1>
                    <hr class="offset-sm">

                    <h2 class="h1 lg upp colorful blue">Apple <br> iMac 27 Retina</h2>
                    <hr class="offset-md">
                    <hr class="offset-md">
                    <a href="./store/" rel="nofollow" class="btn btn-primary btn-lg black"> View products </a>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item" data-marker="3">
            <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-3.jpg" alt="Background" class="background hidden-xs hidden-sm"/>
            <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-3-sm.jpg" alt="Background" class="background visible-sm"/>
            <img src="<?= base_url(); ?>assets/frontend/img/carousel/bckg-3-xs.jpg" alt="Background" class="background visible-xs"/>

            <!-- <img src="<?= base_url(); ?>assets/frontend/img/carousel/ipadair2.jpg" alt="Apple Devices" title="Apple Devices" class="item-right hidden-xs"/> -->

            <div class="content">
              <div class="outside-content">
                <div class="inside-content">
                  <div class="container align-right">
                  
                    <h1 class="h3 colorful blue hidden-xs">Luxury watches, business tablets and 3D touch: <br> How Apple plans to stay ahead in mobile.</h1>

                    <hr class="offset-sm">
                    <h2 class="h1 lg upp colorful blue">Brand new day <br class="hidden-xs"> for business</h2>
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
            <div class="bar medium" data-background="<?= base_url(); ?>assets/frontend/img/bars/macbook.jpg">
              <h3 class="title black">MacBook Air</h3>

              <div class="wrapper">
                <div class="content">
                  <hr class="offset-sm">
                  <a href="./store/" rel="nofollow" class="btn btn-default black"> Buy now </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="bar small" data-background="<?= base_url(); ?>assets/frontend/img/bars/dellinspirion.jpg">
              <h3 class="title black">Dell Inspirion 7000</h3>

              <div class="wrapper">
                <div class="content">
                  <hr class="offset-sm">
                  <a href="./store/" rel="nofollow" class="btn btn-primary black"> Buy now </a>
                </div>
              </div>
            </div>

            <hr class="offset-xs">
            <hr class="offset-xs">

            <div class="bar small" data-background="<?= base_url(); ?>assets/frontend/img/bars/surfacestudio.jpg">
              <h3 class="title">Surface Studio</h3>
              
              <div class="wrapper">
                <div class="content">
                  <hr class="offset-sm">
                  <a href="./store/" rel="nofollow" class="btn btn-primary black"> Buy now </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 no-padding hidden-xs hidden-sm">
            <div class="bar medium" data-background="<?= base_url(); ?>assets/frontend/img/bars/accessories.jpg">
              <h3 class="title black">Accessories</h3>
              
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
        <h2 class="h2 upp align-center"> Kaos </h2>
        <hr class="offset-lg">

        <div class="row">

          <div class="col-sm-6 col-md-3 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/apple-imac-27-retina.jpg" alt="Apple iMac 27 Retina"/></a>

              <div class="content align-center">
                <p class="price">$2099.99</p>
                <h2 class="h3">iMac 27 Retina</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/microsoft-surface-studio.jpg" alt="Microsoft Surface Studio"/></a>

              <div class="content align-center">
                <p class="price">$3749.99</p>
                <h2 class="h3">Surface Studio</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/dell-inspiron-23.jpg" alt="Dell Inspion 23"/></a>

              <div class="content align-center">
                <p class="price">$1987.99</p>
                <h2 class="h3">Dell Inspion 23</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>


          <div class="col-sm-6 col-md-3 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/lenovo-ideacenter.jpg" alt="Lenovo IdeaCenter"/></a>

              <div class="content align-center">
                <p class="price">$2487.99</p>
                <h2 class="h3">Lenovo IdeaCenter</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>


        </div>

        <div class="align-right align-center-xs">
          <hr class="offset-sm">
          <a href="./store/"> <h5 class="upp">Lainnya </h5> </a>
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
              <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/lenovo-yoga.jpg" alt="Lenovo Yoga 900"/></a>

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
              <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/surface-pro.jpg" alt="Surface Pro"/></a>

              <div class="content align-center">
                <p class="sale">$2099.99</p>
                <p class="price through">$2499.99</p>
                <h2 class="h3">Microsoft Surface Pro</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/hp-spectre-x360.jpg" alt="HP Spectre x360"/></a>

              <div class="content align-center">
                <p class="price">$2994.99</p>
                <h2 class="h3">HP Spectre x360</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 product visible-sm">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/dell-inspiron-2in1.jpg" alt="Dell Inspiron 7000 2-in-1s"/></a>

              <div class="content align-center">
                <p class="price">$1994.99</p>
                <h2 class="h3">Dell Inspiron 7000</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>


        </div>
        <div class="align-right align-center-xs">
          <hr class="offset-sm">
          <a href="./store/"> <h5 class="upp">Lainnya </h5> </a>
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
              <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/mi-pad-2.jpg" alt="Xiamomi Mi Pad 2"/></a>

              <div class="content align-center">
                <p class="price">$899.99</p>
                <h2 class="h3">Mi Pad 2</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/ipad-air.jpg" alt="Apple iPad Air"/></a>

              <div class="content align-center">
                <p class="price">$1099.99</p>
                <h2 class="h3">Apple iPad Air</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/asus-transformer.jpg" alt="Asus Transformer"/></a>

              <div class="content align-center">
                <p class="price">$987.99</p>
                <h2 class="h3">Asus Transformer</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 product visible-sm">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="<?= base_url(); ?>assets/frontend/img/products/ipad-mini.jpg" alt="iPad Mini"/></a>

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
          <a href="./store/"> <h5 class="upp">Lainnya </h5> </a>
        </div>
      </div>
    </section>




    <?php $this->load->view("template/footer") ?>