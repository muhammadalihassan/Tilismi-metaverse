 
<?php $__env->startSection('content'); ?>
<section class="banner-contct">
   <div class="banner-cntct-div">
      <video src="<?php echo e(asset($aboutus_banner->img)); ?>" muted="" autoplay="" loop="" playsinline=""></video>
      <div class="container">
         <div class="banner-cntct-txt">
            <h3>About Us</h3>
            <ul>
               <li>
                  <a href="<?php echo e(route('welcome')); ?>">Home</a>
               </li>
               <li>/</li>
               <li>About</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="abt-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="offer-txt wow fadeInLeft">
               <h4>Our Mission</h4>
               <p>My Mobile DNA Partners with Clinics, Family Law Firms, Family Courts, Hospitals, and Private Individuals. Our Collectors drive out to our customers location and collect their DNA samples while keeping all their information secure and confidential-The Truth Matters.</p>
               <p>What sets us apart from our competitors is that we aim to listen, care, and relate to our Employees, and Customers. We value your experiences, ideas, and feedback, and hold you in the highest regard. At the end of the day, we face many challenges life is too short. As People, we may never know what someone is going through. We can still enrich their lives by encouraging, inspiring, and building each other up. </p>
               <p></p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="sec-offer-slider-div">
               <div class="offer-imgs wow bounceIn">
                  <img src="<?php echo e(asset('images/abt1.jpg')); ?>" alt="what we offer">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="abt-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="sec-offer-slider-div wow bounceIn">
               <div class="offer-imgs">
                  <img src="<?php echo e(asset('images/abt2.jpg')); ?>" alt="what we offer">
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="offer-txt wow fadeInLeft">
               <h4>Our Vision</h4>
               <p>As the founder of this company. I would like you to know that our joy comes from helping you. It is better to give than receive. Happy Company + Happy Employees = Happy Customers for life. Our mission is to provide our customers with the best experience and customer satisfaction. “PEOPLE ARE OUR DNA” MY MOBILE DNA CEO AL Markoos. </p>
               <p>We take privacy and security very seriously. Customer’s information including login, profile, payment details, and genetic information is private, secure, and confidential. Furthermore, customers Information will never be shared or sold to third parties.  </p>
               <p>The Lab we utilize are the most accredited DNA Testing Lab in the world. Since 1995 they have conducted 45 million DNA Tests Accurately.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="sec-testing">
   <div class="test-vid">
      <video src="<?php echo e(asset('images/banner-vid2.mp4')); ?>" muted="" autoplay="" loop="" playsinline=""></video>
      <div class="counter-div">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="counter-num">
                     <p><span class="stat-number" data-n="50">0</span>samples collected</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="counter-num">
                     <p><span class="stat-number" data-n="100">0</span>Total Customers</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="counter-num">
                     <p><span class="stat-number" data-n="80">0</span>Satisfied Customers</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php echo $__env->make('web.include.feedback', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\dna_update_code\resources\views/web/about-us.blade.php ENDPATH**/ ?>