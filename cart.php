<?php include('header.php') ?>

        <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80">
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">Shopping Cart</h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Shopping Cart</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- SHOP SECTION START -->
            <div class="shop-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                            <ul class="cart-tab">
                                <li>
                                    <a class="active" href="#shopping-cart" data-toggle="tab">
                                        <span>01</span>
                                        Shopping cart
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="#wishlist" data-toggle="tab">
                                        <span>02</span>
                                        Wishlist
                                    </a>
                                </li> -->
                                <li>
                                    <a href="#checkout" data-toggle="tab">
                                        <span>02</span>
                                        Checkout
                                    </a>
                                </li>
                                <li>
                                    <a href="#payment-method" data-toggle="tab">
                                        <span>03</span>
                                        Payment Method
                                    </a>
                                </li>
                                <li>
                                    <a href="#order-complete" data-toggle="tab">
                                        <span>04</span>
                                        Order complete
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- shopping-cart start -->
                                <div class="tab-pane active" id="shopping-cart">
                                    <div class="shopping-cart-content">
                                        <form action="#">
                                            <div class="table-content table-responsive mb-50">
                                                <table class="text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-thumbnail">product</th>
                                                            <th class="product-price">price</th>
                                                            <th class="product-quantity">Quantity</th>
                                                            <th class="product-subtotal">total</th>
                                                            <th class="product-remove">remove</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- tr -->
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="img/product/REAL TECHNIQUES.jpg" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="#">1786 Everyday Essentials Set</a>
                                                                    </h6>
                                                                    <p>Brand: REAL TECHNIQUES</p>
                                                                    <!-- <p>Model: Grand s2</p>
                                                                    <p>Color: Black, White</p> -->
                                                                </div>
                                                            </td>
                                                            <td class="product-price">Rp 320,320</td>
                                                            <td class="product-quantity">
                                                                <div class="cart-plus-minus f-left">
                                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                                </div>
                                                            </td>
                                                            <td class="product-subtotal">Rp 320,320</td>
                                                            <td class="product-remove">
                                                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                            </td>
                                                        </tr>
                                                        <!-- tr -->
                                                        <!-- <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="img/cart/2.jpg" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="#">dummy product name</a>
                                                                    </h6>
                                                                    <p>Brand: Brand Name</p>
                                                                    <p>Model: Grand s2</p>
                                                                    <p> Color: Black, White</p>
                                                                </div>
                                                            </td>
                                                            <td class="product-price">$560.00</td>
                                                            <td class="product-quantity">
                                                                <div class="cart-plus-minus f-left">
                                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                                </div>
                                                            </td>
                                                            <td class="product-subtotal">$1020.00</td>
                                                            <td class="product-remove">
                                                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                            </td>
                                                        </tr> -->
                                                        <!-- tr -->
                                                        <!-- <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="img/cart/3.jpg" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="#">dummy product name</a>
                                                                    </h6>
                                                                    <p>Brand: Brand Name</p>
                                                                    <p>Model: Grand s2</p>
                                                                    <p> Color: Black, White</p>
                                                                </div>
                                                            </td>
                                                            <td class="product-price">$560.00</td>
                                                            <td class="product-quantity">
                                                                <div class="cart-plus-minus f-left">
                                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                                </div>
                                                            </td>
                                                            <td class="product-subtotal">$1020.00</td>
                                                            <td class="product-remove">
                                                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                            </td>
                                                        </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="coupon-discount box-shadow p-30 mb-50">
                                                        <h6 class="widget-title border-left mb-20">coupon discount</h6>
                                                        <p>Enter your coupon code if you have one!</p>
                                                        <div class="form-inline">
                                                          <input type="text" name="name" placeholder="Enter your code here.">
                                                          <button class="submit-btn-1 black-bg btn-hover-2" type="submit">apply coupon</button>
                                                        </div>
                                                    </div>
                                                    <div class="coupon-discount box-shadow p-30 mb-50">
                                                        <h6 class="widget-title border-left mb-20">redeem point</h6>
                                                        <p>Enter your coupon code if you have one!</p>
                                                        <div class="form-inline">
                                                          <input type="text" name="name" placeholder="Enter your code here.">
                                                          <button class="submit-btn-1 black-bg btn-hover-2" type="submit">redeem</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="payment-details box-shadow p-30 mb-50">
                                                        <h6 class="widget-title border-left mb-20">payment details</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="td-title-1">Cart Subtotal</td>
                                                                <td class="td-title-2">$155.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-title-1">Discount</td>
                                                                <td class="td-title-2">$15.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-title-1">Point Redeem</td>
                                                                <td class="td-title-2">$00.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="order-total">Order Total</td>
                                                                <td class="order-total-price">$170.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-title-1"><small>Beauty points earned</small></td>
                                                                <td class="td-title-2"><small>12</small></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="row">
                                                <div class="col-md-12">
                                                    <div class="culculate-shipping box-shadow p-30">
                                                        <h6 class="widget-title border-left mb-20">culculate shipping</h6>
                                                        <p>Enter your coupon code if you have one!</p>
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12">
                                                                <input type="text"  placeholder="Country">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12">
                                                                <input type="text"  placeholder="Region / State">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12">
                                                                <input type="text"  placeholder="Post code">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <button class="submit-btn-1 black-bg btn-hover-2">get a quote</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </form>
                                    </div>
                                </div>
                                <!-- shopping-cart end -->
                                <!-- wishlist start -->
                                <div class="tab-pane" id="wishlist">
                                    <div class="wishlist-content">
                                        <form action="#">
                                            <div class="table-content table-responsive mb-50">
                                                <table class="text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-thumbnail">product</th>
                                                            <th class="product-price">price</th>
                                                            <th class="product-stock">Stock status</th>
                                                            <th class="product-add-cart">add to cart</th>
                                                            <th class="product-remove">remove</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- tr -->
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="img/cart/1.jpg" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="#">dummy product name</a>
                                                                    </h6>
                                                                    <p>Brand: Brand Name</p>
                                                                    <p>Model: Grand s2</p>
                                                                    <p> Color: Black, White</p>
                                                                </div>
                                                            </td>
                                                            <td class="product-price">$560.00</td>
                                                            <td class="product-stock text-uppercase">in stoct</td>
                                                            <td class="product-add-cart">
                                                                <a href="#" title="Add To Cart">
                                                                    <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                                </a>
                                                            </td>
                                                            <td class="product-remove">
                                                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                            </td>
                                                        </tr>
                                                        <!-- tr -->
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="img/cart/2.jpg" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="#">dummy product name</a>
                                                                    </h6>
                                                                    <p>Brand: Brand Name</p>
                                                                    <p>Model: Grand s2</p>
                                                                    <p> Color: Black, White</p>
                                                                </div>
                                                            </td>
                                                            <td class="product-price">$560.00</td>
                                                            <td class="product-stock text-uppercase">in stoct</td>
                                                            <td class="product-add-cart">
                                                                <a href="#" title="Add To Cart">
                                                                    <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                                </a>
                                                            </td>
                                                            <td class="product-remove">
                                                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                            </td>
                                                        </tr>
                                                        <!-- tr -->
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <div class="pro-thumbnail-img">
                                                                    <img src="img/cart/3.jpg" alt="">
                                                                </div>
                                                                <div class="pro-thumbnail-info text-left">
                                                                    <h6 class="product-title-2">
                                                                        <a href="#">dummy product name</a>
                                                                    </h6>
                                                                    <p>Brand: Brand Name</p>
                                                                    <p>Model: Grand s2</p>
                                                                    <p> Color: Black, White</p>
                                                                </div>
                                                            </td>
                                                            <td class="product-price">$560.00</td>
                                                            <td class="product-stock text-uppercase">in stoct</td>
                                                            <td class="product-add-cart">
                                                                <a href="#" title="Add To Cart">
                                                                    <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                                </a>
                                                            </td>
                                                            <td class="product-remove">
                                                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- wishlist end -->
                                <!-- checkout start -->
                                <div class="tab-pane" id="checkout">
                                    <div class="checkout-content box-shadow p-30">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h6 class="widget-title border-left mb-20">SHIPPING ADDRESS</h6>
                                                    <p>Choose a shipping address:</p>
                                                    <select class="custom-select">
                                                      <option value="defalt">My Address</option>
                                                      <option value="c-1">Rumah Mama</option>
                                                      <option value="c-2">Rumah Ika</option>
                                                      <option value="c-3">Second Address</option>
                                                      </select>
                                                      <div class="col-sm-7">
                                                        <h6><b>Ship to:</b></h6>
                                                        <p>Yolanda Parawita<br>
                                                          Jalan Adinegoro, Perumahan Lubuk Sejahtera Lestari Blok Graniti No. 19, RT 03/ RW 08, Kel. Lubuk Buaya<br>
                                                          Padang<br>
                                                          Sumatra Barat<br>
                                                          25173<br>
                                                          Indonesia
                                                        </p>
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <h6><b>E-mail:</b></h6>
                                                        <p>parawitayolanda@gmail.com</p>
                                                        <h6><b>Contact:</b></h6>
                                                        <p>081267866712</p>
                                                      </div>

                                                </div>
                                                <div class="col-md-5">
                                                  <h6 class="widget-title border-left mb-20">SHIPPING FEE</h6>
                                                  <h6>FREE SHIPPING</h6><br>

                                                  <p><b>Estimated delivery time:</b><br>

                                                  3-5 business days from the payment confirmation date. <br>
                                                  Except For Pre-Order, delivery schedule follows each terms and conditions.<br>

                                                  <b>Operation hours:</b><br>

                                                  Monday - Friday: 8 AM - 5 PM <br>
                                                  No delivery on Saturday, Sunday and Public Holiday <br>
                                                  Order placed after 5pm will be processed the next business day<p>
                                                </div>

                                            </div>
                                            <div class="form-inline">
                                              <button class="submit-btn-1 mt-20 btn-hover-1" type="submit">Update address</button>
                                              <button class="submit-btn-1 mt-20 btn-hover-1" type="submit">add address</button>
                                              <button class="submit-btn-1 mt-20 btn-hover-1 pull-right" type="submit">PROCESS TO PAYMENT</button>
                                            </div>
                                            <div class="">

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- checkout end -->
                                <!-- order-complete start -->
                                <div class="tab-pane" id="order-complete">
                                    <div class="order-complete-content box-shadow">
                                        <div class="thank-you p-30 text-center">
                                            <h6 class="text-black-5 mb-0">Thank you. Your order has been received.</h6>
                                        </div>
                                        <div class="order-info p-30 mb-10">
                                          <h6 class="text-black-5 mb-0 bold-text text-center">SILAKAN SELESAIKAN PEMBAYARAN ANDA</h6>
                                            <!-- <ul class="order-info-list">
                                                <li>
                                                    <h6>order no</h6>
                                                    <p>m 2653257</p>
                                                </li>
                                                <li>
                                                    <h6>status</h6>
                                                    <p>awaiting for payment</p>
                                                </li>
                                                <li>
                                                    <h6>order no</h6>
                                                    <p>m 2653257</p>
                                                </li>
                                                <li>
                                                    <h6>order no</h6>
                                                    <p>m 2653257</p>
                                                </li>
                                            </ul> -->
                                        </div>
                                        <div class="row">
                                            <!-- our order -->
                                            <div class="col-md-6">
                                                <div class="payment-details p-30">
                                                  <div class="transfer-to">
                                                    <h6 class="text-center">transfer ke</h6>
                                                  <center>  <img src="img/bank/BNI_logo.svg" alt="" height="20px"><center>
                                                      <div class="text-center" style="padding:10px;">
                                                        <span>an. PT Social Bella Indonesia</span>
                                                      </div>
                                                      <h3 class="text-center bold-text">677886779</h3>
                                                      <li><a class="text-center" href"#">Salin No. Rek</a></li>
                                                  </div>
                                                  <br>
                                                  <div class="transfer-to">
                                                    <h6 class="text-center">Jumlah yang harus dibayar</h6>
                                                    <!-- <span></span> -->
                                                      <h3 class="text-center bold-text">Rp 998,032</h3>
                                                    <li><a class="text-center" href="#">Salin Jumlah</a></li>

                                                  </div>
                                                  <div class="pengantar">
                                                    <p class="text-center">
                                                      Pastikan kamu melakukan pembayaran dalam waktu 24 jam setelah pesanan dibuat untuk menghindari pembatalan otomatis dan silakan lakukan konfirmasi pembayaran jika kamu sudah melakukan pembayaran di halaman Profile Anda.<br><br>
                                                      Ayo kumpulkan Beauty Points setiap pembelian yang kamu lakukan.
                                                    </p>
                                                    <button class="submit-btn-1 black-bg btn-hover-2 form-control" type="submit" data-toggle="modal" data-target="#confirmModal">Confirmation payment</button>
                                                  </div>

                                                    <!-- <table>
                                                        <tr>
                                                            <td class="td-title-1">Dummy Product Name x 2</td>
                                                            <td class="td-title-2">$1855.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-title-1">Dummy Product Name</td>
                                                            <td class="td-title-2">$555.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-title-1">Cart Subtotal</td>
                                                            <td class="td-title-2">$2410.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-title-1">Shipping and Handing</td>
                                                            <td class="td-title-2">$15.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-title-1">Vat</td>
                                                            <td class="td-title-2">$00.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="order-total">Order Total</td>
                                                            <td class="order-total-price">$2425.00</td>
                                                        </tr>
                                                    </table> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bill-details p-30">
                                                    <h6 class="widget-title border-left mb-20">YOUR ORDER</h6>
                                                    <div class="">
                                                      <p>
                                                        <span>Nomor Pesanan</span><br>
                                                        <span class="bold-text color-black">asfsgds</span>
                                                      </p>
                                                    </div>
                                                    <div class="">
                                                      <p>
                                                        <span>Total Pesanan</span><br>
                                                        <span class="bold-text color-black">Rp 242389</span>
                                                      </p>
                                                    </div>
                                                    <div class="">
                                                      <p>
                                                        <span>Kode Unik</span><br>
                                                        <span class="bold-text color-black">Rp 32</span>
                                                      </p>
                                                    </div>
                                                </div>
                                                <div class="bill-details pl-30">
                                                    <h6 class="widget-title border-left mb-20">informasi lebih lanjut</h6>
                                                    <div class="">
                                                      <p>
                                                        <span class="bold-text color-black">Email</span><br>
                                                        Punya pertanyaan seputar pesanan?<br>
                                                        Silakan kirim email ke cs@sociolla.com<br>
                                                        untuk pertanyaan seputar pembayaran silakan kirim email ke payment@sociolla.com
                                                      </p>
                                                    </div>
                                                    <div class="">
                                                      <p>
                                                        <span class="bold-text color-black">Telepon</span><br>
                                                        Kamu bisa menghubungi Customer Service di nomor telepon (021) 5080 6418<br>
                                                        Senin - Jumat pukul 09.00 s/d 18.00
                                                      </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- order-complete end -->
                                <!-- payment method start -->
                                <div class="tab-pane" id="payment-method">
                                    <div class="payment-content box-shadow p-30">
                                      <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="widget-title border-left mb-20">Choose Payment Method</h6>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-4">
                                          <div class="list-group" id="list-tab" role="tablist">
                                              <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="tab" href="#list-home">Bank BCA</a>
                                              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#tb-bni">Bank BNI</a>
                                              <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="tab" href="#list-messages">Bank BRI</a>
                                          </div>
                                        </div>
                                        <div class="col-md-8">
                                          <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane show active" id="tb-bni"  aria-labelledby="list-profile-list">
                                                  <div class="flex-box">
                                                    <div class="form-inline clearfix">
                                                        <h6 class="pull-left"><b>TOTAL 1 ITEM</b></h6>
                                                        <h6 class="pull-right"><b>Rp 301,000<b></h6>
                                                    </div>
                                                  </div>
                                                  <br>
                                                  <div class="form-inline clearfix" style="padding:10px;">
                                                      <h5 class="pull-left"><b>Transfer Bank</b></h5>
                                                      <h5 class="pull-right"><b>Rp 301,000<b></h5>
                                                  </div>
                                                  <p>Masukkan info rekening bank pembayaran Anda sesuai dengan yang tertera pada buku tabungan</p>
                                                  <div class="">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <input type="text" placeholder="Nama Bank">
                                                      </div>
                                                      <div class="col-md-6">
                                                        <input type="text" placeholder="Nomor Rekening">
                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                      <div class="col-md-12">
                                                        <input type="text" placeholder="Nama Pemilik">
                                                      </div>
                                                    </div>
                                                  </div>
                                                    <div class="flex-box">
                                                      <div class="">
                                                        <ul>
                                                          <li>Untuk pembayaran melalui teller bank, isi "Nomor Rekening" dengan <b>000</b> dan "Nama Pemilik Rekening" dengan <b>nama Anda</b>.</li>
                                                          <li>Simpan dan upload bukti transfer untuk mempercepat proses verifikasi pembayaran Anda.</li>
                                                        </ul>
                                                      </div>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>

                                      </div>
                                        <button class="submit-btn-1 mt-20 btn-hover-1 pull-right" type="submit">Place order</button>
                                    </div>

                                </div>
                                <!-- <script type="text/javascript">
                                $('#list-tab a').on('click', function (e) {
                                    e.preventDefault()
                                    $(this).tab('show')
                                    })
                                </script> -->
                                <!-- payment method end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOP SECTION END -->

        </section>
        <!-- End page content -->
        <?php include('confirm-payment.php') ?>
<?php include('footer.php') ?>
