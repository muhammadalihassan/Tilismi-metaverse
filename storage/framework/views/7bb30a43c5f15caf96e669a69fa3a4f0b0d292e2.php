
<?php $__env->startSection('content'); ?>
<section class="banner-contct">
   <div class="banner-cntct-div">
      <img src="<?php echo e(asset($contact_banner->img)); ?>" alt="banner" class="cntc-bner">
      <div class="container">
         <div class="banner-cntct-txt">
            <h3>Contact Us</h3>
            <ul>
               <li>
                  <a href="<?php echo e(route('welcome')); ?>">Home</a>
               </li>
               <li>/</li>
               <li>Contact Us</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="main-contact">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="info">
               <i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i>
               <div class="info-content">
                  <a href="mailto:Info@mymobiledna.com"><span>Info@mymobiledna.com</span></a>
               </div>
            </div>
            <div class="info">
               <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
               <div class="info-content">
                  <p>Business # </p>
                  <a href="tel:480-322-6577"><span class="hover">480-322-6577</span></a>
               </div>
            </div>
            <!--   <div class="social-div">
               <p>Social Media:</p>
               <ul class="social-media">
                 <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                 <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                 <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
               </ul>
               </div> -->
            <div class="info">
               <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
               <div class="info-content">
                  <a href="https://goo.gl/maps/B4dbtc6LEuQMLsN87" target="_blank"><span>Phoenix AZ, United States </span></a>
               </div>
            </div>
            <div class="mapp">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3380999.60143766!2d-114.17329016447083!3d34.152547699040845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b08ebcb4c186b%3A0x423927b17fc1cd71!2sArizona%2C%20USA!5e0!3m2!1sen!2s!4v1636154415527!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
         </div>
         <div class="col-md-8">
            <div class="content">
               <h1>How Can We Help You?</h1>
               <form action="<?php echo e(route('contact_submit')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <div class="contact-form" id="form">
                     <div class="row">
                        <div class=" col-md-6"> 
                           <input required="" type="text" name="fname" placeholder="Full Name" style="text-transform: capitalize;" required>
                        </div>
                        <div class=" col-md-6">
                           <select name="select_im" >
                              <option>I am</option>
                              <option>Alleged Father</option>
                              <option>Daughter</option>
                              <option>Mother</option>
                              <option>Sibling</option>
                              <option>Son</option>
                              <option>Other</option>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class=" col-md-6"> 
                           <input required="" id="phoneNumb"  name="phoneNumb" placeholder="Phone Number" maxlength="16" required>
                        </div>
                        <div class=" col-md-6"> 
                           <input required="" id="email" type="text" name="email" placeholder="Email" required>
                        </div>
                     </div>
                     <div class="row">
                        <div class=" col-md-12"> 
                           <input id="ship-address" name="address" required autocomplete="off"  placeholder="Address" style="text-transform: capitalize;" required>
                        </div>
                     </div>
                     <div class="row">
                        <div class=" col-md-12">
                           <textarea name="message" rows="10" col="40" placeholder="Comments / Suggestions" style="text-transform: capitalize;" required></textarea>
                        </div>
                     </div>
                     <div class="submit-btn">
                        <button type="submit" class="hover-btn">
                        Submit
                        </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div id="fixed-social">
      <div>
         <a href="#" class="fixed-facebook" target="_blank"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
      </div>
      <div>
         <a href="#" class="fixed-instagrem" target="_blank"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
      </div>
      <div>
         <a href="#" class="fixed-twitter" target="_blank"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
      </div>
   </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\dna_update_2\resources\views/web/contactus.blade.php ENDPATH**/ ?>