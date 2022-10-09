
<?php $__env->startSection('title','GRAPPLING ZONE | NEWS'); ?>
<?php $__env->startSection('content'); ?>
 <div class="inner-banner">
      <img src="<?php echo e(asset('images/inner-bg.jpg')); ?>" alt="">
      <div class="car-cls">
        <div class="container">
          <div class="row">
            <div class="bnr-heading">
              <h2>Latest News</h2>
            </div>
          </div>
        </div>
      </div>
  </div>

  <section class="latest-news-sec">
    <div class="container">
        <div class="top-headings">
          <h4>News</h4>
          <h2>Our Latest News</h2>
        </div>

        <div class="row"> 
            <div class="col-md-7">
              <div class="latest-news-txt">
              <img src="<?php echo e(asset($news->img)); ?>" alt="">
              <h6><?php echo e(date('M d,Y' , strtotime($news->created_at))); ?></h6>
              <h5><?php echo e($news->heading); ?> </h5>        
               <?php echo e($news->paragraph); ?>

              </div>
            </div>

             <div class="col-md-5">
              <?php $__currentLoopData = $news2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="latest-news-txt">
              <img src="<?php echo e(asset($value->img)); ?>" alt="">
              <h5><?php echo e($value->heading); ?>.</h5>        
               <?php echo e($value->paragraph); ?>

              </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="news-blk">
          <div class="row">
            <?php $__currentLoopData = $news3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val_3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
            <div class="latest-news-txt">
            <img src="<?php echo e(asset($val_3->img)); ?>" alt="">
            <h5><?php echo e($val_3->heading); ?></h5>        
                 <?php echo e($val_3->paragraph); ?>

            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
          </div>
        </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\Grappling_Zone\grappling_zone\resources\views/web/news.blade.php ENDPATH**/ ?>