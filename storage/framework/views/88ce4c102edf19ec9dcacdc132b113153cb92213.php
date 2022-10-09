
<footer>
  <div class="container">
    <div class="row">
        <div class="col-md-3">
          <div class="ftr-txt">
            <h3>Site Links</h3>
            <div class="ftr-area">
            <ul>
                 <li><a href="<?php echo e(route('welcome')); ?>">Home</a></li>
                  <li><a href="<?php echo e(route('our_events')); ?>">Our Events</a></li>
                  <li><a href="<?php echo e(route('about_us')); ?>">About Us</a></li>
                  <li><a href="<?php echo e(route('contact_us')); ?>">Contact Us</a></li>
                  <li><a href="<?php echo e(route('our_location')); ?>">Location</a></li>
                  <li><a href="<?php echo e(route('curriculum_videos')); ?>">Vedios</a></li>
                  <li><a href="<?php echo e(route('user_registration')); ?>">Join Now</a></li>
            </ul>
            </div>
          </div>
        </div>

         <div class="col-md-3">
          <div class="ftr-txt">
            <h3>Services</h3>
              <div class="ftr-area">
              <ul>
                   <li><a href="<?php echo e(route('welcome')); ?>">Home</a></li>
                  <li><a href="<?php echo e(route('our_events')); ?>">Our Events</a></li>
                  <li><a href="<?php echo e(route('about_us')); ?>">About Us</a></li>
                  <li><a href="<?php echo e(route('contact_us')); ?>">Contact Us</a></li>
                  <li><a href="<?php echo e(route('our_location')); ?>">Location</a></li>
                  <li><a href="<?php echo e(route('curriculum_videos')); ?>">Vedios</a></li>
                  <li><a href="<?php echo e(route('user_registration')); ?>">Join Now</a></li>
              </ul>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="ftr-txt">
              <h3>Newsletter</h3>
              <p><?php echo e($foot1->useful_links); ?></p>
            </div>

            <div class="ftr-form">
             <form action="<?php echo e(route('newsletter_submit')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
               
                <input type="hidden" name="user_id" value="<?php echo e((isset(Auth::user()->id)?Auth::user()->id:'')); ?>">
               
                <input type="text" placeholder="Search Here" name="email" required="">
                <button type="submit" class="submittn"><img src="<?php echo e(asset('images/arrow.png')); ?>"></button>
              </form>
            </div>
          
             <ul class="icon-frst">
                  <li><a href="<?php echo e($map_facebook->value); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="<?php echo e($map_Google->value); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="<?php echo e($map_Pintrest->value); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                  <li><a href="<?php echo e($map_twitter->value); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </div>

            <div class="col-md-3">
              <div class="ftr-txt">
                <h3>Contact Us</h3>
                <div class="ftr-area">
                  <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#"><span>Address:</span> <?php echo e($address->value); ?></a></li>
                    
                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:213-379-8988"><span>Phone:</span>  <?php echo e($phone->value); ?></a></li>

                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:chris@smartvoltsolar.com"><span>Email:</span> <?php echo e($email->value); ?></a></li>
                  </ul>
                </div>
              </div>
            </div>
    </div>
  </div>

      <div class="copy-right">
        <div class="container">
          <div class="row">
              <div class="col-md-6">
                 <p><?php echo e($foot1->touch_links); ?></p>
              </div>
               <div class="col-md-6">
                <div class="copy-txt">
                 <ul>
                   <li><a href="<?php echo e(route('terms_condition')); ?>">Terms & Conditions</a></li>
                   <li><a href="">|</a></li>
                   <li><a href="<?php echo e(route('privacy_policy')); ?>">Privacy Policy</a></li>
                 </ul>
                </div>
              </div>
          </div>
        </div>
      </div>
</footer>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
   $('.submittn').click(function() {
    if ($('input[name="user_id"]').val() == '') {
   
            toastr.error("Please Login First");
   
             return false;
   
         }

   });
</script>
<?php $__env->stopSection(); ?>
<?php /**PATH D:\FareehaShah\Grappling_Zone\grappling_zone\resources\views/web/layouts/footer.blade.php ENDPATH**/ ?>