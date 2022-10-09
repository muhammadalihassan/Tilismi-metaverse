
<?php $__env->startSection('content'); ?> 

<main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">System Setting</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">System</li>
                                <li class="breadcrumb-item active"><a href="#">Configuration</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header">                               
                                <h4 class="card-title">Web CMS</h4>                                
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <form class="needs-validation" novalidate action="<?php echo e(route('config_update')); ?>" method="POST">
                                            	<?php echo csrf_field(); ?>
                                                <div class="form-row">
                                                    <?php if($config): ?>
                                                    <?php $__currentLoopData = $config; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-md-12 mb-12">
                                                        <label for="validationCustomUsername"></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroupPrepend-<?php echo e($key); ?>"><?php echo e($val->view); ?></span>
                                                            </div>
                                                            <input type="text" name="<?php echo e($val->type); ?>" value="<?php echo e($val->value); ?>" class="form-control" id="validationCustomUsername" placeholder="<?php echo e($val->view); ?>" aria-describedby="inputGroupPrepend-<?php echo e($key); ?>" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a <?php echo e($val->view); ?>.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </div>
                                               
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\dna_update_code\resources\views/config.blade.php ENDPATH**/ ?>