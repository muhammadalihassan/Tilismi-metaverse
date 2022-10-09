
<?php $__env->startSection('title','GRAPPLING ZONE'); ?>
<?php $__env->startSection('content'); ?>


<!-- Slider Start -->

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->

  <ul class="carousel-indicators">

    <li data-target="#demo" data-slide-to="0" class="active"></li>

    <li data-target="#demo" data-slide-to="1"></li>

    <li data-target="#demo" data-slide-to="2"></li>

  </ul>



  <!-- The slideshow -->

  <div class="carousel-inner">

    <div class="carousel-item active">

      <img src="<?php echo e(asset('images/banner01.jpg')); ?>" alt="">

      <div class="car-cls">

        <div class="container">

          <div class="row">

            <div class="bnr-heading" data-aos="fade-up" data-aos-duration="3000">

              <h4 data-aos="fade-right">Welcome To</h4>

              <h1 data-aos="fade-right">Grappling<br>Zone</h1>

              <p data-aos="fade-right">Grappling Zone Association is registered with the (IBJJF) International Brazilian
                Jiu-Jitsu Federation, the (NAJJU) North American Jiu-Jitsu Union, (PJJF) PanAmerican.</p>

              <a href="<?php echo e(route('user_registration')); ?>" class="join-bttn">join now</a>

              <img src="<?php echo e(asset('images/logos.png')); ?>">

            </div>

          </div>

        </div>

      </div>

    </div>


    <div class="carousel-item">

      <img src="<?php echo e(asset('images/bg2.jpg')); ?>" alt="">

      <div class="car-cls">

        <div class="container">

          <div class="row">

            <div class="bnr-heading" data-aos="fade-up">

              <h4>Welcome To</h4>

              <h1>Grappling<br>Zone</h1>

              <p>Grappling Zone Association is registered with the (IBJJF) International Brazilian Jiu-Jitsu Federation,
                the (NAJJU) North American Jiu-Jitsu Union, (PJJF) PanAmerican.</p>

              <a href="" class="join-bttn">join now</a>

              <img src="<?php echo e(asset('images/logos.png')); ?>">

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="carousel-item">

      <img src="<?php echo e(asset('images/banner03.jpg')); ?>" alt="">

      <div class="car-cls">

        <div class="container">

          <div class="row">

            <div class="bnr-heading" data-aos="fade-up">

              <h4>Welcome To</h4>

              <h1>Grappling<br>Zone</h1>

              <p>Grappling Zone Association is registered with the (IBJJF) International Brazilian Jiu-Jitsu Federation,
                the (NAJJU) North American Jiu-Jitsu Union, (PJJF) PanAmerican.</p>

              <a href="" class="join-bttn">join now</a>

              <img src="<?php echo e(asset('images/logos.png')); ?>">

            </div>

          </div>

        </div>

      </div>

    </div>



  </div>

</div>

<!-- Slider End -->

<section class="about-us-section">

  <div class="container">

    <div class="row">

      <div class="col-md-6">
        <div class="abt-us-img" data-aos="flip-left">
          <img src="<?php echo e(asset($home_about->img)); ?>" alt="">
          <div class="abt-us-img2">
            <img src="<?php echo e(asset('images/abt-img2.png')); ?>" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="about-heading" data-aos="fade-up">
          <h4>About Us</h4>
          <?=html_entity_decode($home_about->desc)?>
          <a href="<?php echo e(route('about_us')); ?>" class="join-bttn orange-btn">Learn More About Us</a>
        </div>
      </div>


    </div>

  </div>

</section>

