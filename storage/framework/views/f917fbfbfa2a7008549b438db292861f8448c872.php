 
<?php $__env->startSection('content'); ?>
<br>
<br>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<title>Checkout</title>
</head>
     
    <div class="product-plan-tile">
    <h2>xyz</h2>
    <p>Subscription</p>
    <div class="plan-pricing">$24.00 / Day</div>
    <input type="button" id="subscribe" value="Subscribe Now"></a>
    </div>
    <div id="error-message"></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script> 

<script type="text/javascript">

var stripe = Stripe('pk_test_51Jr35VIVk2qJM0IQP5GCJkYzl5FzX80ZAwWnGexHHVORTjTpD4bg9OhlirT7MyVd1YS87sTUCLoARqxTrHpVpWZw00jv17GESQ');
//Setup event handler to create a Checkout Session when button is clicked
 
document.getElementById("subscribe").addEventListener("click", function(evt) {

    // console.log('xyz');
    createCheckoutSession('price_1K6XFSIVk2qJM0IQLraZ8ViR').then(function(data) {
      // Call Stripe.js method to redirect to the new Checkout page
      console.log(data.id)
      stripe.redirectToCheckout({
          sessionId: data.id

      }).then(handleResult);
    });
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Malaika\dna_update_4\dna_update_4\resources\views/web/stripe-payment.blade.php ENDPATH**/ ?>