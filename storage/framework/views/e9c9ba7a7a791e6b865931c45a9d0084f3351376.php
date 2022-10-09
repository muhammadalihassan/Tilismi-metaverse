<!-- Header Start -->
<header>
  <div class="top-row">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="logo">
            <a href="<?php echo e(route('welcome')); ?>"><img src="<?php echo e(asset($logo->img)); ?>"></a>
          </div>
        </div>

        <div class="col-md-8">
          <nav id='cssmenu'>
            <div id="head-mobile"></div>
            <div class="button"></div>
            <ul class="hdr-menu">
              <li class='active'><a href="<?php echo e(route('welcome')); ?>"><?php echo e($nav1->name); ?></a></li>
              <li><a href="<?php echo e(route('our_location')); ?>"><?php echo e($nav2->name); ?></a></li>
              <li><a href="<?php echo e(route('about_us')); ?>"><?php echo e($nav3->name); ?></a></li>
              <li><a href="<?php echo e(route('our_leadership')); ?>"><?php echo e($nav4->name); ?></a></li>
              <li><a href="<?php echo e(route('our_business')); ?>"><?php echo e($nav5->name); ?></a></li>
              <li><a href="<?php echo e(route('news')); ?>"><?php echo e($nav6->name); ?></a></li>
              <li><a href="<?php echo e(route('merchandise')); ?>"><?php echo e($nav7->name); ?></a></li>
              <li><a href="<?php echo e(route('curriculum_videos')); ?>"><?php echo e($nav8->name); ?></a></li>
            </ul>
          </nav>
        </div>

        <div class="col-md-1">
          <div class="head-shoping">

            <a href="<?php echo e(route('cart')); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <a href="<?php echo e(route('wishlist_products')); ?>"><i class="fa fa-heart" aria-hidden="true"></i></a>

            <?php if(auth()->guard()->guest()): ?>

              <div class="join-btn">
                <a href="<?php echo e(route('user_registration')); ?>"><?php echo e($nav9->name); ?></a>
              </div>

            <?php endif; ?>

            <?php if(auth()->guard()->check()): ?>

              <div class="join-btn">
                <a href="<?php echo e(route('signOut')); ?>">Sign out</a>
              </div>

            <?php endif; ?>

          </div>
        </div>

      </div>
    </div>
  </div>
</header>
<!-- Header End --><?php /**PATH E:\xampp\htdocs\grappling_zone\grappling_zone_\resources\views/web/layouts/header.blade.php ENDPATH**/ ?>