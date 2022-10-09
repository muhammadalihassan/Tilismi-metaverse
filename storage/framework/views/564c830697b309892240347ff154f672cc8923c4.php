 
<?php $__env->startSection('content'); ?>
<section class="banner">
  <div class="banner-video-div">
      <!--  <video src="images/banner-vid.mp4" muted="" autoplay="" loop="" playsinline=""></video> -->
      <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <video src="<?php echo e(asset($home_banner->img)); ?>" muted="" autoplay="" loop="" playsinline=""></video>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="banner-txt">
              <h4 data-aos="fade-up" data-aos-anchor-placement="bottom-center">welcome to my mobile DNA</h4>

              <h3 data-aos="fade-left">mobile dna paternity testing<!-- , in-home or office --></h3>

              <ul data-aos="fade-right">
                  <li>all test results are AABB approved</li>

                  <li>professional and confidential</li>

                  <li>servicing the pheonix area</li>

                  <li>complete test with facts</li>

                  <li>A+ rating with the BBB</li>

                  <li>peace of mind</li>
              </ul>

              <a href="<?php echo e(route('contact-us')); ?>" class="hover-btn">contact us</a>
          </div>
      </div>
  </div>
</section>

<section class="we-offer-sec">
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <div class="offer-txt" data-aos="fade-right" data-aos-duration="3000">
                  <h4>WHAT WE OFFER</h4>

                  <p>
                      At My Mobile DNA Our collectors drive out to our customers location and collect their DNA samples using a cheek swab method. We then submit it to the Lab for processing. We upload your test results on our secured
                      site. Customers will receive notifications by text and email which will contain a secured link where you can log in and have complete access to your PDF file. While keeping our customers information secure and
                      confidential. When a customer schedules an appointment, one of our collectors will call to confirm.
                  </p>

                  <a href="<?php echo e(route('about_us')); ?>" class="hover-btn">View More</a>
              </div>
          </div>

          <div class="col-md-6" data-aos="fade-left">
              <div class="sec-offer-slider-div">
                  <div class="offer-slider">
                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/offer1.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/offer2.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/offer3.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/offer4.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/offer5.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/offer6.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>

                      <div class="offer-slide">
                          <div class="offer-imgs">
                              <img src="<?php echo e(asset('images/offer7.jpeg')); ?>" alt="what we offer" />
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="sec-testing">
  <div class="test-vid">
      <video src="<?php echo e(asset('images/banner-vid2.mp4')); ?>" muted="" autoplay="" loop="" playsinline=""></video>

      <div class="test-vid-txt">
          <div class="container">
              <div class="row roww">
                  <div class="col-md-6" data-aos="fade-right">
                      <div class="sec-offer-slider-div">
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
                      <div class="test-txt" data-aos="fade-left">
                          <h3><?php echo e($service2->heading); ?></h3>
                          <p class="mar-btm"><?php echo e($service2->paragraph1); ?></p>
                          <p><?php echo e($service2->paragraph2); ?></p>

                          <div class="row">
                              <ul>
                                  <?=html_entity_decode($service2->desc)?>
                              </ul>
                          </div>

                          <?php echo e($service1->paragraph3); ?>

                      </div>
                  </div>
              </div>

              <div class="row roww">
                  <div class="col-md-6 no-padding">
                      <div class="test-txt" data-aos="fade-right">
                          <h3><?php echo e($service2->heading); ?></h3>
                          <p class="mar-btm"><?php echo e($service2->paragraph1); ?></p>
                          <p><?php echo e($service2->paragraph2); ?></p>

                          <div class="row">
                              <div class="col-md-8">
                                  <ul>
                                      <?=html_entity_decode($service2->desc)?>

                                      <!-- <li>Informational Paternity</li> -->

                                      <!-- <li>Cheek Swab</li> -->
                                  </ul>
                              </div>

                              <div class="col-md-4"></div>
                          </div>
                          <?php echo e($service1->paragraph3); ?>

                      </div>
                  </div>

                  <div class="col-md-6" data-aos="fade-left">
                      <div class="sec-offer-slider-div">
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
                                      <img
                                          src="
              <?php echo e(asset('images/nlegal4.jpeg')); ?>"
                                          alt="what we offer"
                                      />
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
      </div>
  </div>
</section>

<section class="faqs-sec">
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <div class="offer-imgs" data-aos="zoom-in">
                  <img src="<?php echo e(asset('images/dna.gif')); ?>" alt="what we offer" />
              </div>
          </div>

          <div class="col-md-6" data-aos="fade-left">
              <div class="faqs-head">
                  <h6>Frequently Asked Questions</h6>
              </div>

              <div class="accordion-work">
             <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <button class="accordion activ
               e" data-tab="<?php echo e(++$keys); ?>"><?php echo e($value->name); ?></button>
               <div class="panel" id="tab-<?php echo e($keys++); ?>">
                 <?=html_entity_decode($value->desc)?>
               </div>
                  
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
      </div>
  </div>
</section>

<?php echo $__env->make('web.include.feedback', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/digitalservicesc/public_html/mymobiledna-dev/resources/views/web/index.blade.php ENDPATH**/ ?>