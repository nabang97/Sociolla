<!-- Modal -->
<div class="modal fade" id="addAddressModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Payment Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form class="" method="post">
            <input type="text" name="" value="" class="form-control" placeholder="First Name">
            <input type="text" name="" value="" class="form-control" placeholder="Last Name">
            <input type="text" name="" value="" class="form-control" placeholder="Address">
            <div class="">
              <select class="" name="" id="select-country" class="form-control">
                  <option value="">Select Country</option>
                <?php  $countries = $controllerAddress->showCountry() ?>
                 <?php foreach ($countries as $country): ?>
                    <option value="<?=$country->country_id ?>"><?=$country->name ?></option>
                 <?php endforeach; ?>

              </select>
            </div>
          <div class="">
            <select class="" name="" id="select-provinces" class="form-control">
              <option value="">Select Provinces</option>
            </select>
          </div>
          <div class="">
            <select class="" name="" id="select-city" class="form-control">
              <option value="">Select City</option>
            </select>
          </div>
          <div class="">
            <select class="" name="" id="select-subdistrict" class="form-control">
              <option value="">Select Subdistrict</option>
            </select>
          </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
