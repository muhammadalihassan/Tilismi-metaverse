
<div class="container-fluid top-head">
  <div class="main-header">
  <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="index.php"><img src="<?php echo e(asset('web/images/logo.png')); ?>" alt="Logo" class="logo-n">
<img src="<?php echo e(asset('web/images/logo-b.png')); ?>" alt="Logo" class="logo-b">
<img src="<?php echo e(asset('web/images/logo-y.png')); ?>" alt="Logo" class="logo-y">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#banner">The End Game</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">Inside The den</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#craft">our craft</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#knowledge">knowledge base</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#ftr-form">talk to us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link req-demo-btn stan-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0)">request demo</a>
      </li>
    </ul>
  </div>
</nav>

</div>
<div class="scrolling-txt">
  <ul>
    <li class="active">
      <a href="#banner" class="scroll-txt">
      </a>
      <span>banner</span>
    </li>
<li>
      <a href="#about" class="scroll-txt">
      </a>
      <span>about<br>us</span>
    </li>
    <li>
      <a href="#leaders" class="scroll-txt">
      </a>
      <span>leaders</span>
    </li>
    <li>
      <a href="#brains" class="scroll-txt">
      </a>
      <span>brains</span>
    </li>
    <li>
      <a href="#craft" class="scroll-txt">
      </a>
      <span>our<br>craft</span>
    </li>
    <li>
      <a href="#knowledge" class="scroll-txt">
      </a>
      <span>knowledge<br>base</span>
    </li>
    <li>
      <a href="#ftr-form" class="scroll-txt">
      </a>
      <span>talk<br>to us</span>
    </li>
  </ul>
</div>
</div>
<!-- <div class="modal fade demo-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img src="<?php echo e(asset('web/images/logo.png')); ?>" alt="Logo" class="logo-n">
        <span>
          <h5 class="modal-title" id="exampleModalLongTitle">Request a <span>Demo</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </span>
        
      </div>
      <div class="main-form">
                  <form action="<?php echo e(route('contact_us')); ?>" method="POST">
                     <?php echo csrf_field(); ?>
                     <div class="row">
                        <div class="col-md-12">
                           <input type="text" name="fname" name="Name" placeholder="Full Name" id="uname " required>
                        </div>
                        <div class="col-md-12">
                           <input type="email"  name="email" placeholder="Email Address" id="umail" required>
                        </div>
                        <div class="col-md-12">
                           <input type="number"  name="phone_number" placeholder="Contact Number" id="unum" required>
                        </div>
                        <div class="col-md-12">
                           <textarea placeholder="Tell us about yourself" name="message" required></textarea>
                        </div>
                        <div class="col-md-12">
                           <button type="submit">
                           Submit Request
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
    </div>
  </div>
</div> -->


<div class="modal fade demo-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="row bg-grey">
            
            <div class="col-md-6">
               <div class="main-form">
                  <h6><span>Request </span>Demo</h6>
                  <form action="<?php echo e(route('contact_us')); ?>" method="POST">
                     <?php echo csrf_field(); ?>
                     <div class="row">
                        <div class="col-md-12">
                           <input type="text" name="fname" name="Name" placeholder="Full Name" id="uname " required>
                        </div>
                        <div class="col-md-12">
                           <input type="email"  name="email" placeholder="Email Address" id="umail" required>
                        </div>
                        <div class="col-md-12">
                           <input type="number"  name="phone_number" placeholder="Contact Number" id="unum" required>
                        </div>
                        <div class="col-md-12">
                           <textarea placeholder="Tell us about yourself" name="message" required></textarea>
                        </div>
                        <div class="col-md-12">
                           <button type="submit">
                           submit request
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-img">
                  <img src="<?php echo e(asset('web/images/popimg.jpeg')); ?>" alt="form">
               </div>
            </div>
         </div>
    </div>
  </div>
</div><?php /**PATH C:\xampp\htdocs\Tilismi_new_update\resources\views/web/layouts/header.blade.php ENDPATH**/ ?>