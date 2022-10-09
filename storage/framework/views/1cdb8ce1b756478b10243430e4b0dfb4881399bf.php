<link rel="shortcut icon" href="<?php echo e(asset('images/favicon.ico')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('vendors/bootstrap/css/bootstrap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('vendors/jquery-ui/jquery-ui.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('vendors/jquery-ui/jquery-ui.theme.min.css')); ?>">
<?php if(auth()->guard()->check()): ?>
<link rel="stylesheet" href="<?php echo e(asset('vendors/simple-line-icons/css/simple-line-icons.css')); ?>">        
<link rel="stylesheet" href="<?php echo e(asset('vendors/flags-icon/css/flag-icon.min.css')); ?>">         
<link rel="stylesheet" href="<?php echo e(asset('vendors/cryptofont/cryptofont.css')); ?>">         
<!-- END Template CSS-->

<!-- START: Page CSS-->
<link rel="stylesheet"  href="<?php echo e(asset('vendors/chartjs/Chart.min.css')); ?>">
<!-- END: Page CSS-->

<!-- START: Page CSS-->   
<link rel="stylesheet" href="<?php echo e(asset('vendors/morris/morris.css')); ?>"> 
<link rel="stylesheet" href="<?php echo e(asset('vendors/weather-icons/css/pe-icon-set-weather.min.css')); ?>"> 
<link rel="stylesheet" href="<?php echo e(asset('vendors/chartjs/Chart.min.css')); ?>"> 
<link rel="stylesheet" href="<?php echo e(asset('vendors/starrr/starrr.css')); ?>"> 
<link rel="stylesheet" href="<?php echo e(asset('vendors/fontawesome/css/all.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('vendors/ionicons/css/ionicons.min.css')); ?>"> 
<link rel="stylesheet" href="<?php echo e(asset('vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css')); ?>">

<link rel="stylesheet" href="<?php echo e(asset('vendors/jsgrid/jsgrid.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('vendors/jsgrid/jsgrid-theme.css')); ?>" />
<link href="<?php echo e(asset('css/style.css')); ?>" type="text/css" rel="stylesheet" />
<?php if(Auth::user()->role_id == 1): ?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
<?php endif; ?>

<?php endif; ?>
<!-- END: Page CSS-->
<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<!-- START: Custom CSS-->
<link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">



<?php echo $__env->yieldContent('link'); ?><?php /**PATH D:\FareehaShah\files_updated\resources\views/layouts/links.blade.php ENDPATH**/ ?>