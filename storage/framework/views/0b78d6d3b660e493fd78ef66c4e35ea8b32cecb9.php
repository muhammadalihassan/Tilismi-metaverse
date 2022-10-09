 <body>
    <div class="floatbutton">
  <div class="btns_wrap">
    <a href="javascript:;" class="chat_wrap" onclick="setButtonURL();">
      <span class="icoo"><i class="fa fa-comment"  id="icoo1"></i></span>
      <span>Chat With Us</span>
    </a>
    <a href="tel:480-322-6577" class="call_wrap">
      <span class="icoo"><i class="fa fa-phone"></i></span>
      <span> 480-322-6577</span>
    </a>
    <a href="<?php echo e(url('home')); ?>" class="dash_wrap">
      <span class="icoo"><i class="fa fa-home" aria-hidden="true"></i>
</span>
      <span> Go To Dashboard</span>
    </a>
  </div>
  <?php if(Auth::user()): ?>
  <?php else: ?>
  <div class="clickbutton"><div class="crossplus">Let's Get Started</div></div>
  <div class="banner-form">
    <form method="POST" action="<?php echo e(route('login')); ?>">
      <?php echo csrf_field(); ?>
      <img src="<?php echo e(asset('images/logo2.png')); ?>" alt="logo">
      <h3>Login</h3>
      <input type="email" id="email" name="email" placeholder="Email Address" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>">

      <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
        </span>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      <input type="password" name="password" placeholder="Password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
      <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
        </span>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      <div class="chck">
         <input type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
         Remember Me
      </div>
      <button class="hover-btn" id="mybtn">Submit</button><p class="center">Create Account , <a href="<?php echo e(route('user_register')); ?>">Sign Up</a></p>
      <p class="center">Need Help
        <?php if(Route::has('password.request')): ?>
        ,<a href="<?php echo e(route('showForgetPasswordForm')); ?>">Forgot Password?</a></p>
        <?php endif; ?>
    </form>
   </div>
   <?php endif; ?>
  </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
    <!-- Header Start -->
    <header>
      <div class="wrapper">
    <div class="dropdown">
      <label data-value=""><i class="fa fa-globe" aria-hidden="true"></i></label>
      <ul>
        <li data-value="1">EN</li>
        <li data-value="2">SP</li>
      </ul>

    </div>
  </div>
      <div class="container">
        <div class="row">
        <div class="col-md-3">
          <div class="div-logo">
            <a href="<?php echo e(route('welcome')); ?>">
              <img src="<?php echo e(asset($logo->img)); ?>" alt="logo">
            </a>
          </div>
        </div>
        <div class="col-md-7">
            <nav id='cssmenu'>
    <div id="head-mobile"></div>
    <div class="button"></div>
    <ul class="hdr-menu">
    <li class='<?=(isset($navitem) && $navitem=="home")?"active":"" ?>'><a href="<?php echo e(route('welcome')); ?>"><?php echo e($nav8->name); ?></a></li>
    <li class='<?=(isset($navitem) && $navitem=="services")?"active":"" ?>'><a href="<?php echo e(route('services')); ?>"><?php echo e($nav2->name); ?></a></li>
    <li class='<?=(isset($navitem) && $navitem=="partners")?"active":"" ?>'><a href="<?php echo e(route('partners')); ?>"><?php echo e($nav3->name); ?></a></li>
    <li class='<?=(isset($navitem) && $navitem=="about")?"active":"" ?>'><a href="<?php echo e(route('about_us')); ?>"><?php echo e($nav1->name); ?></a>
    </li>
    <li class='<?=(isset($navitem) && $navitem=="contact")?"active":"" ?>'><a href="<?php echo e(url('contact-us')); ?>"><?php echo e($nav4->name); ?></a></li>
    <li class='<?=(isset($navitem) && $navitem=="faq")?"active":"" ?>'><a href="<?php echo e(route('faq')); ?>"><?php echo e($nav5->name); ?></a></li>
    </ul>
    </nav>
        </div>
        <div class="col-md-2 pd-lft">
          <div class="hdr-btns">
            <ul>
              <li>
                <a href="<?php echo e(route('appointment')); ?>" class="hover-btn"><?php echo e($nav7->name); ?></a>
              </li>

              <!-- <li>
                <a href="report.php">get your results</a>
              </li> -->
               <!-- <?php if(Auth::user()): ?>

               <li>
                <a href="<?php echo e(route('dashboard')); ?>" ><span class="icoo"><i class="fa fa-phone"></i></span></a>
              </li>
               <?php endif; ?> -->
            </ul>
            
          </div>
        </div>
      </div>
      </div>
  
    </header>
    <!-- Header End -->
<?php /**PATH D:\FareehaShah\dna_update_code\resources\views/web/layouts/header.blade.php ENDPATH**/ ?>