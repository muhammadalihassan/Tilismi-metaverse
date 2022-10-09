 
<?php $__env->startSection('content'); ?>
<section class="banner-contct">
   <div class="banner-cntct-div">
       <video src="<?php echo e(asset($registration_banner->img)); ?>" muted="" autoplay="" loop="" playsinline=""></video>
       <div class="container">
           <div class="banner-cntct-txt appointment-bnr">
               <h3>Sign Up</h3>
               <ul>
                   <li>
                       <a href="<?php echo e(route('welcome')); ?>">Home</a>
                   </li>
                   <li>/</li>
                   <li>Sign Up</li>
               </ul>
           </div>
       </div>
   </div>
</section>
<section class="appointment-blk">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="appointment-work">
                   <form id="address-form" action="<?php echo e(route('user_registration')); ?>" method="POST" autocomplete="off">
                       <?php echo csrf_field(); ?>

                       <div class="row row-f">
                           <div class="col-md-6">
                               <!--                     <label>NAME</label> -->

                               <input type="text" id="name" name="name" placeholder="Full Name" style="text-transform: capitalize;" required />
                           </div>
                           <div class="col-md-6">
                               <!--                     <label>I AM</label>
                                    -->
                               <input type="text" id="name" name="username" placeholder="User Name" style="text-transform: capitalize;" required />
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <!--                       <label>PHONE</label>
                                 -->
                               <input id="phoneNumber" name="phonenumber" placeholder="Phone Number" maxlength="16" required />
                           </div>
                           <div class="col-md-6">
                               <!--                       <label>ADDRESS</label>
                                 -->
                               <input type="email" id="email" name="email" placeholder="Email" class="email-letter" required />
                           </div>
                       </div>

                       <div class="row">
                           <div class="col-md-6">
                               <!--                       <label>PHONE</label>
                                 -->
                               <input id="pass" type="Password" name="password" placeholder="Password" required />
                           </div>
                           <div class="col-md-6">
                               <!--                       <label>ADDRESS</label>
                                 -->
                               <input type="Password" id="pass" name="confirm_password" placeholder="Confirm Password" class="email-letter" required />
                           </div>
                       </div>

                       <div class="row">
                           <div class="col-md-12 text-center">
                              <button class="hover-btn" type="submit" >Submit <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                           </div>
                        </div>
                       
                   </form>

                        
               </div>
           </div>
       </div>
   </div>
</section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<script>


// $('#user_register').click(function(){

//    $('#address-form')[0].submit(); 

// });



</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\dna_update_code\resources\views/web/user-register.blade.php ENDPATH**/ ?>