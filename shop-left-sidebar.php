<?php include('header.php') ?>

        <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80">
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">SHOP</h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="index.html">Home</a></li>
                                    <li>product grid view</li>
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

            <!-- SHOP SECTION START -->
            <div class="shop-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3 col-xs-12">
                            <div class="shop-content">
                                <!-- shop-option start -->
                                <div class="shop-option box-shadow mb-30 clearfix">
                                    <!-- Nav tabs -->
                                    <ul class="shop-tab f-left" role="tablist">
                                        <li class="active">
                                            <a href="#grid-view" data-toggle="tab"><i class="zmdi zmdi-view-module"></i></a>
                                        </li>
                                        <li>
                                            <a href="#list-view" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a>
                                        </li>
                                    </ul>
                                    <!-- short-by -->
                                    <div class="short-by f-left text-center">
                                        <span>Sort by :</span>
                                        <select>
                                            <option value="volvo">Newest items</option>
                                            <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                    </div>
                                    <!-- showing -->
                                    <div class="showing f-right text-right">
                                        <span>Showing : 01-09 of 17.</span>
                                    </div>
                                </div>
                                <!-- shop-option end -->
                                <!-- Tab Content start -->
                                <div class="tab-content">
                                    <!-- grid-view -->
                                    <div role="tabpanel" class="tab-pane active" id="grid-view">
                                        <div class="row">
                                            <!-- product-item start -->
                                            <?php
                                            $products = $controllerSystem->showAllProductVariants();
                                            foreach ($products as $product) {
                                            echo '
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                              <div class="product-item">
                                                  <div class="product-img">
                                                      <a href="#" onclick="getProduct(\''.$product->code.'\','.$product->size_id.','.$product->shade_id.','.$product->weight_id.')">
                                                          <img src="'.$product->photo.'" alt=""/>
                                                      </a>
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-title">
                                                          <a href="single-product.html">'.$product->brand.'</a>
                                                          <p class="desc">'.$product->produk." ".$product->size." ".$product->shade." ".$product->weight.'</p>
                                                      </h6>
                                                      <!-- <div class="pro-rating">
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                      </div>  -->
                                                      <h3 class="pro-price">'.$product->price.'</h3>
                                                      <ul class="action-button">
                                                          <li>
                                                              <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                            </div> ';
                                              }
                                            ?>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                              <div class="product-item">
                                                  <div class="product-img">
                                                      <a href="single-product.html">
                                                          <img src="img/product/REAL TECHNIQUES.jpg" alt=""/>
                                                      </a>
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-title">
                                                          <a href="single-product.html">REAL TECHNIQUES</a>
                                                          <p class="desc">1786 Everyday Essentials Set</p>
                                                      </h6>
                                                      <div class="pro-rating">
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                      </div>
                                                      <h3 class="pro-price">Rp 320,320</h3>
                                                      <ul class="action-button">
                                                          <li>
                                                              <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                              <div class="product-item">
                                                  <div class="product-img">
                                                      <a href="single-product.html">
                                                          <img src="img/product/NYX.jpg" alt=""/>
                                                      </a>
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-title">
                                                          <a href="single-product.html">NYX PROFESSIONAL MAKEUP</a>
                                                          <p class="desc">Bare With Me Prime Set Refresh Mutlitasking Spray</p>
                                                      </h6>
                                                      <div class="pro-rating">
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                      </div>
                                                      <h3 class="pro-price">Rp 225,000</h3>
                                                      <ul class="action-button">
                                                          <li>
                                                              <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                              <div class="product-item">
                                                  <div class="product-img">
                                                      <a href="single-product.html">
                                                          <img src="img/product/NEOGEN DERMALOGY.jpg" alt=""/>
                                                      </a>
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-title">
                                                          <a href="single-product.html">NEOGEN DERMALOGY</a>
                                                          <p class="desc">Neogen Dermalogy Real Cica Micellar Cleansing Oil</p>
                                                      </h6>
                                                      <div class="pro-rating">
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                      </div>
                                                      <h3 class="pro-price">Rp 334,125</h3>
                                                      <ul class="action-button">
                                                          <li>
                                                              <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                              <div class="product-item">
                                                  <div class="product-img">
                                                      <a href="single-product.html">
                                                          <img src="img/product/COLLECTION.jpg" alt=""/>
                                                      </a>
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-title">
                                                          <a href="single-product.html">COLLECTION</a>
                                                          <p class="desc">Moisturizing Lip Cream Matte</p>
                                                      </h6>
                                                      <div class="pro-rating">
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                      </div>
                                                      <h3 class="pro-price">Rp 67,500</h3>
                                                      <ul class="action-button">
                                                          <li>
                                                              <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                              <div class="product-item">
                                                  <div class="product-img">
                                                      <a href="single-product.html">
                                                          <img src="img/product/MAKE OVER.jpg" alt=""/>
                                                      </a>
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-title">
                                                          <a href="single-product.html">MAKE OVER</a>
                                                          <p>Powerstay Demi-Matte Cover Cushion</p>
                                                      </h6>
                                                      <div class="pro-rating">
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                      </div>
                                                      <h3 class="pro-price">$ 869.00</h3>
                                                      <ul class="action-button">
                                                          <li>
                                                              <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                              <div class="product-item">
                                                  <div class="product-img">
                                                      <a href="single-product.html">
                                                          <img src="img/product/SHU UEMURA.jpg" alt=""/>
                                                      </a>
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-title">
                                                          <a href="single-product.html">SHU UEMURA</a>
                                                          <p class="desc">Unlimited Fluid Foundation</p>
                                                      </h6>
                                                      <div class="pro-rating">
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                      </div>
                                                      <h3 class="pro-price">Rp 700,000</h3>
                                                      <ul class="action-button">
                                                          <li>
                                                              <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                              <div class="product-item">
                                                  <div class="product-img">
                                                      <a href="single-product.html">
                                                          <img src="img/product/TRILOGY.jpg" alt=""/>
                                                      </a>
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-title">
                                                          <a href="single-product.html">TRILOGY</a>
                                                          <p class="desc">Certified Organic Rosehip Oil</p>
                                                      </h6>
                                                      <div class="pro-rating">
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                      </div>
                                                      <h3 class="pro-price">Rp 280,000</h3>
                                                      <ul class="action-button">
                                                          <li>
                                                              <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                              <div class="product-item">
                                                  <div class="product-img">
                                                      <a href="single-product.html">
                                                          <img src="img/product/SK-II2.jpg" alt=""/>
                                                      </a>
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-title">
                                                          <a href="single-product.html">SK-II</a>
                                                          <p class="desc">Facial Treatment Mask</p>
                                                      </h6>
                                                      <div class="pro-rating">
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                          <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                      </div>
                                                      <h3 class="pro-price">Rp 101,250</h3>
                                                      <ul class="action-button">
                                                          <li>
                                                              <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                          </li>
                                                          <li>
                                                              <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                            </div>
                                            <!-- product-item end -->
                                        </div>
                                    </div>
                                    <!-- list-view -->
                                    <div role="tabpanel" class="tab-pane" id="list-view">
                                        <div class="row">
                                            <!-- product-item start -->
                                            <div class="col-md-12">
                                                <div class="shop-list product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/cosrx.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="clearfix">
                                                            <h6 class="product-title f-left">
                                                                <a href="single-product.html">COSRX Favorites (Best Sellers Set)</a>
                                                            </h6>
                                                            <div class="pro-rating f-right">
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                            </div>
                                                        </div>
                                                        <h6 class="brand-name mb-30">COSRX</h6>
                                                        <h3 class="pro-price">Rp 249,000</h3>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="col-md-12">
                                                <div class="shop-list product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/REAL TECHNIQUES.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="clearfix">
                                                            <h6 class="product-title f-left">
                                                                <a href="single-product.html">1786 Everyday Essentials Set</a>
                                                            </h6>
                                                            <div class="pro-rating f-right">
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                            </div>
                                                        </div>
                                                        <h6 class="brand-name mb-30">REAL TECHNIQUES</h6>
                                                        <h3 class="pro-price">Rp 320,320</h3>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="col-md-12">
                                                <div class="shop-list product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/NYX.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="clearfix">
                                                            <h6 class="product-title f-left">
                                                                <a href="single-product.html">Bare With Me Prime Set Refresh Mutlitasking Spray </a>
                                                            </h6>
                                                            <div class="pro-rating f-right">
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                            </div>
                                                        </div>
                                                        <h6 class="brand-name mb-30">NYX PROFESSIONAL MAKEUP</h6>
                                                        <h3 class="pro-price">Rp 225,000</h3>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="col-md-12">
                                                <div class="shop-list product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/NEOGEN DERMALOGY.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="clearfix">
                                                            <h6 class="product-title f-left">
                                                                <a href="single-product.html">Neogen Dermalogy Real Cica Micellar Cleansing Oil</a>
                                                            </h6>
                                                            <div class="pro-rating f-right">
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                            </div>
                                                        </div>
                                                        <h6 class="brand-name mb-30">NEOGEN DERMALOGY</h6>
                                                        <h3 class="pro-price">Rp 334,125</h3>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-item end -->
                                            <!-- product-item start -->
                                            <div class="col-md-12">
                                                <div class="shop-list product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/COLLECTION.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="clearfix">
                                                            <h6 class="product-title f-left">
                                                                <a href="single-product.html">Moisturizing Lip Cream Matte</a>
                                                            </h6>
                                                            <div class="pro-rating f-right">
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                            </div>
                                                        </div>
                                                        <h6 class="brand-name mb-30">COLLECTION</h6>
                                                        <h3 class="pro-price">Rp 67,500</h3>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-item end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab Content end -->
                                <!-- shop-pagination start -->
                                <ul class="shop-pagination box-shadow text-center ptblr-10-30">
                                    <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                                    <li><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">05</a></li>
                                    <li class="active"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                </ul>
                                <!-- shop-pagination end -->
                            </div>
                        </div>
                        <div class="col-md-3 col-md-pull-9 col-xs-12">
                            <!-- widget-search -->
                            <aside class="widget-search mb-30">
                                <form action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                </form>
                            </aside>
                            <!-- shop-filter -->
                            <aside class="widget shop-filter box-shadow mb-30">
                                <h6 class="widget-title border-left mb-20">Price</h6>
                                <div class="price_filter">
                                    <div class="price_slider_amount">
                                        <input type="submit"  value="You range :"/>
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                    </div>
                                    <div id="slider-range"></div>
                                </div>
                            </aside>
                            <!-- widget-categories -->
                            <aside class="widget widget-categories box-shadow mb-30">
                                <h6 class="widget-title border-left mb-20">Categories</h6>
                                <div id="cat-treeview" class="product-cat">
                                    <ul>
                                        <li class="closed"><a href="#">Makeup</a>
                                            <ul>
                                                <li><a href="#">Face</a></li>
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Lashes</a></li>
                                                <li><a href="#">Brows</a></li>
                                                <li><a href="#">Lips</a></li>
                                                <li><a href="#">Brushes</a></li>
                                                <li><a href="#">Tools</a></li>
                                                <li><a href="#">Makeup Remover</a></li>
                                                <li><a href="#">Palletes & Sets</a></li>
                                            </ul>
                                        </li>
                                        <li class="open"><a href="#">Skin Care</a>
                                            <ul>
                                                <li><a href="#">Cleanser</a></li>
                                                <li><a href="#">Moisturizer</a></li>
                                                <li><a href="#">Treatment</a></li>
                                                <li><a href="#">Others</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="#">Hair Care</a>
                                            <ul>
                                                <li><a href="#">Shampoor</a></li>
                                                <li><a href="#">Hair Treatments</a></li>
                                                <li><a href="#">Styling</a></li>
                                                <li><a href="#">Hair Tools</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="#">Nails</a>
                                            <ul>
                                                <li><a href="#">Nail Polish</a></li>
                                                <li><a href="#">Nail Treatment</a></li>
                                                <li><a href="#">Nail Kits & Sets</a></li>
                                                <li><a href="#">Nail Arts</a></li>
                                                <li><a href="#">Polish Remover</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="#">Body & Bath</a>
                                            <ul>
                                              <li><a href="#">Cleanser</a></li>
                                              <li><a href="#">Moisturizer</a></li>
                                              <li><a href="#">Treatment</a></li>
                                              <li><a href="#">Others</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="#">Accessories</a>
                                            <ul>
                                              <li><a href="#">Makeup Brushes</a></li>
                                              <li><a href="#">Tools</a></li>
                                              <li><a href="#">Electronics</a></li>
                                              <li><a href="#">Bags</a></li>
                                              <li><a href="#">Others</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </aside>

                            <!-- widget-color -->
                            <!-- <aside class="widget widget-color box-shadow mb-30">
                                <h6 class="widget-title border-left mb-20">color</h6>
                                <ul>
                                    <li class="color-1"><a href="#">LightSalmon</a></li>
                                    <li class="color-2"><a href="#">Dark Salmon</a></li>
                                    <li class="color-3"><a href="#">Tomato</a></li>
                                    <li class="color-4"><a href="#">Deep Sky Blue</a></li>
                                    <li class="color-5"><a href="#">Electric Purple</a></li>
                                    <li class="color-6"><a href="#">Atlantis</a></li>
                                </ul>
                            </aside> -->
                            <!-- operating-system -->
                            <!-- <aside class="widget operating-system box-shadow mb-30">
                                <h6 class="widget-title border-left mb-20">operating system</h6>
                                <form action="action_page.php">
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Windows Phone</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Bleckgerry ios</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Android</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">ios</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Windows Phone</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Symban</label><br>
                                    <label class="mb-0"><input type="checkbox" name="operating-1" value="phone-1">Bleckgerry os</label><br>
                                </form>
                            </aside> -->
                            <!-- widget-product -->
                            <!-- <aside class="widget widget-product box-shadow">
                                <h6 class="widget-title border-left mb-20">recent products</h6> -->
                                <!-- product-item start -->
                                <!-- <div class="product-item">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img src="img/product/4.jpg" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="single-product.html">Product Name</a>
                                        </h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                </div> -->
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <!-- <div class="product-item">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img src="img/product/8.jpg" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="single-product.html">Product Name</a>
                                        </h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                </div> -->
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <!-- <div class="product-item">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img src="img/product/12.jpg" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="single-product.html">Product Name</a>
                                        </h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                </div> -->
                                <!-- product-item end -->
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOP SECTION END -->
        </div>
        <!-- End page content -->

<?php include('footer.php') ?>