<section class="federation-section">

  <div class="container">

    <div class="row">

      <div class="col-md-6">
        <div class="affil-heading">
          <h1 data-aos="fade-left">Federation Affiliations</h1>

          <h4 data-aos="fade-left">Grappling Zone Students can register their Ranks with the following.</h4>
          <?php $__currentLoopData = $affiliations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $affilate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="affil-blk">
            <span data-aos="fade-up"><img src="<?php echo e(asset($affilate->img)); ?>" alt=""></span>
            <div class="affil-txt" data-aos="fade-left">
              <h3><?php echo e($affilate->heading); ?></h3>
              <h5><?php echo e($affilate->paragraph); ?> .</h5>
            </div>
            <a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>

    </div>

    <div class="col-md-6">

    </div>

  </div>

  </div>

</section>

<section class="merchandise-section">

  <div class="container">

    <div class="top-headings" data-aos="fade-down" data-aos-duration="2000">

      <h4>Merchandise</h4>

      <h2>Grappling Merchandise</h2>

    </div>

    <div class="row">
      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-3">
        <a href="<?php echo e(route('merchandise_details',[$product->product_cat->slug,$product->slug])); ?>">
          <div class="our-pro-blk">

            <div class="mer-images">
              <img src="<?php echo e(asset($product->img)); ?>" alt="">
              <div class="overlay">
                <form id='myform' method='POST' class='quantity' action="<?php echo e(route('add_to_cart')); ?>">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                  <input type="hidden" name="quantity" value="1">
                  <button type="submit" class="text"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Add to
                    Cart</button>
              </div>
              </form>

            </div>

            <div class='rating-stars'>
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
            </div>

            <a href="<?php echo e(route('merchandise_details',[$product->product_cat->slug,$product->slug])); ?>">
              <h5><?php echo e($product->product_name); ?></h5>
            </a>

            <h6><small>$<?php echo e($product->new_price); ?> </small> <del>$<?php echo e($product->old_price); ?></del></h6>

          </div>
        </a>
      </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>

  </div>

</section>


<section class="video-section">

  <div class="container">



    <div class="top-headings" data-aos="fade-down" data-aos-duration="2000">

      <h4>Watch Videos</h4>

      <h2>Watch the video how students<br>train</h2>

    </div>

    <div class="vid-area">

      <div class="play-btn">

        <div class="play">

          <a data-fancybox="gallery" data-src="<?php echo e(asset('images/video.mp4')); ?>" width="100%" height="500"
            controls="controls" preload="metadata">

            <img src="<?php echo e(asset('images/video-img.png')); ?>">

            <svg version="1.1" id="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              x="0px" y="0px" height="100px" width="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
              xml:space="preserve">

              <path class="stroke-solid" fill="#fa7e2cc7" stroke="#fa7e2cc7" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7

                C97.3,23.7,75.7,2.3,49.9,2.5" />

              <path class="icon" fill="#fff"
                d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />

            </svg>

          </a>

        </div>

      </div>



    </div>

  </div>

</section>

<section class="events-section">

  <div class="container">



    <div class="top-headings" data-aos="fade-up" data-aos-duration="3000">

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







<section class="our-location-section">

  <div class="container">



    <div class="top-headings" data-aos="fade-left" data-aos-duration="2000">

      <h4>Locations</h4>

      <h2>Our Locations</h2>

    </div>



    <div class="row">

      <div id="chartdiv" data-aos="fade-left" data-aos-duration="3000"></div>

    </div>



  </div>

</section>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
  // $(document).on('click','.star',function(){
   
  //    var review= $(this).attr("data-value");
  //   var product_id=$(this).attr("data-id"); 
  //    $.ajax({
  //     url: "<?php echo e(route('add_review')); ?>",
  //     type: "post",
  //     data: {
  //      _token: "<?php echo e(csrf_token()); ?>",
  //       review:review,
  //       product_id:product_id
  //       },
  //     dataType:'json',
  //       success: function (data) {
  //          if (data.success == true) {
  //           location.reload(true);
  //                    toastr.success(data.message);
                   
  //                  } else {
  //                     toastr.error(data.message);
  //                     // Swal.fire('successfully Added');
  //                 }
  //       },
  //   });




  //    }) 
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\grappling_zone\grappling_zone_\resources\views/web/index.blade.php ENDPATH**/ ?>