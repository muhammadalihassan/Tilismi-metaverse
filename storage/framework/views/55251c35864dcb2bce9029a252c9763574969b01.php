 
<?php $__env->startSection('content'); ?>

 <section class="banner-contct partner-banner">

  <div class="banner-cntct-div">
    <img src="<?php echo e(asset($partners_banner->img)); ?>"> 
   
    <div class="container">

    <div class="partner-txt">
     
   </div>
    </div>

  </div>
</section>
 <section class="appointment-blk">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="appointment-work partnr-pg">
               <form id="address-form" action="<?php echo e(route('partner_registration')); ?>" method="POST" autocomplete="off" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input required="" type="hidden" id="name" name="user_id" value="<?php echo e($user->id); ?>" placeholder="Full Name" style="text-transform: capitalize;">
                <div class="row">
                  <div class="col-md-6">
                  <input required="" type="text" id="name" name="full_name"  placeholder="Full Name" style="text-transform: capitalize;">
                  </div>
                  <div class="col-md-6">
                  <input required="" type="text" id="email" name="email" placeholder="Email" class="email-letter">
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-6">
                  <input required="" id="phoneNumber" name="phoneNumb" placeholder="Phone Number" maxlength="16" >
                    </div>
                    <div class="col-md-6">
                  <input required="" id="ext" name="extension_number" placeholder="Extension Number" maxlength="4" >
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-6">
                  <input required="" type="text" id="comp-name"  name="company_name" placeholder="Company Name" class="comp-name">
                    </div>
                    <div class="col-md-6">
                  <input required="" type="text" id="comp-web" name="company_website" placeholder="Company Website">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                  <input required="" type="email" name="company_email"  id="company-email"  placeholder="Company Email" class="company-email">
                    </div>
                    <div class="col-md-6">
                  <input required="" id="b-phoneNumber" name="company_phone" placeholder="Company Phone Number" maxlength="16" >
                    </div>
                    </div>

                  <div class="row">
                    <div class="col-md-12">
                      
                      <input id="ship-address"  name="company_address" required autocomplete="off"  placeholder="Company Address" style="text-transform: capitalize;">
                    </div>
                  </div>

                  <div class="row">
                      <div class="col-md-6">
                  <input required="" id="address2" name="address2"  placeholder="Bldg. #, Suite #, N/A" style="text-transform: capitalize;">
                    </div>
                    <div class="col-md-6">
                  <input id="locality"  name="city" required placeholder="City" style="text-transform: capitalize;">
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                  <input id="state"  required name="state" placeholder="State" style="text-transform: capitalize;">
                    </div>
                    <div class="col-md-6" for="postal_code">
                
        <input id="postcode"  required placeholder="Zip" name="zipcode" />
        
                    </div>
                    
                    
                  </div>
                  
                  <div class="row">
                      <div class="col-md-12">
                         <p class="simple-reg-terms">
                            <label>
                 <span class="checkbox">

                  <input title="Please tick" name="accept_terms" value="Yes" type="checkbox"  class="required" id="js-accept-terms" required /></span> <span title="Please tick">Read and agree to the following</span> <a target="_blank" href="<?php echo e(route('terms_condition')); ?>" title="Opens in a new tab">Terms &amp; Conditions</a>
                            </label>
                          </p>
                           
                      </div>
                  </div>
                  <div class="row prt1">
                      <div class="col-md-6">
                        <label class="file-upl" for="file-upload">
                         <img src="<?php echo e(asset('images/upload.png')); ?>">
                    		<span>Attach PNG Logo</span>
                    		<input id="file-upload" type="file" name="company_logo"/>
                    	</label>
                      </div>  
                      <div class="col-md-6">
                      <div id="signature">
                       <span>Signature</span>
                       <canvas width="300" height="148" id="signaturePad"></canvas>
                       <div class="controls">
                           <a class="btn-green" href="" id="download" >Download</a>
                           <input type="hidden" name="signature" id="dataurl">
                          
                          <a class="btn-green" href="#" id="clearSig">Clear Canvas</a>
                              </div>
                            </div>
                      </div>
                  </div>
                  
                  <div class="appointment-txt next-btn">
                  <button type="submit" class="hover-btn">Submit</button>
               </div>
                  </div>
           </div>
             </form>
            </div>
         </div>
      </div>
   </div>
</section>
<?php $__env->stopSection(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://hongru.github.io/proj/canvas2image/canvas2image.js"></script>

<script type="text/javascript">


// function download_image() {
//     let image_base64 = document
//         .querySelector("#signaturePad")
//         .toDataURL("image/png")
//         .replace(/^data:image\/png;base64,/, "");
//     $("#dataurl").val(image_base64);
// }

// var c = document.getElementById("signaturePad");
// var ctx = c.getContext("2d");
// ctx.beginPath();
// ctx.arc(100, 75, 50, 0, 2 * Math.PI);
// ctx.stroke();

// function download_image() {
      
//     var href = $(this).attr("href");

//     url = $("#dataurl").val(href);

//     var canvas = document.getElementById("signaturePad");
//     image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");

//     var link = document.createElement("a");
//     link.download = "signature.png";
//     link.href = image;

//     //url = $("#dataurl").val(image);
//     link.click();
// }



$(document).ready(function () {


     $("#download").click(function (event) {

        var href = $(this).attr("href");

        url = $("#dataurl").val(href);

        var canvas = document.getElementById("signaturePad");
        
        var image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");

        event.preventDefault();

    }); 
});

</script>


<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Malaika\dna_update_4\dna_update_4\resources\views/web/partners.blade.php ENDPATH**/ ?>