 
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

                  <a href="" class="hover-btn">View More</a>
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
                              <!-- <div class="offer-slide">

            <div class="offer-imgs">

              <img src="images/l2.jpg" alt="what we offer">

            </div>

          </div> -->

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
                  <button class="accordion active" data-tab="1">WHAT IS AABB STAND FOR?</button>

                  <div class="panel" id="tab-1">
                      <p>
                          The AABB’s Relationship Testing Accreditation program is the international gold standard for DNA paternity testing laboratories. The program establishes and promotes the highest standards of testing quality and
                          care for patients and customers in all aspects of parentage and other relationship testing. Most courts and other government agencies mandate that DNA tests be performed by AABB accredited laboratories. The Lab
                          we utilize received its initial AABB accreditation in 1996 and received AABB’s commendable practice recognition in 2004 for our Dual Process trademarked method.
                      </p>
                  </div>

                  <button class="accordion" data-tab="2">WHAT SETS THE LAB WE UTILIZE APART?</button>

                  <div class="panel" id="tab-2">
                      <p>
                          The Lab we use is the only company that runs every paternity DNA sample twice to ensure accurate results. While utilizing a trademarked method called Dual Process by two separate independent teams to ensure the
                          highest accuracy results. In House PHD's analyze review and finalize reports.
                      </p>
                  </div>

                  <button class="accordion" data-tab="3">WHO DO YOU SHARE CUSTOMERS INFORMATION WITH?</button>

                  <div class="panel" id="tab-3">
                      <p>
                          Customers genetic information is only shared with the Lab we use and all the information that is provided to us by the customer will never be shared or sold to third parties. We have invested a lot of resources
                          in ensuring we have the best privacy and security.
                      </p>
                  </div>

                  <button class="accordion" data-tab="4">WHAT OTHER CHARGES MIGHT APPLY FOR THE SERVICES?</button>

                  <div class="panel" id="tab-4">
                      <p>Customers pay for the service, and their card merchant fee varies on the payment method used. Most companies may hide fees. However, we have integrity and transparency.</p>
                  </div>

                  <button class="accordion" data-tab="5">IS THERE A BLOOD TEST REQUIRED FOR DNA PATERNITY TESTING?</button>

                  <div class="panel" id="tab-5">
                      <p>
                          No, we collect DNA samples using a swab method inside the mouth and cheek area. The mouth swab that we utilize is just as nearly as effective as the blood test. At mymobiledna, The Lab we use utilizes genetic
                          markers that exceeded the industry standards using the latest technology.
                      </p>
                  </div>

                  <button class="accordion" data-tab="6">HOW LONG DOES IT TAKE TO GET MY DNA PATERNITY TEST RESULTS?</button>

                  <div class="panel" id="tab-6">
                      <p>It could take up to 5-7 business days.</p>
                  </div>

                  <button class="accordion" data-tab="7">WHY SHOULD CUSTOMERS CHOOSE MY MOBILE DNA FOR PATERNITY TESTING?</button>

                  <div class="panel" id="tab-7">
                      <p>
                          Our Collectors certify that they have properly identified the parties and have collected, packaged, and sealed the DNA samples, and have witnessed the signatures under penalties for perjury, that no tampering
                          with the samples will occur while under our control.
                      </p>
                  </div>

                  <!--  <button class="accordion" data-tab="8">CAN I USE MY LEGAL DNA PATERNITY TEST CHAIN OF CUSTODY RESULTS NATIONWIDE? </button>

                        <div class="panel" id="tab-8">

                        <p>Yes, the Legal Paternity test chain of custody provides AABB accredited results that are officially legal and admissible in courts in all 50 states. </p>

                        </div> -->

                                        <!--  <button class="accordion" data-tab="9">WHAT OTHER CHARGES MIGHT APPLY FOR THE SERVICES? </button>

                        <div class="panel" id="tab-9">

                        <p>Customers pay for the service, and their card merchant fee varies on the payment method used. Most companies may hide fees. However, we have integrity and transparency.</p>

                        </div> -->

                                        <!--  <button class="accordion" data-tab="10">HOW DO CUSTOMERS GET THEIR RESULTS? </button>

                        <div class="panel" id="tab-10">

                        <p>We upload our Client's results to a website, and you will receive an email with a link where you will log in to our website, therefore, keeping your test results private and secure. Once you log in, you will be able to view, download, share your PDF file.</p>

                        </div> -->

                                        <!--    <button class="accordion active" data-tab="12">WHAT IS AABB STAND FOR?</button>

                            <div class="panel" id="tab-12">

                                <p>The AABB’s Relationship Testing Accreditation program is the international gold standard for DNA paternity testing laboratories. The program establishes and promotes the highest standards of testing quality and care for patients and customers in all aspects of parentage and other relationship testing.
                        Most courts and other government agencies mandate that DNA tests be performed by AABB accredited laboratories. Our labs received its initial AABB accreditation in 1996 and received AABB’s commendable practice recognition in 2004 for our Dual Process trademarked method.
                        </p>

                            </div> -->

                                        <!--   <button class="accordion active" data-tab="13">WHAT SETS OUR LABORATORIES APART?</button>

                            <div class="panel" id="tab-13">

                                <p>Our Labs is the only company that runs every paternity DNA sample twice to ensure accurate results. While utilizing a trademarked method called Dual Process by two separate independent teams to ensure the highest accuracy results. In House PHD's analyze review and finalize reports.</p>

                            </div> -->

                                        <!--        <button class="accordion" data-tab="14">WHY SHOULD CUSTOMERS CHOOSE MY MOBILE DNA FOR PATERNITY TESTING?</button>

                        <div class="panel" id="tab-14">

                        <p>Our Collectors certify that they have properly identified the parties and have collected, packaged, and sealed the DNA samples, and have witnessed the signatures under penalties for perjury, that no tampering with the samples will occur while under our control.</p>

                        </div> -->
              </div>
          </div>
      </div>
  </div>
</section>

<?php echo $__env->make('web.include.feedback', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\dna_update_3\resources\views/web/index.blade.php ENDPATH**/ ?>