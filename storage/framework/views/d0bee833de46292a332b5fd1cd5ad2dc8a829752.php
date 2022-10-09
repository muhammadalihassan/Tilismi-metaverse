 
<?php $__env->startSection('content'); ?>
<section class="banner-contct">
   <div class="banner-cntct-div">
      <video src="<?php echo e(asset('images/schedule-banner.mp4')); ?>" muted="" autoplay="" loop="" playsinline=""></video>
      <div class="container">
         <div class="banner-cntct-txt appointment-bnr">
            <h3>Forgot Password</h3>
            <ul>
               <li>
                  <a href="<?php echo e(route('welcome')); ?>">Home</a>
               </li>
               <li>/</li>
               <li>Forgot Password</li>
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
                <div class="reset-pass-div">
               <form id="address-form" action="<?php echo e(route('forget.password.post')); ?>" method="POST" autocomplete="off">
                <?php echo csrf_field(); ?>
                  <div class="row">
                    <div class="col-md-12">
<!--                       <label>PHONE</label>
 -->               
               <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control-user " name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                    </div>
                  </div>



          <p>You will recieve your new password on this email.</p>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <button class="hover-btn">Submit <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                  </div>
                  
               
                
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
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\dna_update_5\dna_update_4\resources\views/web/forget-password.blade.php ENDPATH**/ ?>