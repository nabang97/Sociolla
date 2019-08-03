<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <center><h4 class="modal-title text-left">Modal Header</h4></center>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleSelectGender">Product Type</label>
                <select class="form-control" id="product_type">
                  <option value="">Select Product Type</option>
                  <?php
                      $product_types=$controllerAdmin->showProductTypes();
                      foreach ($product_types as $product_type) {
                        echo "<option value='".$product_type->id_type."'>".$product_type->name."</option>";
                      }
                   ?>
                </select>
              </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Product Category</label>
                    <select class="form-control" id="product_category">
                      <option value="">Selec Category</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectGender">Product SubCategory</label>
                      <select class="form-control" id="product_subcategory">
                        <option value="">Selec Sub Category</option>
                      </select>
                  </div>
                  <div class="form-group">
                  <label for="exampleSelectGender">Brand</label>
                  <select class="form-control" id="select-brand">
                    <option value="">Select Brand</option>
                    <?php
                        $brands=$controllerAdmin->showBrand();
                        foreach ($brands as $brand) {
                          echo "<option value='".$brand->brand_id."'>".$brand->name."</option>";
                        }
                     ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Produk</label>
                  <select class="form-control" id="select-product">
                    <option value="">Select Produk</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Price</label>
                    <input type="text" name="" value="" class="form-control" id="price">
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Discount</label>
                    <input type="text" name="" value="" class="form-control" id="discount">
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Photo URL</label>
                    <input type="text" name="" value="" class="form-control" id="photo_url">
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Stock</label>
                    <input type="text" name="" value="" class="form-control" id="stock">
                </div>
              </div>


          <!--  -->
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleSelectGender">Varian Shade</label>
              <select class="form-control" id="select-shade">
                <option value="">select shade</option>
                <?php
                $shades = $controllerAdmin->showVariantShades();
                  foreach ($shades as $shade) {

                    echo  "<option value='".$shade->shade_id."'>".$shade->name."</option>";
                  }
                 ?>
                 <option value="other">Other</option>
              </select>
            </div>
            <!--  -->
            <div class="form-group">
              <div class="input-group" style="display:none" id="input-shade">
                <input type="text" class="form-control" placeholder="ex: Flower Summer" id="add-shade" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-gradient-primary" type="button" onclick="AddShade()">Add</button>
                </div>
              </div>
            </div>

            <!--  -->
            <div class="form-group">
              <label for="exampleSelectGender">Varian Color</label>
              <select class="form-control" id="select-color">
                <option value="">Select Color</option>
                <?php
                $colors = $controllerAdmin->showVariantColors();
                  foreach ($colors as $color) {
                    echo  "<option value='".$color->color_id."' style='background-color:".$color->value."'>".$color->name."</option>";
                  }
                 ?>
                 <option value="other">Other</option>
              </select>
            </div>
            <!--  -->
            <div class="form-group">
            <div class="input-group" id="input-color" style="display:none">
              <input type="text" class="form-control" placeholder="ex: Black;#0000" id="add-color" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-sm btn-gradient-primary" type="button" onclick="AddColor()">Add</button>
              </div>
            </div>
            </div>
            <!--  -->
            <div class="form-group" >
              <label for="exampleSelectGender">Varian Size</label>
              <select class="form-control" id="select-size">
                <option value="">Select Size</option>
                <?php
                $sizes = $controllerAdmin->showVariantSizes();
                  foreach ($sizes as $size) {
                    if (json_encode($size->size_id) == 0) {
                    echo  "<option value='".$size->size_id."'>".$size->name."</option>";
                  }else {
                    echo  "<option value='".$size->size_id."'>".$size->name." - ".$size->value."</option>";
                  }

                  }
                 ?>
                 <option value="other">Other</option>
              </select>
            </div>
            <!--  -->
            <div class="form-group">
            <div class="input-group" id="input-size" style="display:none">
              <input type="text" class="form-control" placeholder="Travel Size;12 ml" id="add-size" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-sm btn-gradient-primary" type="button" onclick="AddSize()">Add</button>
              </div>
            </div>
            </div>
            <!--  -->
            <div class="form-group">
              <label for="exampleSelectGender">Varian Weight</label>
              <select class="form-control" id="select-weight">
                <option value="">Select Weight</option>
                <?php
                $weights = $controllerAdmin->showVariantWeights();
                  foreach ($weights as $weight) {
                    if (json_encode($weight->weight_id) == 0) {
                      echo  "<option value='".$weight->weight_id."'>".$weight->name."</option>";
                    }else {
                        echo  "<option value='".$weight->weight_id."'>".$weight->name." - ".$weight->value."</option>";
                    }

                  }
                 ?>
                 <option value="other">Other</option>
              </select>

            </div>
            <!--  -->
            <div class="form-group">
            <div class="input-group" id="input-weight" style="display:none">
              <input type="text" class="form-control" placeholder="ex: Travel Size;10gr" id="add-weight" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-sm btn-gradient-primary" type="button" onclick="AddWeight()">Add</button>
              </div>
            </div>
            </div>
            <!--  -->


            <div class="form-inline float-right">


            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-gradient-primary mr-2" id="btn-add-subcategory" onclick="insertProductVariant()">Add</button>

      </div>
    </div>

  </div>
</div>
