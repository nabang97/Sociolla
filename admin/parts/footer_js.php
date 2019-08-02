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
    $('#tableCategories').DataTable();
} );
</script>
<!-- script datatable jenis produ -->
<script type="text/javascript">
$(document).ready( function () {
    $('#tableTypes').DataTable();
} );
</script>
<!-- script datatable subcategories -->
<script type="text/javascript">
$(document).ready( function () {
    $('#dataTableku').DataTable();
} );
</script>

<!-- AJAX -->
<?php include('ajax_insert.php') ?>
</body>

</html>
