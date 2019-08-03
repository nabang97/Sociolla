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
        <form class="forms-sample" id="type_form" action="../_action/inputs/insertType.php">
          <div class="form-group">
            <label for="exampleInputUsername1">Name</label>
            <input type="text" class="form-control" placeholder="Input kode produk" id="name" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Size</label>
            <input type="text" class="form-control" placeholder="Input nama produk" id="value" required>
          </div>
        </form>
        <div class="float-right">
          <button type="submit" class="btn btn-gradient-primary mr-2" id="btn-add-size" onclick="insertVariantSize()">Add</button>
          <button class="btn btn-light">Cancel</button>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
