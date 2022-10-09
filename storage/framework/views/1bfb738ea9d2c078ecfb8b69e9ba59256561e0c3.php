
<?php $__env->startSection('title','GRAPPLING ZONE |Curriculum Videos'); ?>
<?php $__env->startSection('content'); ?>
 <div class="inner-banner">
      <img src="<?php echo e(asset('images/banner-about-us.jpg')); ?>" alt="">
      <div class="car-cls">
        <div class="container">
          <div class="row">
            <div class="bnr-heading">
              <h2>curriculum<br>and videos</h2>
            </div>
          </div>
        </div>
      </div>
  </div>
  <section class="curriculum-section">
    <div class="container">
        <div class="top-headings">
          <h4>Our Videos</h4>
          <h2>curriculum videos</h2>
        </div>
        <div class="row"> 
            <?php $__currentLoopData = $curriculum_videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vedio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6">
             <div class="curriculum-text">
                <div class="vid-area">
                <div class="play-btn">
                <div class="play">
                <a data-fancybox="gallery" data-src="<?php echo e($vedio->vedio_link); ?>" width="100%" height="500" controls="controls" preload="metadata">
                <img src="<?php echo e(asset($vedio->img)); ?>">
                <svg version="1.1" id="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="100px" width="100px"
                viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <path class="stroke-solid" fill="#fff" stroke="#fff"  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                C97.3,23.7,75.7,2.3,49.9,2.5"/>
                <path class="icon" fill="#ff6600" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/></svg></a>
                </div>
                </div>
                </div>
                <h4>Watch video</h4>
                <h2><?php echo e($vedio->heading); ?></h2> 
             </div>
            </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </div>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\grappling_zone\grappling_zone_\resources\views/web/curriculum-videos.blade.php ENDPATH**/ ?>