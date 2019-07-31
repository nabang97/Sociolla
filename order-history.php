<?php include('header.php') ?>

<?php require_once('_auth/AuthPage.php') ?>

        <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80">
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">ORDER HISTORY</h1>
                                <ul class="breadcrumb-list">
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>Order History</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->

        <!-- Start page content -->
        <div id="page-content" class="page-wrapper">

            <!-- ORDER HISTORY SECTION START -->
            <div class="container">
                <div class="col-md-4">
                  <div class="sidebar-profile box-shadow mb-30">
                      <div class="panel-group" style="padding:20px;">
                        <ul id="myList">
                          <li><a href="#profile" data-toggle="tab">Profile</a></li>
                          <li><a href="#address" data-toggle="tab">Shipping Address</a></li>
                          <li><a href="#order-history" data-toggle="tab">Order History</a></li>
                          <li><a href="#payment-confirmation" data-toggle="tab">Payment Confirmation</a></li>
                        </ul>
                      </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                          <h6 class="widget-title border-left mb-20">Your Profile</h6>
                    </div>
                    <div class="tab-pane" id="address">
                          <h6 class="widget-title border-left mb-20">Shipping Address</h6>
                          <!-- <div class="show-address-panel">
                          <select class="form-control" name="">
                            <option value="">My Address</option>
                            <option value="">Rumah Mama</option>
                            <option value="">Rumah Ika</option>
                            <option value="">Second Address</option>
                          </select>
                          </div> -->
                          <!-- start shipping panel -->
                          <div class="row">
                            <div class="shipping-address-panel">
                                <div class="col-md-4">
                                  <h6 class="bold-text">My address</h6>
                                </div>
                                <div class="col-md-4">
                                  <h6 class="bold-text">Yolanda parawita</h6>
                                  <p>Jalan Adinegoro, Perumahan Lubuk Sejahtera Lestari Blok Graniti No. 19, RT 03/ RW 08, Kel. Lubuk Buaya, Padang, Sumatera Barat, 251732<br>
                                  <span>081267866712</span>
                                  <div class="" >
                                    <a href="#">
                                      <img src="svg/edit.svg" alt=""> Edit
                                    </a>
                                    <a href="#" style="margin-left:10px;">
                                      <img src="svg/delete.svg" alt=""> Delete
                                    </a>
                                  </div>

                                </p>

                                </div>
                                <div class="col-md-4">
                                    <button class="submit-btn-1 black-bg btn-hover-2" type="submit">Set Default</button>
                                </div>
                              </div>
                          </div>
                          <!-- end shipping panel -->
                          <!-- start shipping panel -->
                          <div class="row">
                            <div class="shipping-address-panel">
                                <div class="col-md-4">
                                  <h6 class="bold-text">My address</h6>
                                </div>
                                <div class="col-md-4">
                                  <h6 class="bold-text">Yolanda parawita</h6>
                                  <p>Jalan Adinegoro, Perumahan Lubuk Sejahtera Lestari Blok Graniti No. 19, RT 03/ RW 08, Kel. Lubuk Buaya, Padang, Sumatera Barat, 251732<br>
                                  <span>081267866712</span>
                                  <div class="" >
                                    <a href="#">
                                      <img src="svg/edit.svg" alt=""> Edit
                                    </a>
                                    <a href="#" style="margin-left:10px;">
                                      <img src="svg/delete.svg" alt=""> Delete
                                    </a>
                                  </div>

                                </p>

                                </div>
                                <div class="col-md-4">
                                    <button class="submit-btn-1 black-bg btn-hover-2" type="submit">Set Default</button>
                                </div>
                              </div>
                          </div>
                          <!-- end shipping panel -->
                          <!-- start shipping panel -->
                          <div class="row">
                            <div class="shipping-address-panel">
                                <div class="col-md-4">
                                  <h6 class="bold-text">My address</h6>
                                </div>
                                <div class="col-md-4">
                                  <h6 class="bold-text">Yolanda parawita</h6>
                                  <p>Jalan Adinegoro, Perumahan Lubuk Sejahtera Lestari Blok Graniti No. 19, RT 03/ RW 08, Kel. Lubuk Buaya, Padang, Sumatera Barat, 251732<br>
                                  <span>081267866712</span>
                                  <div class="" >
                                    <a href="#">
                                      <img src="svg/edit.svg" alt=""> Edit
                                    </a>
                                    <a href="#" style="margin-left:10px;">
                                      <img src="svg/delete.svg" alt=""> Delete
                                    </a>
                                  </div>

                                </p>

                                </div>
                                <div class="col-md-4">
                                    <button class="submit-btn-1 black-bg btn-hover-2" type="submit">Set Default</button>
                                </div>
                              </div>
                          </div>
                          <!-- end shipping panel -->
                    </div>
                    <div class="tab-pane" id="order-history">
                          <h6 class="widget-title border-left mb-20">Order History</h6>
                          <!-- order history callapse -->
                          <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <div class="grid-order">
                                        <div class="sociolla-name">
                                        sociolla
                                        </div>
                                        <div class="sociolla-ornum">
                                          ASFFGHJK
                                        </div>
                                        <div class="date-status">
                                          <span>25 Juli 2019</span>
                                          <span class="bullet"></span>
                                          <span>Awaiting Payment Confirmation</span>
                                        </div>
                                        <div class="btn-collapse-order">
                                            <a class="collapsed" aria-expanded="false" href="#personal_info" data-toggle="collapse" data-parent="#accordion2">detail</a>
                                        </div>
                                        <div class="item-purchased">
                                          1 items purchased
                                        </div>
                                      </div>
                                    </div>
                                    <div class="panel-collapse collapse" id="personal_info" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <table>
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="img/product/REAL TECHNIQUES.jpg" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-left">
                                                            <h6 class="product-title-2 order-title">
                                                                <a href="#">REAL TECHNIQUES</a>
                                                            </h6>
                                                            <p>1786 Everyday Essentials Set<br>
                                                            Size: blabla<br>
                                                            <span class="price-order">Rp 320,320</span>
                                                          </p>
                                                            <!-- <p>Model: Grand s2</p>
                                                            <p>Color: Black, White</p> -->
                                                        </div>
                                                    </td>
                                                </tr>
                                              </table>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="detail-order-purchased">
                                                  <div class="row">
                                                    <div class="col-sm-6">
                                                      <p><span class="price-order order-atribute">Subtotal</span><br>
                                                      <span class="order-atribute">Rp 320,320</span></p>

                                                    </div>
                                                    <div class="col-sm-6">
                                                      <p><span class="price-order order-atribute">Savings</span><br>
                                                      <span class="order-atribute">Rp 0</span></p>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-sm-12">
                                                      <p>
                                                      <span class="price-order order-atribute">Payment Method</span><br>
                                                      <span class="order-atribute">Bank Wire Multiple</span></p>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-sm-12">
                                                    <p>  <span class="price-order order-atribute">Delivery Address</span><br>
                                                      <span class="order-atribute">Jalan Adinegoro, Perumahan Lubuk Sejahtera Lestari Blok Graniti No. 19, RT 03/ RW 08, Kel. Lubuk Buaya</span>
                                                    </p>
                                                    </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end order history collapse -->
                    </div>
                    <div class="tab-pane" id="payment-confirmation">
                          <h6 class="widget-title border-left mb-20">Payment Confirmation</h6>
                          <!-- order history callapse -->
                          <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <div class="grid-order">
                                        <div class="sociolla-name">
                                        sociolla
                                        </div>
                                        <div class="sociolla-ornum">
                                          ASFFGHJK
                                        </div>
                                        <div class="date-status">
                                          <span>25 Juli 2019</span>
                                          <span class="bullet"></span>
                                          <span>Awaiting Payment Confirmation</span>
                                        </div>
                                        <div class="btn-collapse-order">
                                            <a class="collapsed" aria-expanded="false" href="#paymentconf" data-toggle="collapse" data-parent="#accordion3">detail</a>
                                        </div>
                                        <div class="item-purchased">
                                          1 items purchased
                                        </div>
                                      </div>
                                    </div>
                                    <div class="panel-collapse collapse" id="paymentconf" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <table>
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="img/product/REAL TECHNIQUES.jpg" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-left">
                                                            <h6 class="product-title-2 order-title">
                                                                <a href="#">REAL TECHNIQUES</a>
                                                            </h6>
                                                            <p>1786 Everyday Essentials Set<br>
                                                            Size: blabla<br>
                                                            <span class="price-order">Rp 320,320</span>
                                                          </p>
                                                            <!-- <p>Model: Grand s2</p>
                                                            <p>Color: Black, White</p> -->
                                                        </div>
                                                    </td>
                                                </tr>
                                              </table>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="detail-order-purchased">
                                                  <div class="row">
                                                    <div class="col-sm-6">
                                                      <p><span class="price-order order-atribute">Subtotal</span><br>
                                                      <span class="order-atribute">Rp 320,320</span></p>

                                                    </div>
                                                    <div class="col-sm-6">
                                                      <p><span class="price-order order-atribute">Savings</span><br>
                                                      <span class="order-atribute">Rp 0</span></p>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-sm-12">
                                                      <p>
                                                      <span class="price-order order-atribute">Payment Method</span><br>
                                                      <span class="order-atribute">Bank Wire Multiple</span></p>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-sm-12">
                                                    <p>  <span class="price-order order-atribute">Delivery Address</span><br>
                                                      <span class="order-atribute">Jalan Adinegoro, Perumahan Lubuk Sejahtera Lestari Blok Graniti No. 19, RT 03/ RW 08, Kel. Lubuk Buaya</span>
                                                    </p>
                                                    </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    <button class="submit-btn-1 black-bg btn-hover-2 form-control" type="submit" data-toggle="modal" data-target="#confirmModal">Confirmation payment</button>
                                </div>
                                <!-- end order history collapse -->
                    </div>
                  </div>
                </div>
            </div>

            <!-- ORDER HISTORY SECTION END -->
        </div>
        <!-- End page content -->
        <?php include('confirm-payment.php') ?>
<?php include('footer.php') ?>
