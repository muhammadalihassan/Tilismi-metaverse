
<?php $__env->startSection('title','GRAPPLING ZONE |OUR BUSINESS'); ?>
<?php $__env->startSection('content'); ?>
 <div class="inner-banner">
      <img src="<?php echo e(asset($our_business_banner->img)); ?>" alt="">
      <div class="car-cls">
        <div class="container">
          <div class="row">
            <div class="bnr-heading">
              <h2>Our<br>business</h2>
            </div>
          </div>
        </div>
      </div>
  </div>

  <section class="our-business-sec">
    <div class="container">
        <div class="top-headings">
          <h4>BUILD A BETTER BUSINESS</h4>
          <h2>Grappling Zone Consulting<br>Program</h2>
          <img src="<?php echo e(asset($our_business->img)); ?>" alt="">
        </div>

        <div class="row"> 
          <div class="col-md-6">
            <div class="business-txt">
             <?=html_entity_decode($our_business->desc)?>   
            </div>
          </div>

           <div class="col-md-6">
            <div class="business-txt">
            <ul>
              <li><img src="<?php echo e(asset('images/tick.png')); ?>">One Team /One Family</li>
              <li><img src="<?php echo e(asset('images/tick.png')); ?>">Winning Brazilian Jiu-jitsu Program</li>
              <li><img src="<?php echo e(asset('images/tick.png')); ?>">IBJJF Recognition and Registration</li>
              <li><img src="<?php echo e(asset('images/tick.png')); ?>">Weekly Zoom Meetings</li>
              <li><img src="<?php echo e(asset('images/tick.png')); ?>">Retention Tools With GZ Curriculum & Member Communication</li>
              <li><img src="<?php echo e(asset('images/tick.png')); ?>">Marketing</li>
              <li><img src="<?php echo e(asset('images/tick.png')); ?>">Enroll More Students</li>
              <li><img src="<?php echo e(asset('images/tick.png')); ?>">Keep Existing Clientele</li>
              <li><img src="<?php echo e(asset('images/tick.png')); ?>">Marketing For Your School</li>

              <li><img src="<?php echo e(asset('images/tick.png')); ?>">Gain Brazilian Jiu-jitsu and Business Advice</li>
              <li><img src="<?php echo e(asset('images/tick.png')); ?>">Curriculum for Self Defense/BrazilianJiu-jitsu Competition</li>
              <li><img src="<?php echo e(asset('images/tick.png')); ?>">Run Efficient , Successful and Profitable School</li>
              <li><img src="<?php echo e(asset('images/tick.png')); ?>">Open Multiple Locations</li>
            </ul>
            </ul>
            </div>
          </div>
        <div>
           
         </div>
        </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\Grappling_Zone\grappling_zone\resources\views/web/our-business.blade.php ENDPATH**/ ?>