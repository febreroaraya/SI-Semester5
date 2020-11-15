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
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
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
            <a class="btn btn-success" href="">Continue Shopping</a>
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
                        <a type="button" class="btn btn-danger" href="">Hapus</a>
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
                    <div class="col-sm-8"> <input type="text" class="form-control" name="receiver" value="John Doe" required="" placeholder="" /></div>
                  </div>

                  <div class="row group">
                    <div class="col-sm-4"><h2 class="h4">Telp</h2></div>
                    <div class="col-sm-8"> <input type="text" class="form-control" name="phone" value="+45 (555) 8546-25-77" required="" placeholder="" /></div>
                  </div>

                  <div class="row group">
                    <div class="col-sm-4"><h2 class="h4">E-mail</h2></div>
                    <div class="col-sm-8"> <input type="email" class="form-control" name="email" value="john@yahoo.com" required="" placeholder="" /></div>
                  </div>

                  <div class="row group">
                    <div class="col-sm-4"><h2 class="h4">Pilih Negars</h2></div>
                    <div class="col-sm-8">
                      <!-- <input type="text" class="form-control" name="country" value="" required="" placeholder="" /> -->

                      <div class="group-select justify" tabindex='1'>
                          <input class="form-control select" id="country" name="country" value="United Kingdom" placeholder="" required="" />

                          <ul class="dropdown">
                            <li data-value="Aaland Islands">Aaland Islands</li>
                            <li data-value="Afghanistan">Afghanistan</li>
                            <li data-value="Albania">Albania</li>
                            <li data-value="Algeria">Algeria</li>
                            <li data-value="American Samoa">American Samoa</li>
                            <li data-value="Andorra">Andorra</li>
                            <li data-value="Angola">Angola</li>
                            <li data-value="Anguilla">Anguilla</li>
                            <li data-value="Antarctica">Antarctica</li>
                            <li data-value="Antigua and Barbuda">Antigua and Barbuda</li>
                            <li data-value="Argentina">Argentina</li>
                            <li data-value="Armenia">Armenia</li>
                            <li data-value="Aruba">Aruba</li>
                            <li data-value="Ascension Island (British)">Ascension Island (British)</li>
                            <li data-value="Australia">Australia</li>
                            <li data-value="Austria">Austria</li>
                            <li data-value="Azerbaijan">Azerbaijan</li>
                            <li data-value="Bahamas">Bahamas</li>
                            <li data-value="Bahrain">Bahrain</li>
                            <li data-value="Bangladesh">Bangladesh</li>
                            <li data-value="Barbados">Barbados</li>
                            <li data-value="Belarus">Belarus</li>
                            <li data-value="Belgium">Belgium</li>
                            <li data-value="Belize">Belize</li>
                            <li data-value="Benin">Benin</li>
                            <li data-value="Bermuda">Bermuda</li>
                            <li data-value="Bhutan">Bhutan</li>
                            <li data-value="Bolivia">Bolivia</li>
                            <li data-value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</li>
                            <li data-value="Bosnia and Herzegovina">Bosnia and Herzegovina</li>
                            <li data-value="Botswana">Botswana</li>
                            <li data-value="Bouvet Island">Bouvet Island</li>
                            <li data-value="Brasil">Brasil</li>
                            <li data-value="British Indian Ocean Territory">British Indian Ocean Territory</li>
                            <li data-value="Brunei Darussalam">Brunei Darussalam</li>
                            <li data-value="Bulgaria">Bulgaria</li>
                            <li data-value="Burkina Faso">Burkina Faso</li>
                            <li data-value="Burundi">Burundi</li>
                            <li data-value="Cambodia">Cambodia</li>
                            <li data-value="Cameroon">Cameroon</li>
                            <li data-value="Canada">Canada</li>
                            <li data-value="Canary Islands">Canary Islands</li>
                            <li data-value="Cape Verde">Cape Verde</li>
                            <li data-value="Cayman Islands">Cayman Islands</li>
                            <li data-value="Central African Republic">Central African Republic</li>
                            <li data-value="Chad">Chad</li>
                            <li data-value="Chile">Chile</li>
                            <li data-value="China">China</li>
                            <li data-value="Christmas Island">Christmas Island</li>
                            <li data-value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</li>
                            <li data-value="Colombia">Colombia</li>
                            <li data-value="Comoros">Comoros</li>
                            <li data-value="Congo">Congo</li>
                            <li data-value="Cook Islands">Cook Islands</li>
                            <li data-value="Costa Rica">Costa Rica</li>
                            <li data-value="Cote D'Ivoire">Cote D'Ivoire</li>
                            <li data-value="Croatia">Croatia</li>
                            <li data-value="Cuba">Cuba</li>
                            <li data-value="Curacao">Curacao</li>
                            <li data-value="Cyprus">Cyprus</li>
                            <li data-value="Czech Republic">Czech Republic</li>
                            <li data-value="Democratic Republic of Congo">Democratic Republic of Congo</li>
                            <li data-value="Denmark">Denmark</li>
                            <li data-value="Djibouti">Djibouti</li>
                            <li data-value="Dominica">Dominica</li>
                            <li data-value="Dominican Republic">Dominican Republic</li>
                            <li data-value="East Timor">East Timor</li>
                            <li data-value="Ecuador">Ecuador</li>
                            <li data-value="Egypt">Egypt</li>
                            <li data-value="El Salvador">El Salvador</li>
                            <li data-value="Equatorial Guinea">Equatorial Guinea</li>
                            <li data-value="Eritrea">Eritrea</li>
                            <li data-value="Estonia">Estonia</li>
                            <li data-value="Ethiopia">Ethiopia</li>
                            <li data-value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</li>
                            <li data-value="Faroe Islands">Faroe Islands</li>
                            <li data-value="Fiji">Fiji</li>
                            <li data-value="Finland">Finland</li>
                            <li data-value="France, Metropolitan">France, Metropolitan</li>
                            <li data-value="French Guiana">French Guiana</li>
                            <li data-value="French Polynesia">French Polynesia</li>
                            <li data-value="French Southern Territories">French Southern Territories</li>
                            <li data-value="FYROM">FYROM</li>
                            <li data-value="Gabon">Gabon</li>
                            <li data-value="Gambia">Gambia</li>
                            <li data-value="Georgia">Georgia</li>
                            <li data-value="Germany">Germany</li>
                            <li data-value="Ghana">Ghana</li>
                            <li data-value="Gibraltar">Gibraltar</li>
                            <li data-value="Greece">Greece</li>
                            <li data-value="Greenland">Greenland</li>
                            <li data-value="Grenada">Grenada</li>
                            <li data-value="Guadeloupe">Guadeloupe</li>
                            <li data-value="Guam">Guam</li>
                            <li data-value="Guatemala">Guatemala</li>
                            <li data-value="Guernsey">Guernsey</li>
                            <li data-value="Guinea">Guinea</li>
                            <li data-value="Guinea-Bissau">Guinea-Bissau</li>
                            <li data-value="Guyana">Guyana</li>
                            <li data-value="Haiti">Haiti</li>
                            <li data-value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</li>
                            <li data-value="Honduras">Honduras</li>
                            <li data-value="Hong Kong">Hong Kong</li>
                            <li data-value="Hungary">Hungary</li>
                            <li data-value="Iceland">Iceland</li>
                            <li data-value="India">India</li>
                            <li data-value="Indonesia">Indonesia</li>
                            <li data-value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</li>
                            <li data-value="Iraq">Iraq</li>
                            <li data-value="Ireland">Ireland</li>
                            <li data-value="Isle of Man">Isle of Man</li>
                            <li data-value="Israel">Israel</li>
                            <li data-value="Italy">Italy</li>
                            <li data-value="Jamaica">Jamaica</li>
                            <li data-value="Japan">Japan</li>
                            <li data-value="Jersey">Jersey</li>
                            <li data-value="Jordan">Jordan</li>
                            <li data-value="Kazakhstan">Kazakhstan</li>
                            <li data-value="Kenya">Kenya</li>
                            <li data-value="Kiribati">Kiribati</li>
                            <li data-value="Korea, Republic of">Korea, Republic of</li>
                            <li data-value="Kosovo, Republic of">Kosovo, Republic of</li>
                            <li data-value="Kuwait">Kuwait</li>
                            <li data-value="Kyrgyzstan">Kyrgyzstan</li>
                            <li data-value="Lao People's Democratic Republic">Lao People's Democratic Republic</li>
                            <li data-value="Latvia">Latvia</li>
                            <li data-value="Lebanon">Lebanon</li>
                            <li data-value="Lesotho">Lesotho</li>
                            <li data-value="Liberia">Liberia</li>
                            <li data-value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</li>
                            <li data-value="Liechtenstein">Liechtenstein</li>
                            <li data-value="Lithuania">Lithuania</li>
                            <li data-value="Luxembourg">Luxembourg</li>
                            <li data-value="Macau">Macau</li>
                            <li data-value="Madagascar">Madagascar</li>
                            <li data-value="Malawi">Malawi</li>
                            <li data-value="Malaysia">Malaysia</li>
                            <li data-value="Maldives">Maldives</li>
                            <li data-value="Mali">Mali</li>
                            <li data-value="Malta">Malta</li>
                            <li data-value="Marshall Islands">Marshall Islands</li>
                            <li data-value="Martinique">Martinique</li>
                            <li data-value="Mauritania">Mauritania</li>
                            <li data-value="Mauritius">Mauritius</li>
                            <li data-value="Mayotte">Mayotte</li>
                            <li data-value="Mexico">Mexico</li>
                            <li data-value="Micronesia, Federated States of">Micronesia, Federated States of</li>
                            <li data-value="Moldova, Republic of">Moldova, Republic of</li>
                            <li data-value="Monaco">Monaco</li>
                            <li data-value="Mongolia">Mongolia</li>
                            <li data-value="Montenegro">Montenegro</li>
                            <li data-value="Montserrat">Montserrat</li>
                            <li data-value="Morocco">Morocco</li>
                            <li data-value="Mozambique">Mozambique</li>
                            <li data-value="Myanmar">Myanmar</li>
                            <li data-value="Namibia">Namibia</li>
                            <li data-value="Nauru">Nauru</li>
                            <li data-value="Nepal">Nepal</li>
                            <li data-value="Netherlands">Netherlands</li>
                            <li data-value="Netherlands Antilles">Netherlands Antilles</li>
                            <li data-value="New Caledonia">New Caledonia</li>
                            <li data-value="New Zealand">New Zealand</li>
                            <li data-value="Nicaragua">Nicaragua</li>
                            <li data-value="Niger">Niger</li>
                            <li data-value="Nigeria">Nigeria</li>
                            <li data-value="Niue">Niue</li>
                            <li data-value="Norfolk Island">Norfolk Island</li>
                            <li data-value="North Korea">North Korea</li>
                            <li data-value="Northern Mariana Islands">Northern Mariana Islands</li>
                            <li data-value="Norway">Norway</li>
                            <li data-value="Oman">Oman</li>
                            <li data-value="Pakistan">Pakistan</li>
                            <li data-value="Palau">Palau</li>
                            <li data-value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</li>
                            <li data-value="Panama">Panama</li>
                            <li data-value="Papua New Guinea">Papua New Guinea</li>
                            <li data-value="Paraguay">Paraguay</li>
                            <li data-value="Peru">Peru</li>
                            <li data-value="Philippines">Philippines</li>
                            <li data-value="Pitcairn">Pitcairn</li>
                            <li data-value="Poland">Poland</li>
                            <li data-value="Portugal">Portugal</li>
                            <li data-value="Puerto Rico">Puerto Rico</li>
                            <li data-value="Qatar">Qatar</li>
                            <li data-value="Reunion">Reunion</li>
                            <li data-value="Romania">Romania</li>
                            <li data-value="Russian Federation">Russian Federation</li>
                            <li data-value="Rwanda">Rwanda</li>
                            <li data-value="Saint Kitts and Nevis">Saint Kitts and Nevis</li>
                            <li data-value="Saint Lucia">Saint Lucia</li>
                            <li data-value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</li>
                            <li data-value="Samoa">Samoa</li>
                            <li data-value="San Marino">San Marino</li>
                            <li data-value="Sao Tome and Principe">Sao Tome and Principe</li>
                            <li data-value="Saudi Arabia">Saudi Arabia</li>
                            <li data-value="Senegal">Senegal</li>
                            <li data-value="Serbia">Serbia</li>
                            <li data-value="Seychelles">Seychelles</li>
                            <li data-value="Sierra Leone">Sierra Leone</li>
                            <li data-value="Singapore">Singapore</li>
                            <li data-value="Slovak Republic">Slovak Republic</li>
                            <li data-value="Slovenia">Slovenia</li>
                            <li data-value="Solomon Islands">Solomon Islands</li>
                            <li data-value="Somalia">Somalia</li>
                            <li data-value="South Africa">South Africa</li>
                            <li data-value="South Georgia &amp; South Sandwich Islands">South Georgia &amp; South Sandwich Islands</li>
                            <li data-value="South Sudan">South Sudan</li>
                            <li data-value="Spain">Spain</li>
                            <li data-value="Sri Lanka">Sri Lanka</li>
                            <li data-value="St. Barthelemy">St. Barthelemy</li>
                            <li data-value="St. Helena">St. Helena</li>
                            <li data-value="St. Martin (French part)">St. Martin (French part)</li>
                            <li data-value="St. Pierre and Miquelon">St. Pierre and Miquelon</li>
                            <li data-value="Sudan">Sudan</li>
                            <li data-value="Suriname">Suriname</li>
                            <li data-value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</li>
                            <li data-value="Swaziland">Swaziland</li>
                            <li data-value="Sweden">Sweden</li>
                            <li data-value="Switzerland">Switzerland</li>
                            <li data-value="Syrian Arab Republic">Syrian Arab Republic</li>
                            <li data-value="Taiwan">Taiwan</li>
                            <li data-value="Tajikistan">Tajikistan</li>
                            <li data-value="Tanzania, United Republic of">Tanzania, United Republic of</li>
                            <li data-value="Thailand">Thailand</li>
                            <li data-value="Togo">Togo</li>
                            <li data-value="Tokelau">Tokelau</li>
                            <li data-value="Tonga">Tonga</li>
                            <li data-value="Trinidad and Tobago">Trinidad and Tobago</li>
                            <li data-value="Tristan da Cunha">Tristan da Cunha</li>
                            <li data-value="Tunisia">Tunisia</li>
                            <li data-value="Turkey">Turkey</li>
                            <li data-value="Turkmenistan">Turkmenistan</li>
                            <li data-value="Turks and Caicos Islands">Turks and Caicos Islands</li>
                            <li data-value="Tuvalu">Tuvalu</li>
                            <li data-value="Uganda">Uganda</li>
                            <li data-value="Ukraine">Ukraine</li>
                            <li data-value="United Arab Emirates">United Arab Emirates</li>
                            <li data-value="United Kingdom">United Kingdom</li>
                            <li data-value=">United States">>United States</li>
                            <li data-value="United States Minor Outlying Islands">United States Minor Outlying Islands</li>
                            <li data-value="Uruguay">Uruguay</li>
                            <li data-value="Uzbekistan">Uzbekistan</li>
                            <li data-value="Vanuatu">Vanuatu</li>
                            <li data-value="Vatican City State (Holy See)">Vatican City State (Holy See)</li>
                            <li data-value="Venezuela">Venezuela</li>
                            <li data-value="Viet Nam">Viet Nam</li>
                            <li data-value="Virgin Islands (British)">Virgin Islands (British)</li>
                            <li data-value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</li>
                            <li data-value="Wallis and Futuna Islands">Wallis and Futuna Islands</li>
                            <li data-value="Western Sahara">Western Sahara</li>
                            <li data-value="Yemen">Yemen</li>
                            <li data-value="Zambia">Zambia</li>
                            <li data-value="Zimbabwe">Zimbabwe</li>
                          </ul>

                          <div class="arrow bold"><i class="ion-chevron-down"></i></div>
                      </div>
                    </div>
                  </div>

                  <div class="">
                    <div class="row">
                      <div class="col-sm-4">
                        <h2 class="h4">Kota</h2>

                        <input type="text" class="form-control" name="city" value="" required="" placeholder="" />
                      </div>
                      <div class="col-sm-4">
                        <h2 class="h4">Jalan</h2>

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