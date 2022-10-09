 
<?php $__env->startSection('content'); ?>
<section class="banner-contct">
  <div class="banner-cntct-div">
      <video src="<?php echo e(asset($service_banner->img)); ?>" muted="" autoplay="" loop="" playsinline=""></video>
      <div class="container">
          <div class="banner-cntct-txt">
              <h3>Services</h3>

              <ul>
                  <li>
                      <a href="<?php echo e(route('welcome')); ?>">Home</a>
                  </li>
                  <li>/</li>
                  <li>Services</li>
              </ul>
          </div>
      </div>
  </div>
</section>
<section class="sec-ser">
  <div class="container">
      <div class="row roww">
          <div class="col-md-6">
              <div class="sec-offer-slider-div wow bounceIn">
                  <div class="offer-slider2">
                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/legal1.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/legal2.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/legal3.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/legal4.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/legal5.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/legal6.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/legal7.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-md-6">
              <div class="test-txt legal test-vid-txt wow bounceIn">
                  <h3><?php echo e($service1->heading); ?></h3>
                  <p class="mar-btm"><?php echo e($service1->paragraph1); ?></p>
                  <p><?php echo e($service1->paragraph2); ?></p>

                  <div class="row">
                      <ul>
                          <?=html_entity_decode($service1->desc)?>
                      </ul>
                  </div>

                  <!-- <p>If the Father Is Deceased.</p>

            <p>We Can Test Full Siblings To That Child.</p>
            <p>We Can Test Grandparents, Uncles, Aunts, Siblings.</p> -->

                  <?php echo e($service1->paragraph3); ?>

              </div>
          </div>
      </div>

      <div class="row roww">
          <div class="col-md-6 no-padding">
              <div class="test-txt legal test-vid-txt wow bounceIn">
                  <h3><?php echo e($service2->heading); ?></h3>
                  <p class="mar-btm"><?php echo e($service2->paragraph1); ?></p>
                  <p><?php echo e($service2->paragraph2); ?></p>

                  <div class="row">
                      <div class="col-md-8">
                          <ul>
                              <?=html_entity_decode($service2->desc)?>

                              <!--  <li>Cheek Swab</li> -->
                          </ul>
                      </div>

                      <div class="col-md-4"></div>
                  </div>

                  <?php echo e($service2->paragraph3); ?>

              </div>
          </div>

          <div class="col-md-6">
              <div class="sec-offer-slider-div wow bounceIn">
                  <div class="offer-slider2">
                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/nlegal1.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>
                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/nlegal2.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>
                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/nlegal3.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/nlegal4.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/nlegal5.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/nlegal6.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/nlegal7.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="div-appoint">
          <a href="<?php echo e(route('appointment')); ?>" class="hover-btn">Schedule Appoinment</a>
      </div>
  </div>
</section>

      
<?php echo $__env->make('web.include.feedback', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\dna_update_5\dna_update_4\resources\views/web/service.blade.php ENDPATH**/ ?>