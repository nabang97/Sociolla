<?php
require_once('parts/head.php');

?>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include('menus/menu.php') ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include('menus/sidebar.php') ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- start table -->
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Varian Produk</h4>
                  <div class="row" style="margin-bottom:30px;">
                    <div class="col-md-6">
                      <p class="card-description">
                        Menampilkan data kategori dari jenis produk yang ada di Sociolla.<br>
                      </p>
                    </div>
                    <div class="col-md-6">
                      <button type="button" class="btn btn-info btn-small float-right btn-add" data-toggle="modal" data-target="#myModal">Add Data</button>
                    </div>
                  </div>
                  <table class="table" id="tableProductVariants">
                    <thead>
                      <tr>
                        <th>Kode</th>
                        <th>Product Name</th>
                        <th>Shade</th>
                        <th>Color</th>
                        <th>Weight</th>
                        <th>Size</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $products = $controllerAdmin->showAllProductVariants();

                        foreach ($products as $product) {
                          echo  "<tr>
                                  <td>".$product->code."</td>
                                  <td>".$product->produk."</td>
                                  <td>".$product->shade."</td>
                                  <td>".$product->color."</td>
                                  <td>".$product->weight."</td>
                                  <td>".$product->size."</td>
                                  <td>
                                  <a href='#'><i class='mdi mdi-magnify' data-toggle='modal' data-target='#viewProduct'></i> detail</a>
                                  </td>
                                </tr>";
                        }
                       ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- end table -->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
<?php include('modal/add_product_variant.php') ?>
<?php include('parts/footer_js.php') ?>
