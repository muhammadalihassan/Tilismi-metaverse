

<footer>
    <div class="container ftr-container">
      <div class="row">
        <div class="col-md-3">
          <div class="div-logo ftr-logo">
            <a href="index.php">
              <img src="<?php echo e(asset($logo->img)); ?>" alt="logo">
            </a>
          </div>
          <div class="ftr-abt">
           <!--  <h3>About Us</h3> -->
            <p>My Mobile DNA Partners with Clinics, Family Law Firms, Family Courts, Hospitals, Private Individuals.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="quick-links padding-left-div">
            <h5><span>Quick Links</span></h5>
            <ul>
              <li class='<?=(isset($navitem) && $navitem=="home")?"active":"" ?>'><a href="<?php echo e(route('welcome')); ?>"><?php echo e($nav8->name); ?></a></li>
              <li class='<?=(isset($navitem) && $navitem=="services")?"active":"" ?>'><a href="<?php echo e(route('services')); ?>"><?php echo e($nav2->name); ?></a></li>
              <li class='<?=(isset($navitem) && $navitem=="partners")?"active":"" ?>'><a href="<?php echo e(route('partners')); ?>"><?php echo e($nav3->name); ?></a></li>
                <li class='<?=(isset($navitem) && $navitem=="about")?"active":"" ?>'><a href="<?php echo e(route('about_us')); ?>"><?php echo e($nav1->name); ?></a>
                </li>
                <li class='<?=(isset($navitem) && $navitem=="contact")?"active":"" ?>'><a href="<?php echo e(url('contact-us')); ?>"><?php echo e($nav4->name); ?></a></li>
               <li class='<?=(isset($navitem) && $navitem=="faq")?"active":"" ?>'><a href="<?php echo e(route('faq')); ?>"><?php echo e($nav5->name); ?></a></li> 
                <li><a href="<?php echo e(route('appointment')); ?>"><?php echo e($nav7->name); ?></a></li>
                
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="quick-links">
            <h5><span>Useful Links</span></h5>
            <ul>
              <li><a href="#">definitions</a></li>
              <li><a href="#">Customer Login</a></li>
              <li><a href="#">Customer Signup</a></li>
              <li><a href="#">change of terms</a></li>
              <li><a href="#">application of terms</a></li>
              <li><a href="#">customers response</a></li>
              
              <!-- <li><a href="#">client's response</a></li> -->
            </ul>
          </div>
        </div>
        <div class="col-md-3 cntctt-ftrr">
          <div class="quick-links">
            <h5><span>Get in Touch</span></h5>
            <ul class="ftr-cntct">
              <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:Info@mymobiledna.com">Info@mymobiledna.com</a></li>
              <li><i class="fa fa-phone" aria-hidden="true"></i> Company # <a href="tel:480-322-6577">480-322-6577</a></li>
              <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="https://goo.gl/maps/B4dbtc6LEuQMLsN87" target="_blank">Phoenix Arizona, United States</a></li>

              <li><img src="<?php echo e(asset('images/wing.png')); ?>" alt="" style="width: 40px;"><a href="">Health Care & Social Assistance</a></li>


            </ul>
            <a href="#"><img src="<?php echo e(asset('images/cards.png')); ?>" alt="marchent"></a>
          </div>
        </div>
      </div>
    </div>
<div class="btm-ftr">
  <div class="container">
    <div class="btm-ftr-txt">
      <ul>
        <li class="mobile-dna-txt"><p>© 2021 <a href="index.php">My Mobile DNA</a>. All Rights Reserved</p></li>
        <li><a href="<?php echo e(route('terms_condition')); ?>">Terms & Conditions</a></li>
        <li><a href="<?php echo e(route('term_of_use')); ?>">Terms of Use</a></li>
        <li><a href="<?php echo e(route('privacy_policy')); ?>">Privacy Policy</a></li>
        <li><a href="<?php echo e(route('contractor_agreement')); ?>">Contractor Agreement</a></li>


        
      </ul>
    </div>
  </div>
</div>
</footer>

    <!-- let us help work end -->



   <?php /**PATH D:\FareehaShah\dna_code\resources\views/web/layouts/footer.blade.php ENDPATH**/ ?>