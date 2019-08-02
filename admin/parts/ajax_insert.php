<script type="text/javascript">

function insertProductType(){
  var id = document.getElementById('id').value;
  var name = document.getElementById('name').value;
  if (id == "" || name == "") {
    console.log("jangan kosong");
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insertType.php",
        method : "POST",
        data:{'id':id, 'name':name},
        async : true,
        dataType : 'text',
        success: function(data){
          DisplayProductType();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function
function DisplayProductType(){
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/gets/getProductType.php",
        method : "POST",
        data:{'display-table':1},
        async : true,
        success: function(data){
        $('#tableTypes').find('tbody').html(data);
        }
      });//end ajax
} //end function
</script>
