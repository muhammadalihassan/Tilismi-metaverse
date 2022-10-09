
<?php $__env->startSection('title','GRAPPLING ZONE |CONTACT US'); ?> 
<?php $__env->startSection('content'); ?>
<div class="inner-banner">
      <img src="<?php echo e(asset('images/image45.jpg')); ?>" alt="">
      <div class="car-cls">
        <div class="container">
          <div class="row">
            <div class="bnr-heading">
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
      </div>
  </div>
<section class="contact-us-content">
    <div class="container">
        
         <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

        <div class="row">
            <div class="col-lg-7 col-md-12">
        <form id="contact-form" method="POST" action="<?php echo e(route('contact_submit')); ?>">
            <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-us">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" name="fname" value="<?php echo e(old('fname')); ?>" class="form-control" placeholder="First name" aria-label="Username" aria-describedby="basic-addon1" required="" />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contact-us">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" name="lname" class="form-control" placeholder="Last name" aria-label="Username" aria-describedby="basic-addon1" required="" value="<?php echo e(old('lname')); ?>"   />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-us">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control" placeholder="Your email" aria-label="Email" aria-describedby="basic-addon1" required="" value="<?php echo e(old('email')); ?>"  />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-us-area">
                            <span><img src="<?php echo e(asset('images/mail.png')); ?>" /></span>
                            <textarea name="message" class="form-control" required=""> </textarea>
                        </div>
                    </div>
                </div>

                <div class="contact-send-mess">
                <button type="submit">SEND MESSAGE</button>	
       
                </div>
                </form>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="contact-side">
                    <div class="cont-location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>

                    <div class="contact-loc-cont">
                        <h4>
                            <span>Address:</span><br />
                            <?php echo e($address->value?$address->value:''); ?>

                             
                        </h4>
                    </div>
                </div>

                <div class="contact-side-mail">
                    <div class="cont-mail">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>

                    <div class="cntc-box">
                       

                        <div class="contact-course">
                            <h4>
                                <span>Email:</span><br />
                                <a href="mailto:<?php echo e($email->value); ?>"><?php echo e($email->value?$email->value:''); ?></a>
                            </h4>
                        </div>

                        <div class="contact-general">
                            <h4>
                                <span>Phone Number:</span><br />
                                <a href="tel:<?php echo e($phone->value); ?>"><?php echo e($phone->value?$phone->value:''); ?></a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\Grappling_Zone\grappling_zone\resources\views/web/contact-us.blade.php ENDPATH**/ ?>