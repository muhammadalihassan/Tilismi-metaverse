
<?php $__env->startSection('title','GRAPPLING ZONE | User Registration Login'); ?>
<?php $__env->startSection('content'); ?>
<div class="inner-banner">
    <img src="<?php echo e(asset('images/inner-bg.jpg')); ?>" alt="">
    <div class="car-cls">
        <div class="container">
            <div class="row">
                <div class="bnr-heading">
                    <h2>Registration/Login</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="application-form">

    <form id="application-form" method="POST" action="<?php echo e(route('registration_submit')); ?>">
        <?php echo csrf_field(); ?>
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

                <div class="col-md-6">
                    <div class="apply-form1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="application-orga">
                                    <p>User Name:<span>*</span></p>

                                    <div class="swipea-floating-control">
                                        <input type="text" name="name" id="name" placeholder="Enter your name" required
                                            class="form-control">
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="application-orga">
                                    <p>Email: <span>*</span></p>
                                    <div class="swipea-floating-control">
                                        <input type="email" name="email" id="email" placeholder="Enter your email"
                                            required class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="application-orga">
                                    <p>Address:<span>*</span></p>

                                    <div class="swipea-floating-control">
                                        <input type="text" name="address" id="address" placeholder="Enter your address"
                                            required class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="application-orga">
                                    <p>Phone Number:<span>*</span></p>

                                    <div class="swipea-floating-control">
                                        <input type="number" name="phonenumber" id="phonenumber"
                                            placeholder="Enter your Phone Number" required class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="application-orga">
                                    <p>Password:<span>*</span></p>

                                    <div class="swipea-floating-control">
                                        <input type="password" name="password" id="password"
                                            placeholder="Enter your password" required class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="application-orga">
                                    <p>Confirm Password:<span>*</span></p>

                                    <div class="swipea-floating-control">
                                        <input type="password" name="confirm_password" id="confirm_password"
                                            placeholder="Enter your Confirm Password" required class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="apply-form3">
                                    <div class="row">

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">


                                            <div class="application-sub">
                                                <!-- Button trigger modal -->
                                                <button type="submit" id="application-form-submit"
                                                    class="btn btn-primary ">
                                                    Submit
                                                </button>
                                            </div>


                                        </div>
                                    </div>
    </form>
    </div>
    </div>
    </div>

    </div>
    </div>


    <div class="col-md-6">
        <div class="em-for">
            <form action="<?php echo e(route('login')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="application-orga">
                            <p>Email:<span>*</span></p>

                            <div class="swipea-floating-control">
                                <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" required="">
                            </div>
                        </div>
                    </div>


                </div>
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

                <div class="row">
                    <div class="col-md-12">
                        <div class="application-orga">
                            <p>Password:<span>*</span></p>
                            <div class="swipea-floating-control">
                                <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="Password" required="" name="password">
                            </div>
                        </div>
                    </div>

                </div>
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

                <div class="row">
                    <div class="col-md-12">
                        <div class="application-sub">
                            <!-- Button trigger modal -->
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

    </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\grappling_zone\grappling_zone_\resources\views/web/user-registration.blade.php ENDPATH**/ ?>