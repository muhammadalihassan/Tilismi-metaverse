
<?php $__env->startSection('title','GRAPPLING ZONE |MERCHANDISE'); ?>
<?php $__env->startSection('content'); ?>
  <div class="inner-banner">
      <img src="<?php echo e(asset('images/inner-bg.jpg')); ?>" alt="">
      <div class="car-cls">
        <div class="container">
          <div class="row">
            <div class="bnr-heading">
              <h2>Our<br>Merchandise</h2>
            </div>
          </div>
        </div>
      </div>
  </div>
  <section class="merchandise-sec">
      <div class="container">
      <div class="top-headings">
          <h4>Merchandise</h4>
          <h2>BUY TEAM MERCHANDISE</h2>
          <p>Grappling Zone Brazilian Jiu Jitsu Association was founded in 2019 by 9th degree Red Belt Grand Master Edison Leandro Da Silva and BJJ Black Belt James Wadley.</p>
        </div>

        <div class="row"> 
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-3">
            <div class="our-pro-blk">
              <span>
                <img src="<?php echo e(asset($product->img)); ?>" alt="">
              </span>
              <?php if($product->reviews->pluck('review')->avg()): ?>
             <ul id='stars'>
      <?php if($product->reviews->pluck('review')->avg() == 1): ?>
      <li class='star ' title='Poor' data-value='1' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Poor' data-value='2' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Fair' data-value='3' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='4' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='5' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <?php elseif($product->reviews->pluck('review')->avg() == 2): ?>



        <li class='star ' title='Poor' data-value='1' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
     <li class='star ' title='Poor' data-value='1' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Fair' data-value='2' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>

      <?php elseif($product->reviews->pluck('review')->avg() == 3): ?>
       <li class='star ' title='Poor' data-value='1' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
     <li class='star ' title='Poor' data-value='1' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star ' title='Fair' data-value='2' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
        <?php elseif($product->reviews->pluck('review')->avg() == 4): ?>

      <li class='star ' title='Fair' data-value='2' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star ' title='Good' data-value='3' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star ' title='Excellent' data-value='4' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star ' title='WOW!!!' data-value='5' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>

       <?php elseif($product->reviews->pluck('review')->avg() == 5): ?>
     <li class='star ' title='Fair' data-value='2' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star ' title='Good' data-value='3' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star ' title='Excellent' data-value='4' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star ' title='WOW!!!' data-value='5' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li class='star ' title='Excellent' data-value='4' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>

      <?php endif; ?>
     <?php else: ?>
    
        <li class='star blank ' title='Fair' data-value='2' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='WOW!!!' data-value='5' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($product->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>


      </ul>
       <?php endif; ?>
              <a href="<?php echo e(route('merchandise_details',[$product->product_cat->slug,$product->slug])); ?>"><h5><?php echo e($product->product_name); ?></h5></a>
              <h6><small>$<?php echo e($product->new_price); ?> </small> <del>$<?php echo e($product->old_price); ?></del></h6>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\Grappling_Zone\grappling_zone\resources\views/web/merchandise.blade.php ENDPATH**/ ?>