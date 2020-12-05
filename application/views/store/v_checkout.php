<?php $this->load->view("template/header") ?>
<?php $this->load->view("template/navbar") ?>
    <hr class="offset-top">

    <div class="tags">
      <div class="container">
          Cheokout

         
      </div>
    </div>

    <div class="container">
      <div class="row">
        <!-- Filter -->
        
        <!-- /// -->

        <!-- Products -->
        <div class="col-sm-12 col-md-12">
          <hr class="offset-lg">

         
            <div class="row">
            <div class="container checkout">
        <form action="index.html" method="post">

        <div class="row">
            <div class="col-md-7">
                  <div class="row group">
                    <div class="col-sm-4"><h2 class="h4">Penerima</h2></div>
                    <div class="col-sm-8"><h4>Joehn DO</h4></div>
                  </div>

                  <div class="row group">
                    <div class="col-sm-4"><h2 class="h4">Telp</h2></div>
                    <div class="col-sm-8"> <h4>+45 (555) 8546-25-77</h4></div>
                  </div>

                  <div class="row group">
                    <div class="col-sm-4"><h2 class="h4">E-mail</h2></div>
                    <div class="col-sm-8"><h4>john@yahoo.com</h4></div>
                  </div>

                  <div class="row group">
                    <div class="col-sm-4"><h4 class="h4">Alamat</h4></div>
                    <div class="col-sm-8">
                    <h4>jbr</h4>

                    </div>
                  </div>
                  <br>
                  <div class="row group">
                    <div class="col-sm-4"><h2 class="h4">Pembayaran</h2></div>
                    <div class="col-sm-8">
                      Cash On Delivery
                    </div>
                  </div>


                  <hr class="offset-lg visible-xs visible-sm">
                  <hr class="offset-lg visible-xs">
            </div>

            <div class="col-md-5 white">
                <hr class="offset-md visible-xs visible-sm">
                <div class="checkout-cart">
                    <div class="content">

                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="<?= base_url() ?>assets/frontend/img/products/ipad-air.jpg" alt="iPad Air"/>
                            </a>
                          </div>
                          <div class="media-body">
                            <h2 class="h4 media-heading">iPad Air</h2>
                            <label>Tablets</label>
                            <p class="price">$449.99</p>
                          </div>
                          <div class="controls">
                            <label>1</label>
                          </div>
                        </div>

                      


                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="<?= base_url() ?>assets/frontend/img/products/asus-transformer.jpg" alt="HP Chromebook 11"/>
                            </a>
                          </div>
                          <div class="media-body">
                            <h2 class="h4 media-heading">ASUS Transformer</h2>
                            <label>Hybrid</label>
                            <p class="price">$199.99</p>
                          </div>
                            <div class="controls">
                              <label>1</label>
                            </div>
                        </div>

                    </div>
                </div>
                <hr class="offset-md visible-xs visible-sm">
            </div>

            <hr class="offset-lg hidden-xs">

            <div class="col-sm-12 white">
                <hr class="offset-md">
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <h3 class="h5 no-margin">Sub total: $1 200</h3>
                        <h3 class="h4 no-margin">Total: $1 200</h3>
                    </div>
                    <div class="col-md-4 hidden-xs">
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <button class="btn btn-primary pull-right" type="submit">Konfirmasi Pesanan</button>
                    </div>
                </div>
                <hr class="offset-md">
            </div>

        </div>
        </form>
    </div>
            </div>


        

        </div>
        <!-- /// -->
      </div>
    </div>


   
    <?php $this->load->view("template/footer") ?>