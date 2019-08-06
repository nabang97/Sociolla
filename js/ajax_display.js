  function getProduct(code,size_id,shade_id,weight_id){

    if (code == "") {
      console.log("jangan kosong");
    }else{
      console.log("Display" + code);
      $.ajax({ /* THEN THE AJAX CALL */
          url: "_action/gets/getDetail.php",
          method : "POST",
          data:{
            'selected-product-variant':1,
            'code':code,
            'size_id':size_id,
            'shade_id':shade_id,
            'weight_id':weight_id,
          },
          async : true,
          dataType : 'text',
          success: function(data){
            console.log(data);
            window.location.href = "detail_product.php?"+data+"";
           //  $('#tableTypes').html(data);
           // alert("success insert data!");
          }
        });//end ajax
    }
  }

  function setDefaultAddress(id,user){
    console.log(id+"|"+user);
    var btnText = $('#btn-set-default'+id+'').text();
    console.log(btnText);
    if ( btnText == "Set Default") {
      $.ajax({ /* THEN THE AJAX CALL */
          url: "_action/inputs/defaultAddress.php",
          method : "POST",
          data:{
            'set-default':1,
            'id':id,
            'user':user
          },
          async : true,
          dataType : 'text',
          success: function(data){
            $('#btn-set-default'+id+'').html("Unset Default");
          }
        });//end ajax
    }else{
      $.ajax({ /* THEN THE AJAX CALL */
          url: "_action/inputs/defaultAddress.php",
          method : "POST",
          data:{
            'unset-default':1,
            'id':id,
            'user':user
          },
          async : true,
          dataType : 'text',
          success: function(data){
            $('#btn-set-default'+id+'').html("Set Default");
          }
        });//end ajax
    }


  }

  function confirmationModal(id,date,total,item){
      console.log(id+"|"+date+"|"+total+"|"+item);
      var datenow = new Date($.now());

      $('#nomor-order-see').html(id);
      $('#nomor-order').val(id);
      $('#tanggal-confirm').html(datenow);
      $('#total-harga').html(total);
      $('#banyak-item').html(item+" item");
  }

  $(document).ready(function (e) {
    $("#uploadimage").on('submit',(function(e) {
    e.preventDefault();
    $("#message").empty();
    $('#loading').show();
    $.ajax({
      url: "ajax_php_file.php", // Url to which the request is send
      type: "POST",             // Type of request to be send, called as method
      data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
      contentType: false,       // The content type used when sending data to the server.
      cache: false,             // To unable request pages to be cached
      processData:false,        // To send DOMDocument or non processed data file it is set to false
      success: function(data)   // A function to be called if request succeeds
      {
      $('#loading').hide();
      $("#message").html(data);
      }
      });
    }));

    // Function to preview image after validation
    $(function() {
    $("#file").change(function() {
    $("#message").empty(); // To remove the previous error message
    var file = this.files[0];
    var imagefile = file.type;
    var match= ["image/jpeg","image/png","image/jpg"];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
    {
    $('#previewing').attr('src','noimage.png');
    $("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
    return false;
    }
    else
    {
    var reader = new FileReader();
    reader.onload = imageIsLoaded;
    reader.readAsDataURL(this.files[0]);
    }
    });
    });
    function imageIsLoaded(e) {
    $("#file").css("color","green");
    $('#image_preview').css("display", "block");
    $('#previewing').attr('src', e.target.result);
    $('#previewing').attr('width', '250px');
    $('#previewing').attr('height', '230px');
    };
  });

  $(document).ready(function(){ /* PREPARE THE SCRIPT */
      $("#select-country").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
       var selected = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
       //var dataString = "allbooks="+allbooks; /* STORE THAT TO A DATA STRING */
        console.log(selected);
         $.ajax({ /* THEN THE AJAX CALL */
            /* TYPE OF METHOD TO USE TO PASS THE DATA */
           url: "_action/gets/getAddress.php",
           method : "POST",
           data:{
             'show-provinces':1,
             'selected':selected
           },
           async : true,
           dataType : 'text',
           success: function(data){
            $('#select-provinces').html(data);
           }
         });
       });

       $("#select-provinces").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
        var selected = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
        //var dataString = "allbooks="+allbooks; /* STORE THAT TO A DATA STRING */
         console.log(selected);
          $.ajax({ /* THEN THE AJAX CALL */
             /* TYPE OF METHOD TO USE TO PASS THE DATA */
            url: "_action/gets/getAddress.php",
            method : "POST",
            data:{
              'show-cities':1,
              'selected':selected
            },
            async : true,
            dataType : 'text',
            success: function(data){
             $('#select-city').html(data);
            }
          });
        });

        $("#select-city").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
         var selected = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
         //var dataString = "allbooks="+allbooks; /* STORE THAT TO A DATA STRING */
          console.log(selected);
           $.ajax({ /* THEN THE AJAX CALL */
              /* TYPE OF METHOD TO USE TO PASS THE DATA */
             url: "_action/gets/getAddress.php",
             method : "POST",
             data:{
               'show-subdistrict':1,
               'selected':selected
             },
             async : true,
             dataType : 'text',
             success: function(data){
              $('#select-subdistrict').html(data);
             }
           });
         });


  });
