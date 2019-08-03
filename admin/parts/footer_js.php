<!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/dashboard.js"></script>
<!-- End custom js for this page-->
<!-- data table -->
<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" charset="utf-8"></script>

<!-- script datatable category -->
<script type="text/javascript">
$(document).ready( function () {
    $('#tableTypes').DataTable();
} );
$(document).ready( function () {
    $('#tableCategories').DataTable();
} );

$(document).ready( function () {
    $('#tableSubCategories').DataTable();
} );

$(document).ready( function () {
    $('#tableBrands').DataTable();
} );

$(document).ready( function () {
    $('#tableProducts').DataTable();
} );

$(document).ready( function () {
    $('#tableColors').DataTable();
} );

$(document).ready( function () {
    $('#tableSizes').DataTable();
} );

$(document).ready( function () {
    $('#tableShades').DataTable();
} );

$(document).ready( function () {
    $('#tableWeights').DataTable();
} );
$(document).ready( function () {
    $('#tableProductVariants').DataTable();
} );

</script>

<!-- AJAX -->
<?php include('ajax_insert.php') ?>
<?php include('ajax_display.php') ?>
<?php include('product_view.php') ?>
</body>

</html>
