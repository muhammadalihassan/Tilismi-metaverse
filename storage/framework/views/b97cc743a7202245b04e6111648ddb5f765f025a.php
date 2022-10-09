
<?php $__env->startSection('title','GRAPPLING ZONE | ABOUT US'); ?> 
<?php $__env->startSection('content'); ?>
 <div class="inner-banner">
      <img src="<?php echo e(asset('images/banner-9.jpg')); ?>" alt="">
      <div class="car-cls">
        <div class="container">
          <div class="row">
            <div class="bnr-heading">
              <h2>About Us</h2>
            </div>
          </div>
        </div>
      </div>
  </div>
<section class="about-us-section">
  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <div class="abt-us-img">
          <img src="<?php echo e(asset($about_detail->img)); ?>" alt="">
          <div class="abt-us-img2">
          <img src="<?php echo e(asset($about_short_detail->img)); ?>" alt="">
          </div>
        </div>
      </div>

       <div class="col-md-6">
          <div class="about-heading">
              <h4>ONE TEAM / ONE FAMILY</h4>
                     <?=html_entity_decode($about_detail->desc)?>   
            </div>
      </div>

      <div class="col-md-12">
         <div class="about-txt">
           <?=html_entity_decode($about_short_detail->desc)?> 
         </div>
      </div>

    </div>
  </div>
</section>
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\Grappling_Zone\grappling_zone\resources\views/web/about-us.blade.php ENDPATH**/ ?>