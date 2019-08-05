<?php require_once('../../_controller/AdminController.php');
  $start = new AdminController();

  if (isset($_POST['display-table'])) {
    $product_types = $start->showProductTypes();
    foreach($product_types as $category){
      echo "<tr>
            <td></td>
            <td>".$category->id_type."</td>
            <td>".$category->name."</td>
            <td></td>
            </tr>";
    }
  }

  if (isset($_POST['display-category'])) {
    $product_categories = $start->showProductCategories();
    json_encode($product_categories);
    foreach ($product_categories as $category) {
      echo "<tr>
              <td></td>
              <td>".$category->id_category."</td>
              <td>".$category->name."</td>
              <td>".$category->tipe_produk."</td>
              <td></td>
              </tr>";
    }
  }

  if (isset($_POST['show-bags'])) {
    if (isset($_POST['ordernum']) != "") {
      $id=$_POST['ordernum'];
      $bags = $start->showBags($id);
       echo json_encode($bags);
    }
  }

  if (isset($_POST['get-photo'])){
    $code = $_POST['code'];
    $size = $_POST['size'];
    $shade=$_POST['shade'];
    $weight=$_POST['weight'];
    $photo = $start->showPhotoOrder($code,$size,$shade,$weight);
    echo json_encode($photo);
  }

  if (isset($_POST['display-subcategory'])) {
    $product_subcategories = $start->showProductSubCategoriesAll();
    foreach($product_subcategories as $product_subcategory){
      echo "<tr>
            <td></td>
            <td>".$product_subcategory->id_subcategory."</td>
            <td>".$product_subcategory->name."</td>
            <td>".$product_subcategory->kategori."</td>
            <td>".$product_subcategory->tipe_produk."</td>
            <td></td>
            </tr>";
    }
  }

  if (isset($_POST['display-brands'])) {
    $brands = $start->showBrand();
    foreach($brands as $brand){
      echo "<tr>
            <td></td>
            <td>".$brand->brand_id."</td>
            <td>".$brand->name."</td>
            <td></td>
            </tr>";
    }
  }

  if (isset($_POST['display-sizes'])) {
    $sizes = $start->showVariantSizes();
    foreach($sizes as $size){
      echo "<tr>
            <td></td>
            <td>".$size->name."</td>
            <td>".$size->value."</td>
            <td></td>
            </tr>";
    }
  }

  if (isset($_POST['display-shades'])) {
    $shades = $start->showVariantShades();
    foreach($shades as $shade){
      echo  "<tr>
              <td>".$shade->name."</td>
              <td></td>
              </tr>";
    }
  }

  if (isset($_POST['display-weights'])) {
    $weights = $start->showVariantWeights();
      foreach ($weights as $weight) {
        echo  "<tr>
                <td></td>
                <td>".$weight->name."</td>
                <td>".$weight->value."</td>
                <td></td>
                </tr>";
      }
  }

  if (isset($_POST['display-colors'])) {
    $colors = $start->showVariantColors();
    foreach($colors as $color){
      echo "<tr>
              <td></td>
              <td>".$color->color_id."</td>
              <td>".$color->name."</td>
              <td>
              <div class='row'>
              <div class='col'>".$color->value."</div>
              <div class='col'>
              <div style='height:20px;background-color:".$color->value."'></div>
              </div>
              </div>
              </td>
              <td></td>
              </tr>";
    }
  }

  if (isset($_POST['display-products'])) {
    $products = $start->showProducts();
    foreach($products as $product){
      echo "<tr>
            <td></td>
            <td>".$product->code_product."</td>
            <td>".$product->name."</td>
            <td>".$product->brand."</td>
            <td>".$product->subcategory."</td>
            <td>
            <a href='#'><i class='mdi mdi-magnify' data-toggle='modal' data-target='#viewProduct'></i> detail</a>
            </td>

            </tr>";
    }
  }

 ?>
