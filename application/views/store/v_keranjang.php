<?php $this->load->view("template/header") ?>
<?php $this->load->view("template/navbar") ?>
    <hr class="offset-top">

    <div class="tags">
      <div class="container">
          Keranjang Belanja

         
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
            <div class="table-responsive">
            <form action="<?= base_url('Customer/Shop/update_cart') ?>" method="post">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Produk</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Sub Total</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              
                <tr>
                    <td>
                    <div class="media">
                          <div class="media-body">
                          <img src="<?= base_url(); ?>assets/frontend/img/products/ipad-mini.jpg" width="100" height="100"/>
                          </div>
                      </div>
                    </td>
                  <td>
                    <div class="media">
                      <div class="media-body">
                        <h5 style="margin-top: 0px;">MC1122</h5>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="media">
                      <div class="media-body">
                        <h5 style="margin-top: 0px;">MacBook 12 Pro</h5>
                      </div>
                    </div>
                  </td>
                  <td>
                      <div class="media">
                          <div class="media-body">
                          <h5 style="margin-top: 0px;">Rp. 100000,00-</h5>
                          </div>
                      </div>
                    
                  </td>
                  <input type="hidden" name="id_pemesanan[]" >
                  <td>
                  <div class="media">
                          <div class="media-body">
                          <input style="text-align: center; width: 60px;" type="number" name="jumlah[]" value="1" min="1"  />
                          <input style="text-align: center; width: 60px;" type="hidden" name="subtotal[]" value="1" min="1"  />
                          <input style="text-align: center; width: 60px;" type="hidden" name="harga[]" value="1" min="1"  />
                          </div>
                      </div>
                  </td>
                  <td>
                  <div class="media">
                          <div class="media-body">
                          <h5 style="margin-top: 0px;">Rp. 100000,00-</h5>
                          </div>
                      </div>
                  </td>
                  <td ><button data-toggle="modal" data-target="#modalRemove" type="button" class="btn btn-danger">Remove</button></td>
                </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <h5>Total</h5>
                </td>
                <td>
                  <h5>Rp. 1.000.000,00-</h5>
                </td>
              </tr>
          
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <button type="submit" class="btn btn-warning" href="">Perbarui Keranjang</button>
            <a class="btn btn-success" href="">Lanjut Belanja</a>
          </div>
            </form>
        </div>
        <div class="modal fade" id="modalRemove" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Hapus barang dari keranjang?
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn btn-danger" href="#">Hapus</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>

                    </div>
                </div>
            </div>
        </div>
        <hr class="offset-lg">
    <hr class="offset-lg">
        <div class="col-md-7">
                  <div class="row group">
                    <div class="col-sm-4"><h2 class="h4">Penerima</h2></div>
                    <div class="col-sm-8"> <input type="text" class="form-control" name="penerima" value="John Doe" required="" placeholder="" /></div>
                  </div>

                  <div class="row group">
                    <div class="col-sm-4"><h2 class="h4">Telp</h2></div>
                    <div class="col-sm-8"> <input type="text" class="form-control" name="telp" value="+45 (555) 8546-25-77" required="" placeholder="" /></div>
                  </div>

                  <div class="row group">
                    <div class="col-sm-4"><h2 class="h4">E-mail</h2></div>
                    <div class="col-sm-8"> <input type="email" class="form-control" name="email" value="john@yahoo.com" required="" placeholder="" /></div>
                  </div>

                  <div class="row group">
                    <div class="col-sm-4"><h2 class="h4">Alamat</h2></div>
                    <div class="col-sm-8"> <input type="text" class="form-control" name="alamat" value="jbr" required="" placeholder="" /></div>
                  </div>

                  <div class="">
                    <div class="row">
                      <div class="col-sm-4">
                        <h2 class="h4">Kota</h2>

            

                        <input type="text" class="form-control" name="zip" value="" required="" placeholder="" />
                      </div>
                    </div>
                  </div>
                  <br>


                  <div class="row group">
                    <div class="col-sm-4"><h2 class="h4">Pembayaran</h2></div>
                    <div class="col-sm-8">
                      <div class="group-select justify" tabindex='1'>
                          <input class="form-control select" id="payment" name="payment" value="Cash on Delivery" placeholder="" required="" />

                          <ul class="dropdown">
                            <li data-value="Cash on Delivery">Cash on Delivery</li>
                            <li data-value="Credit Card">Credit Card</li>
                          </ul>

                          <div class="arrow bold"><i class="ion-chevron-down"></i></div>
                      </div>
                    </div>
                  </div>

                  <div class="row group">
                    <div class="col-sm-4"><h2 class="h4">Kode Promo</h2></div>
                    <div class="col-sm-8"> <input type="text" class="form-control" name="promo" value="" required="" placeholder="" /></div>
                  </div>


                  <hr class="offset-lg visible-xs visible-sm">
                  <hr class="offset-lg visible-xs">
            </div>
            </div>


        

        </div>
        <!-- /// -->
      </div>
    </div>


   
    <?php $this->load->view("template/footer") ?>