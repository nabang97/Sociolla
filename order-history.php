<?php include('header.php') ?>

<?php require_once('_auth/AuthPage.php') ?>
<?php require_once('_controller/UserController.php');
require_once('_controller/AddressController.php');
$controllerUser= new UserController();
$controllerAddress= new AddressController();
$orders = $controllerUser->showAwaitingPayment($_SESSION['auth']->email);
$ordersAll = $controllerUser->showOrderHistory($_SESSION['auth']->email);
$userAddress = $controllerAddress->showUserAddress($_SESSION['auth']->email);
//$addres = $controllerUser->showDetailShipping(5);
  // die();
// var_dump($addres);
// die();
 ?>

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
                            <button class="submit-btn-1 black-bg btn-hover-2 form-control" type="submit" data-toggle="modal" data-target="#addAddressModal" >Add Address</button>
                          <?php foreach ($userAddress  as $alamat): ?>
                          <div class="row">
                            <div class="shipping-address-panel">
                                <div class="col-md-4">
                                  <h6 class="bold-text"><?= $alamat->address_title  ?></h6>
                                </div>
                                <div class="col-md-4">
                                  <h6 class="bold-text"><?= $alamat->firstname." ".$alamat->lastname ?></h6>
                                  <p style="text-transform: capitalize">
                                    <?= $alamat->address ?>,
                                    <?php $subdist = $controllerAddress->showSubdistrict($alamat->subdistrict)?>
                                  <span style="text-transform:capitalize;">
                                    <?= $subdist->name ?> </span><br>
                                    <?php  $city = $controllerAddress->showCity($subdist->id_city)?>
                                    <?= $city->name ?><br>
                                    <?php  $province = $controllerAddress->showProvince($city->province_id)?>
                                    <?= $province->name ?>
                                      <?= $alamat->postal_code ?><br>
                                  <?= $alamat->phone_number ?>
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
                                    <button class="submit-btn-1 black-bg btn-hover-2" type="submit" id="btn-set-default<?=$alamat->id_address ?>" onclick="setDefaultAddress('<?= $alamat->id_address ?>','<?= $_SESSION['auth']->email?>')">Set Default</button>
                                </div>
                              </div>
                          </div>
                          <!-- end shipping panel -->
                          <?php endforeach; ?>
                    </div>
                    <div class="tab-pane" id="order-history">
                          <h6 class="widget-title border-left mb-20">Order History</h6>
                          <!-- order history callapse -->
                          <?php foreach ($ordersAll as $orderan): ?>
                          <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <div class="grid-order">
                                        <div class="sociolla-name">
                                        sociolla
                                        </div>
                                        <div class="sociolla-ornum">
                                          <?= $orderan->order_number  ?>
                                        </div>
                                        <div class="date-status">
                                          <span><?= $orderan->date_order ?></span>
                                          <span class="bullet"></span>
                                          <span><?= $orderan->status ?></span>
                                        </div>
                                        <div class="btn-collapse-order">
                                            <a class="collapsed" aria-expanded="false" href="#personal_info" data-toggle="collapse" data-parent="#accordion2">detail</a>
                                        </div>
                                        <div class="item-purchased">
                                          <?php $counts = $controllerUser->countOrders($orderan->order_number);?>
                                          <?= $counts->count." Item purchased"?>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="panel-collapse collapse" id="personal_info" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <table>
                                                <?php $bags = $controllerUser->showBags($orderan->order_number); ?>
                                                <?php foreach ($bags as $bag): ?>
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <!-- <img src="img/product/REAL TECHNIQUES.jpg" alt=""> -->
                                                        </div>
                                                        <?php
                                                        $product = $controllerUser->showDetailProduct($bag->id_detail_product);
                                                        $brand = $controllerUser->showDetailBrand($product->brand_id) ?>
                                                        <div class="pro-thumbnail-info text-left">
                                                            <h6 class="product-title-2 order-title">
                                                                <a href="#"><?= $brand->name ?></a>
                                                            </h6>
                                                            <p><?= $product->name  ?><br>
                                                            <?= $bag->id_detail_product ?><br>
                                                            <?php $array = explode(";",$bag->description) ?>
                                                             <?php foreach ($array as $key): ?>
                                                               <?= $key."<br>"  ?>

                                                             <?php endforeach; ?>


                                                            <span class="price-order"></span>
                                                          </p><br>
                                                            <!-- <p>Model: Grand s2</p>
                                                            <p>Color: Black, White</p> -->
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                              </table>
                                            </div>
                                            <?php $summ = $controllerUser->sumOrders($orderan->order_number) ?>
                                            <div class="col-sm-6">
                                              <div class="detail-order-purchased">
                                                  <div class="row">
                                                    <div class="col-sm-6">
                                                      <p><span class="price-order order-atribute">Total</span><br>
                                                      <span class="order-atribute"><?= $summ->total  ?></span></p>

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
                                                      <?php $payment = $controllerUser->showPaymentMethod($orderan->payment_method) ?>
                                                      <span class="order-atribute"><?= $payment->method?>  <?= $payment->bank  ?></span></p>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-sm-12">
                                                    <p>  <span class="price-order order-atribute">Delivery Address</span><br>
                                                      <?php $address = $controllerUser->showDetailShipping($orderan->shipping_address); ?>
                                                      <span class="order-atribute">
                                                        <?= $address->address ?>
                                                      </span>
                                                    </p>
                                                    </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <!-- end order history collapse -->
                    </div>
                    <div class="tab-pane" id="payment-confirmation">
                          <h6 class="widget-title border-left mb-20">Payment Confirmation</h6>
                          <!-- order history callapse -->

                          <?php foreach ($orders as $order): ?>
                          <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <div class="grid-order">
                                        <div class="sociolla-name">
                                        sociolla
                                        </div>
                                        <div class="sociolla-ornum">
                                          <?= $order->order_number  ?>
                                        </div>
                                        <div class="date-status">
                                          <span>  <?= $order->date_order ?></span>
                                          <span class="bullet"></span>
                                          <span><?= $order->status ?></span>
                                        </div>
                                        <div class="btn-collapse-order">
                                            <a class="collapsed" aria-expanded="false" href="#paymentconf" data-toggle="collapse" data-parent="#accordion3">detail</a>
                                        </div>
                                        <div class="item-purchased">
                                          <?php $counts = $controllerUser->countOrders($order->order_number);?>
                                          <?= $counts->count." Item purchased"?>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="panel-collapse collapse" id="paymentconf" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <table>
                                                <?php $bags = $controllerUser->showBags($order->order_number); ?>
                                                <?php foreach ($bags as $bag): ?>
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <!-- <img src="img/product/REAL TECHNIQUES.jpg" alt=""> -->
                                                        </div>
                                                        <div class="pro-thumbnail-info text-left">
                                                            <h6 class="product-title-2 order-title">
                                                                <a href="#">REAL TECHNIQUES</a>
                                                            </h6>
                                                            <p><?= $bag->id_detail_product ?><br>
                                                            <?php $array = explode(";",$bag->description) ?>
                                                             <?php foreach ($array as $key): ?>
                                                               <?= $key."<br>"  ?>

                                                             <?php endforeach; ?>
                                                            <br>
                                                            <span class="price-order"></span>
                                                          </p>
                                                            <!-- <p>Model: Grand s2</p>
                                                            <p>Color: Black, White</p> -->
                                                        </div>
                                                    </td>
                                                </tr>
                                              <?php endforeach; ?>
                                              </table>
                                            </div>
                                            <?php $sum = $controllerUser->sumOrders($order->order_number) ?>
                                            <div class="col-sm-6">
                                              <div class="detail-order-purchased">
                                                  <div class="row">
                                                    <div class="col-sm-6">
                                                      <p><span class="price-order order-atribute">Total</span><br>
                                                      <span class="order-atribute"><?= $sum->total ?></span></p>

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
                                                      <span class="order-atribute"><?= $order->shipping_address  ?></span>
                                                    </p>
                                                    </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>

                                    <button class="submit-btn-1 black-bg btn-hover-2 form-control" type="submit" data-toggle="modal" data-target="#confirmModal" onclick="confirmationModal('<?= $order->order_number ?>','<?= $order->date_order ?>','<?= $sum->total ?>','<?= $counts->count ?>')">Confirmation payment</button>
                                </div>
                                <!-- end order history collapse -->

                                <?php endforeach; ?>

                    </div>
                  </div>
                </div>
            </div>

            <!-- ORDER HISTORY SECTION END -->
        </div>
        <!-- End page content -->
<?php include('confirm-payment.php') ?>
<?php include('modal-address.php') ?>
<?php include('footer.php') ?>
