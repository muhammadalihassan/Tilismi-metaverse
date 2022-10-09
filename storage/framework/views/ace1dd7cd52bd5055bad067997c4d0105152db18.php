
<?php $__env->startSection('content'); ?>    
    <div class="container">
            <div class="row vh-100 justify-content-between align-items-center">
                <div class="col-12">
                    <h2><?php echo e(__('Reset Password')); ?></h2>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form method="POST" action="<?php echo e(route('password.email')); ?>" class="row row-eq-height lockscreen  mt-5 mb-5">                        
                        <?php echo csrf_field(); ?>
                        <div class="lock-image col-12 col-sm-5"></div>
                        <div class="login-form col-12 col-sm-7">
                            <div class="form-group mb-3">
                                <label for="emailaddress"><?php echo e(__('E-Mail Address')); ?></label>
                                
                                <input id="emailaddress" placeholder="Enter your email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

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
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-primary" type="submit"> <?php echo e(__('Send Password Reset Link')); ?> </button>
                                
                                    <a class="btn btn-link" href="<?php echo e(url('/')); ?>">
                                        Or Login
                                    </a>
                                
                            </div>
                            
                        </div>
                    </form>
                </div>

            </div>
        </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\fareeha shah\Tilismi\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>