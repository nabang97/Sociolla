<!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalTitle" aria-hidden="true">
  <style media="screen">
  #image_preview{
position: absolute;
font-size: 30px;
left: 100px;
width: 250px;
height: 230px;
text-align: center;
line-height: 180px;
font-weight: bold;
color: #C0C0C0;
background-color: #FFFFFF;
overflow: auto;
}
/* #selectImage{
padding: 19px 21px 14px 15px;
position: absolute;
bottom: 0px;
width: 414px;
background-color: #FEFFED;
border-radius: 10px;
} */
.submit{
font-size: 16px;
/* background: linear-gradient(#ffbc00 5%, #ffdd7f 100%); */
border: 1px solid #e5a900;
color: #4E4D4B;
font-weight: bold;
cursor: pointer;
width: 300px;
border-radius: 5px;
padding: 10px 0;
outline: none;
margin-top: 20px;
margin-left: 15%;
}
.submit:hover{
background: linear-gradient(#ffdd7f 5%, #ffbc00 100%);
}
#file {
/* color: red;
padding: 5px;
border: 5px solid #8BF1B0;
background-color: #8BF1B0;
margin-top: 10px;
border-radius: 5px;
box-shadow: 0 0 15px #626F7E;
margin-left: 15%;
width: 72%; */
}
#message{

}
#success
{
color:green;
}
#invalid
{
color:red;
}
#line
{
margin-top: 274px;
}
#error
{
color:red;
}
#error_message
{
color:blue;
}
#loading
{
display:none;
font-size:25px;
}
  </style>
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Payment Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
          <input class="bold-text" name="nomor-order" id="nomor-order" value="ASFFGHJK" style="background-color:transparent;border:0px" hidden></input>
        <div class="grid-payment">
          <div class="payment-ordernum">
            <span class="bold-text" id="nomor-order-see" style="color:black"></span>
          </div>
          <div class="payment-date">
              <span id="tanggal-confirm" name="tanggal-confirm">25 Juli 2019 08.05 AM</span>
          </div>
          <div class="payment-price">
              <span class="bold-text" id="total-harga">Rp 320,320</span>
          </div>
          <div class="payment-puritem">
              <span id="banyak-item">1 item</span>
          </div>
        </div>
        <div class="panelform-confirm-payment">
          <p class="text-right">
          <!-- <a href="#">
            <img src="svg/edit.svg" alt=""> ubah
          </a></p> -->

          <div class="row">
            <div class="col-md-6">
              <input type="text" placeholder="Nama Bank" name="bank">
            </div>
            <div class="col-md-6">
              <input type="text" placeholder="Nomor Rekening" name="rekening">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <input type="text" placeholder="Nama Pemilik" name="pemilik">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="upload-panel">
                  <div id="image_preview"><img id="previewing" src="noimage.png" /></div>
                  <hr id="line">
                  <div id="selectImage">
                  <center><label>Select Your Image</label><br/>
                  <input type="file" name="file" id="file" required />
                  </center>
                  </div>
                    <br>
                <h6 class="bold-text" style="text-align:center">UPLOAD BUKTI TRANSFER</h6>
                <p>untuk mempercepat verifikasi pembayaran<br>
                  Format gambar: .JPG .JPEG, .PNG, max 10 MB</p>
                  <h4 id='loading' >loading..</h4>
                  <div id="message"></div>
                </div>
                <input type="submit" value="Upload" class="submit" />

            </div>
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
