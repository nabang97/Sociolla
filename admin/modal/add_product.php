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
              </div>


          <!--  -->
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputUsername1">Code product</label>
              <input type="text" class="form-control" placeholder="Input kode kategori" id="code" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product Name</label>
              <input type="text" class="form-control" placeholder="Input nama kategori" id="name" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <textarea type="text" class="form-control" placeholder="Input nama kategori" id="description" rows="7"></textarea>
            </div>
            <div class="form-inline float-right">


            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-gradient-primary mr-2" id="btn-add-subcategory" onclick="insertProduct()">Add</button>

      </div>
    </div>

  </div>
</div>
