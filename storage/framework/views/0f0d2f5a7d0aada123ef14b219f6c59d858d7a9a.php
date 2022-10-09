
<?php $__env->startSection('title','GRAPPLING ZONE | OUR EVENTS'); ?> 
<?php $__env->startSection('content'); ?>
 <div class="inner-banner">
      <img src="<?php echo e(asset('images/inner-bg.jpg')); ?>" alt="">
      <div class="car-cls">
        <div class="container">
          <div class="row">
            <div class="bnr-heading">
              <h2>OUR EVENTS</h2>
            </div>
          </div>
        </div>
      </div>
  </div>

<section class="our-events-sec">
  <div class="container">

     <div class="top-headings">
      <h4>Events</h4>
      <h2>Latest Grappling Zone Events</h2>
     </div>

    <div class="row">
      <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-4">
         <div class="event-blk">
           <div class="event-img">
           <img src="<?php echo e(asset($event->img)); ?>" alt="">
           </div>
           <div class="news-txt">
           <h5><?php echo e(date('M d,Y' , strtotime($event->created_at))); ?></h5>
           <h3><?php echo e($event->heading); ?></h3>
            <?php echo e($event->paragraph); ?>

          </div>
         </div>
      </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\Grappling_Zone\grappling_zone\resources\views/web/events.blade.php ENDPATH**/ ?>