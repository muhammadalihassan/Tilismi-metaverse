
<?php $__env->startSection('title','GRAPPLING ZONE | CHECKOUT'); ?> 
<?php $__env->startSection('content'); ?>
<div class="inner-banner">
      <img src="<?php echo e(asset('images/banner-9.jpg')); ?>" alt="">

      <div class="car-cls">

        <div class="container">

          <div class="row">

            <div class="bnr-heading">

              <h2>CHECK OUT</h2>

            </div>

          </div>

        </div>

      </div>

  </div>

<section class="checkout-sec about_section">
 <form method="POST" action="<?php echo e(route('checkout_submit')); ?>">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
    <input type="hidden"  name="total"  value="<?php echo e($total_price+$shipping_pr); ?>" >
    <input type="hidden"  name="discount"  value="<?php echo e($dis); ?>" >
    <input type="hidden"  name="discount_type" value="<?php echo e($discount_type); ?>">
    <input type="hidden"  name="shipping_price" value="<?php echo e($shipping_pr); ?>">

      <div class="container">

        <div class="row">

          <div class="col-md-8 col-sm-8 col-xs-12  ">



            <div class="checkout-heading">

              <h2>Billing Address</h2>

            </div>

            <div class="form-tab">

             
                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-3">

                      <label for="">Country <span>*</span></label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-9">

                      <select class="form-control" id="billing_country" name="billing_country" value="<?php echo e(old('billing_country')); ?>">

                       <option disabled=""> - select country - </option>
 <option value="india">India</option>
 <option value="usa">USA</option>
 <option value="africa">Africa</option>

                      </select>

                    </div>

                  </div>

                </div>

                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <label for="">First Name <span>*</span></label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                   <input type="text" class="form-control" id="billing_firstname" placeholder="Enter Username" name="billing_firstname" required="" value="<?php echo e(old('billing_firstname')); ?>">

                    </div>

                  </div>

                </div>

                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <label for="">Last Name <span>*</span></label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <input type="text" class="form-control" id="billing_lastname" placeholder="Enter Username" name="billing_lastname" required="" value="<?php echo e(old('billing_lastname')); ?>">

                    </div>

                  </div>

                </div>

                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <label for="">Company Name <span>*</span></label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                   <input type="text" class="form-control" id="billing_company_name" placeholder="Enter Company Name" name="billing_company_name" required="" value="<?php echo e(old('billing_company_name')); ?>">

                    </div>

                  </div>

                </div>

                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <label for="">Address</label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                 <input type="text" class="form-control" id="billing_address" placeholder="EnterAddress" name="billing_address" required="" value="<?php echo e(old('billing_address')); ?>">

                    </div>

                  </div>

                </div>

                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <label for="">Town / City <span>*</span></label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" id="billing_city" placeholder="Town / City" name="billing_city" required="" value="<?php echo e(old('billing_city')); ?>">
                   

                    </div>

                  </div>

                </div>

                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <label for="">Email Address <span>*</span></label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                   <input type="email" class="form-control" id="billing_email" placeholder="Enter email" name="billing_email" required="" value="<?php echo e(old('billing_email')); ?>">

                    </div>

                  </div>

                </div>

                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <label for="">Phone</label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                     <input type="number" class="form-control" id="billing_mobile" placeholder="Enter Mobile Number" name="billing_mobile" min="0"  maxlength="11" oninput= "validity.valid||(value='');" required="" value="<?php echo e(old('billing_mobile')); ?>"  >

                    </div>

                  </div>

                </div>

            

            </div>


       <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
     
      <label><input type="checkbox" id="copy_address"> Same as Billing Address</label>
   
            </div>
          </div>


            <div class="checkout-heading">

              <h2>Shipping Address</h2>

            </div>

            <div class="form-tab">

              <form>

                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-3">

                      <label for="">Country <span>*</span></label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-9">

                       <select class="form-control" id="shipping_country" name="shipping_country" value="<?php echo e(old('shipping_country')); ?>">

                       <option disabled=""> - select country - </option>
 <option value="india">India</option>
 <option value="usa">USA</option>
 <option value="africa">Africa</option>

                      </select>

                    </div>

                  </div>

                </div>

                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <label for="">First Name <span>*</span></label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                     <input type="text" class="form-control" id="shipping_firstname" placeholder="Enter Shipping First Name" name="shipping_firstname" required="" value="<?php echo e(old('shipping_firstname')); ?>" >

                    </div>

                  </div>

                </div>

                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <label for="">Last Name <span>*</span></label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                   <input type="text" class="form-control" id="shipping_lastname" placeholder="Enter Shipping Last Name" name="shipping_lastname" required="" value="<?php echo e(old('shipping_lastname')); ?>" >

                    </div>

                  </div>

                </div>

                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <label for="">Company Name <span>*</span></label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                    <input type="text" class="form-control" id="shipping_company_name" placeholder="Enter Shipping Company Name" name="shipping_company_name" required="" value="<?php echo e(old('shipping_company_name')); ?>" >

                    </div>

                  </div>

                </div>

                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <label for="">Address</label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <input type="text" class="form-control" id="shipping_address" placeholder="Enter Shipping Address" name="shipping_address" required="" value="<?php echo e(old('shipping_address')); ?>" >

                    </div>

                  </div>

                </div>


                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <label for="">Town / City <span>*</span></label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                    <input type="text" class="form-control" id="shipping_city" placeholder="Enter City" name="shipping_city" required="" value="<?php echo e(old('shipping_city')); ?>">

                    </div>

                  </div>

                </div>

                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <label for="">Email Address <span>*</span></label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                     <input type="email" class="form-control" id="shipping_email" placeholder="Enter email" name="shipping_email" required="" value="<?php echo e(old('shipping_email')); ?>">

                    </div>

                  </div>

                </div>

                <div class="form-group">

                  <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <label for="">Phone</label>

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                     <input type="number" class="form-control" id="shipping_mobile" placeholder="Enter Mobile Number" name="shipping_mobile" min="0"  maxlength="11" oninput= "validity.valid||(value='');" required="" value="<?php echo e(old('shipping_mobile')); ?>">

                    </div>

                  </div>

                </div>

  

            </div>

          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">

            <div class="checkoutSec">

              <div class="checkoutBox">
                  <div class="checkoutHead">
                    <h5>your order</h5>

                  </div>

                  <div class="checkoutBody">

                    <ul class="list-unstyled">

                      <li>Card Subtotal x 1 <span class="pull-right">$<?php echo e($total_price); ?></span></li>

                      <li>Shipping <span class="pull-right">$<?php echo e($shipping_pr); ?></span></li>

                      <li>Order Total <span class="pull-right">$<?php echo e($total_price+$shipping_pr); ?></span></li>

                    </ul>

                    <h5>Payment Method</h5>

                  </div>

                  <div class="checkoutFoot">

                    <div class="checkbox">

                      <label><input type="checkbox" value="ChequePayment" name="payment_method">Cheque Payment</label>

                    </div>

                    <div class="checkbox">

                      <label><input type="checkbox" value="Paypal" name="payment_method">Paypal <span><img src="<?php echo e(asset('images/paypal-img.png')); ?>"></span></label>

                    </div>

                    <div class="web-btn">
                      <button type="submit" class="submittn">PLACE ORDER</button>
                    

                    </div>
                       
                  </div>

              </div>
           

            </div>

          </div>

        </div>

      </div>
    </form>

    </section>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<script type="text/javascript">
 $(document).ready(function(){ 
  $("#billing_email").keyup(function () {
  $(this).val($(this).val().substr(0, 1).toUpperCase() + $(this).val().substr(1).toLowerCase());
});
 $('#copy_address').click(function(){
 if($('#copy_address').is(':checked')){
$('#shipping_address').prop('readonly',true);
$('#shipping_firstname').prop('readonly',true);
$('#shipping_lastname').prop('readonly',true);
$('#shipping_city').prop('readonly',true);
$('#shipping_email').prop('readonly',true);
$('#shipping_mobile').prop('readonly',true);
$('#shipping_company_name').prop('readonly',true);
 $('#shipping_address').val($('#billing_address').val());
 $('#shipping_firstname').val($('#billing_firstname').val());
 $('#shipping_lastname').val($('#billing_lastname').val());
 $('#shipping_city').val($('#billing_city').val());
 $('#shipping_email').val($('#billing_email').val());
 $('#shipping_mobile').val($('#billing_mobile').val());
  $('#shipping_company_name').val($('#billing_company_name').val());
 var country = $('#billing_country option:selected').val();
 if(country !="")
 {
 $('#shipping_country option[value="' + country + '"]').prop('selected', true);
 $('#shipping_country').prop('readonly',true);
 }
 } else { 
 $('#shipping_address').prop('readonly',false);
$('#shipping_firstname').prop('readonly',false);
$('#shipping_lastname').prop('readonly',false);
$('#shipping_city').prop('readonly',false);
$('#shipping_email').prop('readonly',false);
$('#shipping_mobile').prop('readonly',false);
$('#shipping_company_name').prop('readonly',false);
 $('#shipping_address').val("");
 $('#shipping_street').val("");
 $('#shipping_city').val("");
 $('#shipping_email').val("");
 $('#shipping_mobile').val("");
 $('#shipping_country option:eq(0)').prop('selected', true);
 $('#shipping_country').prop('readonly',false);
 };
 
 });
 });
  // $(".submittn").click(function(){
   
  //     if ($('input[name="payment_method"]').is(":checked")) {
   
          
   
  //            return false;
   
  //        }else{


  //           toastr.error("Please check one payment method");
  //        }

  //      });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\Grappling_Zone\grappling_zone\resources\views/web/checkout.blade.php ENDPATH**/ ?>