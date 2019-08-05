<?php
    require_once('_controller/SystemController.php');
    $controllerSystem  = new SystemController();
    if (isset($_GET['code'])) {
      $code = $_GET['code'];
      $size = $_GET['size'];
      $shade = $_GET['shade'];
      $weight = $_GET['weight'];
      // var_dump($weight);
      // die();
      $variants = $controllerSystem->showSelectedProduct($code);
      $variantselected = $controllerSystem->showSelectedvariant($code,$shade,$size,$weight);
      $productselected = $controllerSystem->showSelectedProductBrand($code);
      // echo json_encode($variants); die('');
      // echo var_dump($variants);

    }else {
      echo "mana data?";
      die('');
    }
     // die();
?>
<?php include('header.php') ?>

        <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80">
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title"></h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="index.html"> Home</a></li>
                                    <li></li>
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
                        <div class="col-md-12 col-xs-12">
                            <!-- single-product-area start -->
                            <div class="single-product-area mb-80">
                                <div class="row">
                                    <!-- imgs-zoom-area start -->
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="imgs-zoom-area">

                                            <img id="zoom_03" src="<?= $variantselected->photo ?>" data-zoom-image="<?= $variantselected->photo ?>" alt="">

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div id="gallery_01" class="carousel-btn slick-arrow-3 mt-30">
                                                      <?php foreach($variants as $variant) {
                                                        echo '<div class="p-c">
                                                              <a href="#" data-image="'.$variant->photo.'" data-zoom-image="'.$variant->photo.'">
                                                                  <img class="zoom_03" src="'.$variant->photo.'" alt="">
                                                              </a>
                                                          </div>';
                                                      } ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- imgs-zoom-area end -->
                                    <!-- single-product-info start -->
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="single-product-info">

                                            <h3 class="text-black-1"><?= $variantselected->brand ?></h3>
                                            <h6 class="brand-name-2"><?= $variantselected->produk ?></h6>

                                            <!-- hr -->
                                            <hr>
                                            <!-- single-product-tab -->
                                            <div class="single-product-tab">
                                                <ul class="reviews-tab mb-20">
                                                    <li  class="active"><a href="#description" data-toggle="tab">description</a></li>
                                                    <li ><a href="#information" data-toggle="tab">information</a></li>
                                                    <!-- <li ><a href="#reviews" data-toggle="tab">reviews</a></li> -->
                                                </ul>

                                                <div class="tab-content">
                                                  <?php foreach ($productselected as $selected){
                                                    echo '<div role="tabpanel" class="tab-pane active" id="description">
                                                        <p>'.$selected->deskripsi.'</p>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="information">
                                                        <p>'.$selected->description.'</p>
                                                    </div>';
                                                  }?>


                                                </div>
                                            </div>
                                            <!--  hr -->
                                            <hr>
                                            <!-- single-pro-color-rating -->
                                            <?php if($variantselected->color_id != 0): ?>
                                              <div class="single-pro-color-rating clearfix" id="color-detail">
                                                  <div class="sin-pro-color f-left">
                                                      <p class="color-title f-left">Color</p>
                                                      <div class="f-left">
                                                            <?php foreach ($variants as $color): ?>
                                                              <a href="#" class="btn btn-sm" style="background-color: <?= $color->color ?>"></a>
                                                            <?php endforeach; ?>
                                                      </div>
                                                  </div>
                                              </div>
                                            <?php endif; ?>
                                            <!-- single-pro-color-rating -->

                                            <?php if ($variantselected->size_id !=0): ?>
                                              <div class="single-pro-color-rating clearfix">
                                                  <div class="sin-pro-color f-left">
                                                      <p class="color-title f-left">Size</p>
                                                      <div class="f-left" style="margin-top: 5px">
                                                        <?php foreach ($variants as $size): ?>
                                                          <button id="<?= $size->size_id ?>" onclick="changeVariant('<?= $size->photo ?>', '<?= $size->size_id ?>');" class="btn btn-sm btn-default" style="margin: 3px"><?= $size->size ?></button>
                                                        <?php endforeach; ?>
                                                      </div>
                                                  </div>
                                              </div>
                                            <?php endif; ?>
                                            <!-- hr -->

                                            <?php if ($variantselected->weight_id !=0): ?>
                                              <hr>
                                              <div class="single-pro-color-rating clearfix">
                                                  <div class="sin-pro-color f-left">
                                                      <p class="color-title f-left">Weight</p>
                                                      <div class="f-left" style="margin-top: 5px">
                                                        <?php foreach ($variants as $weight): ?>
                                                          <button id="<?= $weight->weight_id ?>" onclick="changeVariant('<?= $weight->photo ?>', '<?= $weight->weight_id ?>');" class="btn btn-sm btn-default" style="margin: 3px"><?= $weight->weight ?></button>
                                                        <?php endforeach; ?>
                                                      </div>
                                                  </div>
                                              </div>
                                            <?php endif; ?>

                                            <?php if ($variantselected->shade_id !=0): ?>
                                              <hr>
                                              <div class="single-pro-color-rating clearfix">
                                                  <div class="sin-pro-color f-left">
                                                      <p class="color-title f-left">Shade</p>
                                                      <div class="f-left" style="margin-top: 5px">
                                                        <?php foreach ($variants as $shade): ?>
                                                          <button id="<?= $shade->shade_id ?>" onclick="changeVariant('<?= $shade->photo ?>', '<?= $shade->shade_id ?>');" class="btn btn-sm btn-default" style="margin: 3px"><?= $shade->shade ?></button>
                                                        <?php endforeach; ?>
                                                      </div>
                                                  </div>
                                              </div>
                                            <?php endif; ?>
                                            <!-- hr -->
                                            <hr>

                                            <!-- plus-minus-pro-action -->
                                            <div class="plus-minus-pro-action">
                                                <div class="sin-plus-minus f-left clearfix">
                                                    <p class="color-title f-left">Qty</p>
                                                    <div class="cart-plus-minus f-left">
                                                        <input type="text" value="0" id="qty" name="qtybutton" class="cart-plus-minus-box">
                                                    </div>
                                                </div>
                                                <div class="sin-pro-action f-right">
                                                  <?php if (isset($_SESSION['auth'])): ?>
                                                    <a href="#" class="btn btn-danger" onclick="addToChart()"
                                                    title="Add to cart" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i> &nbsp;Add to Cart</a>
                                                    <?php else: ?>
                                                      <a href="login.php">Please login to shop</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-info end -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOP SECTION END -->

        </section>
        <!-- End page content -->

<?php include('footer.php') ?>

<script type="text/javascript">

  function changeVariant(img, id) {
    // window.history.replaceState(null, null, "/detail_product.php?shade="+id);
    $('#zoom_03').attr('src', img);
    $('#zoom_03').attr('data-zoom-image', img);
    $('#'+id).focus();

  }

  function addToChart() {

    $.ajax({ /* THEN THE AJAX CALL */
      url: "_action/addToCart.php",
      method : "POST",
      data:{'code': '<?= $variantselected->code ?>',
            'brand': '<?= $variantselected->brand ?>',
            'product': '<?= $variantselected->produk ?>',
            'price': '<?= $variantselected->price ?>',
            'photo': '<?= $variantselected->photo ?>',
            'shade': '<?= $variantselected->shade_id ?>',
            'weight': '<?= $variantselected->weight_id ?>',
            'size': '<?= $variantselected->size_id ?>',
            'color': '<?= $variantselected->color_name ?>',
            'url': window.location.href,
            'quantity': $('#qty').val(),
            },
      async : true,
      dataType : 'text',
      success: function(data){
          console.log(data);
          Swal.fire(
              'Item added to your bag!',
              '',
              'success'
            );

          $('#cartItem').html(data);
      }
    });
  }
</script>
