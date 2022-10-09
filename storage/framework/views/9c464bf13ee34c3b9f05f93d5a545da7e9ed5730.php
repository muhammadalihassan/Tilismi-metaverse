 
<?php $__env->startSection('content'); ?>

<section class="banner-contct">
   <div class="banner-cntct-div">
      <video src="<?php echo e(asset('images/schedule-banner.mp4')); ?>" muted="" autoplay="" loop="" playsinline=""></video>
      <div class="container">
         <div class="banner-cntct-txt appointment-bnr">
            <h3>Reset Password</h3>
            <ul>
               <li>
                  <a href="<?php echo e(route('welcome')); ?>">Home</a>
               </li>
               <li>/</li>
               <li>Reset Password</li>
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
                <form action="<?php echo e(route('reset.password.post')); ?>" method="POST">
                          <?php echo csrf_field(); ?>
                          <input type="hidden" name="token" value="<?php echo e($token); ?>">
  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  <?php if($errors->has('email')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                  <?php endif; ?>
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required autofocus>
                                
                                  <?php if($errors->has('password')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('password')); ?>

                                      </span>
                                  <?php endif; ?>
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                  <?php if($errors->has('password_confirmation')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('password_confirmation')); ?></span>
                                  <?php endif; ?>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="hover-btn">
                                  Reset Password
                              </button>
                          </div>
                      </form>
            </div>
         </div>
      </div>
   </div>
</section>







<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\dna_update_code\resources\views/web/forget-password-link.blade.php ENDPATH**/ ?>