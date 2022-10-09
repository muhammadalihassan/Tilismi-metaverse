<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <!-- START: Head-->
    <head>
        <meta charset="UTF-8">
        <title><?php echo e(isset($title)?$title:'Taskboard'); ?></title>

        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"> 
        <!-- START: Template CSS-->
        <?php echo $__env->make('layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('css'); ?>
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->
    
    <body id="main-container" class="default dark compact-menu">
        <?php if(auth()->guard()->check()): ?>
            <?php if(Auth::user()->role_id == 1): ?>
                <?php echo $__env->make('layouts.popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        <?php endif; ?>
        <div class="main-body">
        <input type="hidden" id="web_url" value="<?php echo e(url('/')); ?>"/>
        <!-- START: Pre Loader-->
        <div class="se-pre-con">
            <div class="loader"></div>
        </div>
        <!-- END: Pre Loader-->
        <?php if(auth()->guard()->check()): ?>
        <!-- START: Header-->
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- END: Header-->

        <!-- START: Main Menu-->
        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <!-- END: Main Menu-->
        <?php endif; ?>
        <!-- START: Main Content-->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- END: Content-->
        <!-- START: Footer-->
        <?php if(auth()->guard()->check()): ?>
        <footer class="site-footer">
            2021 &copy; <?php echo e(env('APP_NAME')); ?> Dashboard
        </footer>
        <?php endif; ?>
        <!-- END: Footer-->

        <!-- START: Back to top-->
        <a href="#" class="scrollup text-center"> 
            <i class="icon-arrow-up"></i>
        </a>
        <!-- END: Back to top-->



        <!-- START: Template JS-->
        <?php echo $__env->make('layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php echo $__env->yieldContent('js'); ?>
        
        </div>
    </body>
    <!-- END: Body-->
</html>
<?php /**PATH C:\fareeha shah\Tilismi\resources\views/layouts/main.blade.php ENDPATH**/ ?>